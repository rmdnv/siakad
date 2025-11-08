<?php
namespace App\Http\Controllers;

use App\Models\PerguruanTinggi;

class PerguruanTinggiController extends Controller
{

    public function index()
    {
        $data = PerguruanTinggi::all();

        return response()->json($data);
    }

    /**
     * Tampilkan detail berdasarkan kode
     */
    public function show($kode)
    {
        $pt = PerguruanTinggi::where('kode', $kode)->first();

        if (! $pt) {
            return response()->json([
                'success' => false,
                'message' => 'Perguruan tinggi dengan kode ' . $kode . ' tidak ditemukan.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data'    => $pt,
        ]);
    }
}
