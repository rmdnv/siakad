<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class WilayahController extends Controller
{
    public function provinsi()
    {
        $data = Cache::remember('provinces', 86400, function () {
            $json = Storage::disk('local')->get('data/provinsi.json');
            return json_decode($json, true) ?: [];
        });

        return response()->json($data);
    }

    public function kabupaten()
    {
        $data = Cache::remember('kabupaten', 86400, function () {
            $json = Storage::disk('local')->get('data/kabupaten.json');
            return json_decode($json, true) ?: [];
        });

        return response()->json($data);
    }
}
