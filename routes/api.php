<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerguruanTinggiController;

Route::get('perguruan-tinggi', [PerguruanTinggiController::class, 'index']);
Route::get('perguruan-tinggi/{kode}', [PerguruanTinggiController::class, 'show']);

