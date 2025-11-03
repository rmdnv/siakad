<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\TracerStudyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
    // return redirect()->route('tracer-study.index');
});

Route::get('/tracer-study', function () {
    return view('tracer-study.rev.index');
    // return view('tracer-study.index');
})->name('tracer-study.index');

Route::get('/tracer-study/dashboard', [DashboardController::class, 'dashboard']);

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/tracer-study/survey/complete', function () {
    return view('survey.complete.index');
});

Route::middleware('auth.tracer')->group(function () {
    Route::get('/tracer-study/survey/{stage_id}/{page?}', [SurveyController::class, 'show'])->name('survey.stage.page');
    Route::post('/tracer-study/survey/{stage_id}/{page}', [SurveyController::class, 'submit'])->name('survey.stage.submit');

    // route baru untuk hapus jawaban saat kembali
    Route::delete('/tracer-study/survey/delete-answer/{question_id}/{stage_id}/{page}', [SurveyController::class, 'deleteAnswer'])
        ->name('survey.stage.deleteAnswer');
});

Route::get('/tracer-study/dashboard/{id}/detail', [TracerStudyController::class, 'show'])->name('tracer.detail');

Route::get('/tracer/export/csv', [TracerStudyController::class, 'exportCsv'])
    ->name('tracer.export.csv');

use App\Http\Controllers\ChartController;

Route::get('/charts', action: [ChartController::class, 'index'])->name('charts.index');


use App\Http\Controllers\QuestionConditionController;

Route::resource('questions.conditions', QuestionConditionController::class);
Route::post('/questions/{question}/duplicate', [QuestionController::class, 'duplicate'])
    ->name('questions.duplicate');

Route::post('/questions/bulk-delete', [QuestionController::class, 'bulkDelete'])->name('questions.bulk_delete');
Route::post('/questions/bulk-duplicate', [QuestionController::class, 'bulkDuplicate'])->name('questions.bulk_duplicate');
Route::get('/questions/bulk-edit', [QuestionController::class, 'bulkEdit'])->name('questions.bulk_edit');
Route::get('/questions/bulk-edit', [QuestionController::class, 'bulkEdit'])->name('questions.bulk_edit');
Route::post('/questions/bulk-update', [QuestionController::class, 'bulkUpdate'])->name('questions.bulk_update');

// Resource
Route::resource('questions', QuestionController::class);