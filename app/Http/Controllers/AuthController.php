<?php
namespace App\Http\Controllers;

use App\Enums\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    private $maxAttempts  = 5;
    private $decayMinutes = 1;

    public function login(Request $request)
    {
        $validated = $request->validate([
            'role' => 'required|string|in:' . implode(',', array_column(Role::cases(), 'value')),
        ]);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $role = Role::from($validated['role']);

        return match ($role) {
            Role::ALUMNI => $this->loginAlumni($request),
            Role::ADMIN => $this->loginAdmin($request),
            default => $this->invalidRole($role),
        };
    }

    private function invalidRole(Role $role)
    {
        return redirect('/tracer-study#login')->withErrors(['role' => "Role {$role->value} tidak dikenali."]);
    }

    private function loginAlumni(Request $request)
    {
        $request->validate([
            'nisn' => 'required|string',
        ]);

        $alumni = DB::table('tracer_study')
            ->where('nisn', $request->nisn)
            ->Orwhere('nis', $request->nisn)
            ->first();

        if ($alumni) {
            $request->session()->regenerate();
            session([
                'tracer_study_id'   => $alumni->id,
                'tracer_study_name' => $alumni->nama,
            ]);
            return redirect('/tracer-study/dashboard')->with('success', 'Login berhasil!');
        }

        return redirect('/tracer-study#login')->withErrors(['siswa' => 'NIS/NISN tidak ditemukan.']);
    }

    private function loginAdmin(Request $request)
    {
        $request->validate([
            'email'    => 'required|string|email',
            'password' => 'required|string',
        ]);

        $throttleKey = 'login:' . $request->ip();
        if (RateLimiter::tooManyAttempts($throttleKey, $this->maxAttempts)) {
            return redirect('/tracer-study#login')->withErrors(['login' => "Terlalu banyak percobaan login."]);
        }

        $admin = DB::table('admins')->where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            $request->session()->regenerate();
            session([
                'admin_id'   => $admin->id,
                'admin_nama' => $admin->nama,
            ]);

            RateLimiter::clear($throttleKey);

            return redirect('/tracer-study/dashboard')->with('success', 'Login admin berhasil!');
        }

        RateLimiter::hit($throttleKey, $this->decayMinutes * 60);

        return redirect('/tracer-study#login')->withErrors(['login' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/tracer-study#login')->with('success', 'Berhasil logout!');
    }
}
