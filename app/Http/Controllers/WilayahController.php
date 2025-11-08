<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WilayahController extends Controller
{
    private string $baseUrl = 'https://wilayah.id/api';

    public function provinsi()
    {
        $data = Cache::remember('provinces', 86400, function () {
        $response = Http::get('https://wilayah.id/api/provinces.json');
        if ($response->successful()) {
            $json = $response->json();
            return collect($json['data'])->pluck('name')->toArray();
        }
        return [];
    });

    return response()->json($data);
    }

    public function kabupaten($kodeProvinsi)
    {
        return response()->json(
            Cache::remember("wilayah_kabupaten_{$kodeProvinsi}", 3600, function () use ($kodeProvinsi) {
                return Http::get("{$this->baseUrl}/regencies/{$kodeProvinsi}.json")->json();
            })
        );
    }

    public function kecamatan($kodeKabupaten)
    {
        return response()->json(
            Cache::remember("wilayah_kecamatan_{$kodeKabupaten}", 3600, function () use ($kodeKabupaten) {
                return Http::get("{$this->baseUrl}/districts/{$kodeKabupaten}.json")->json();
            })
        );
    }

    public function kelurahan($kodeKecamatan)
    {
        return response()->json(
            Cache::remember("wilayah_kelurahan_{$kodeKecamatan}", 3600, function () use ($kodeKecamatan) {
                return Http::get("{$this->baseUrl}/villages/{$kodeKecamatan}.json")->json();
            })
        );
    }
}
