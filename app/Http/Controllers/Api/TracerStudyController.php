<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TracerStudy;
use Illuminate\Http\Request;

class TracerStudyController extends Controller
{

    public function index()
    {
        return response()->json(TracerStudy::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn'                => 'required|unique:tracer_study,nisn',
            'nama'                => 'required|string|max:100',
            'kompetensi_keahlian' => 'required|string|max:100',
            'no_hp'               => 'nullable|string|max:20',
            'status'              => 'required|string|max:50',
            'status_supervisor'   => 'nullable|string|max:50',
        ]);

        $data = TracerStudy::create($validated);

        return response()->json($data, 201);
    }

    public function show(string $id)
    {
        $data = TracerStudy::find($id);

        if (! $data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($data);
    }


    public function update(Request $request, string $id)
    {
        $data = TracerStudy::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama'                => 'sometimes|string|max:100',
            'kompetensi_keahlian' => 'sometimes|string|max:100',
            'no_hp'               => 'nullable|string|max:20',
            'status'              => 'sometimes|string|max:50',
            'status_supervisor'   => 'nullable|string|max:50',
        ]);

        $data->update($validated);

        return response()->json($data);
    }

    public function destroy(string $id)
    {
        $data = TracerStudy::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
