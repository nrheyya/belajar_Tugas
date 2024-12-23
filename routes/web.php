<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\TampilanPetaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TampilanPetaController::class)-> group(function(){
    Route::get('peta', 'index');
});

Route::controller(FileUploadController::class)-> group(function(){
    Route::get('/fileupload', 'index');
    Route::get('fileupload/create', 'create');
    Route::post('fileupload/create', 'store');
    Route::get('fileupload/{fileupload}/show', 'show');
    Route::get('fileupload/{fileupload}/edit', 'edit');
    Route::put('fileupload/{fileupload}/edit', 'update');
    Route::get('fileupload/{fileupload}', 'destroy')->name('fileupload.destroy');

});

Route::post('/upload', [FileUploadController::class, 'upload'])->name('upload');

Route::get('/files', [App\Http\Controllers\FileController::class, 'index'])
    ->name('files.index');

Route::get('/files/create', [App\Http\Controllers\FileController::class, 'create'])
    ->name('files.create');

Route::post('/files/store', [App\Http\Controllers\FileController::class, 'store'])
    ->name('files.store');

Route::get('/files/{files}/download', [App\Http\Controllers\FileController::class, 'download'])
    ->name('files.download');