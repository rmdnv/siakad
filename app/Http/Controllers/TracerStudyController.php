<?php
namespace App\Http\Controllers;

use App\Charts\StatusChart;
use App\Models\TracerStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TracerStudyController extends Controller
{
    public function index(Request $request, StatusChart $statusChart)
    {
        $query = TracerStudy::query();

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nis', 'like', $search . '%')
                    ->orWhere('nisn', 'like', $search . '%')
                    ->orWhere('nama', 'like', $search . '%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $perPage = $request->get('per_page', 10);

        $data = $query->orderBy('id', 'asc')->paginate($perPage)->withQueryString();

        $total   = TracerStudy::count();
        $sedang  = TracerStudy::where('status', 'Sedang Mengisi')->count();
        $selesai = TracerStudy::where('status', 'Selesai Mengisi')->count();
        $belum   = TracerStudy::where('status', 'Belum Mengisi')->count();
        $target  = $belum + $sedang + $selesai;
        $persen  = $selesai > 0 ? round(($selesai / $total) * 100, 2) : 0;

        $statusChart = $statusChart->build($belum, $sedang, selesai: $selesai);

        return view('tracer-study.dashboard.admin.index', compact(
            'data', 'total', 'sedang', 'selesai', 'persen', 'statusChart', 'target'
        ));
    }

    public function show(Request $request, $id)
    {
        if (session()->has('admin_nama')) {
            $user      = TracerStudy::with('answers')->findOrFail($id);
            $questions = \App\Models\Question::with('options')->get();

            return view('tracer-study.dashboard.admin.detail', compact('user', 'questions'));
        } else {
            return redirect('/tracer-study#login');
        }
    }

    public function exportCsv(Request $request)
    {
        if (! session()->has('admin_nama')) {
            return redirect('/tracer-study#login');
        }

        $fileName = 'tracer_study_' . Str::random(8) . '.csv';

        $query = TracerStudy::query();

        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('nis', 'like', $search . '%')
                    ->orWhere('nisn', 'like', $search . '%')
                    ->orWhere('nama', 'like', $search . '%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $per_page = $request->input('per_page', 1000); // export banyak data
        $data     = $query->orderBy('id', direction: 'asc')->limit($per_page)->get();

        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0",
        ];

        $columns = ['No', 'NISN', 'Nama', 'Status', 'Updated'];

        $callback = function () use ($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $i => $row) {
                fputcsv($file, [
                    $i + 1,
                    $row->nisn,
                    strtoupper($row->nama),
                    $row->status,
                    $row->updated_at->diffForHumans(),
                ]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
