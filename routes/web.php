<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

Route::get('/', function () {
    return view('welcome');
});

// File Upload Controller
// Route::get('/file-upload', [FileUploadController::class, 'index'])->name(name: 'files.index');
// Route::get('/file-upload/upload-large-files', [FileUploadController::class, 'index'])->name(name: 'files.upload.large');

Route::get('/file-upload', [FileUploadController::class, 'index'])->name('files.index');
Route::post('/file-upload/upload-large-files', [FileUploadController::class, 'uploadLargeFiles'])->name('files.upload.large');
