<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/formulario/{formulario}/pdf', [PdfController::class, 'imprimirFormulario'])->name('formulario.pdf');
Route::get('/', function () {
    return view('welcome');
});


