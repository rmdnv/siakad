<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerguruanTinggiController;
use App\Http\Controllers\WilayahController;

Route::prefix('wilayah')->group(function () {
    Route::get('/provinsi', [WilayahController::class, 'provinsi']);
    Route::get('/kabupaten/{kode}', [WilayahController::class, 'kabupaten']);
    Route::get('/kecamatan/{kode}', [WilayahController::class, 'kecamatan']);
    Route::get('/kelurahan/{kode}', [WilayahController::class, 'kelurahan']);
});

Route::get('perguruan-tinggi', [PerguruanTinggiController::class, 'index']);
Route::get('perguruan-tinggi/{kode}', [PerguruanTinggiController::class, 'show']);

Route::get('/prodi', function () {
    $path = storage_path('app/data/prodi.json');
    $data = json_decode(file_get_contents($path), true);

    return response()->json($data['prodi']);
});