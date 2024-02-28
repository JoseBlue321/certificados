<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/',[EventoController::class,'index'])->name('index.eventos');
Route::get('evento/{id}',[EventoController::class,'show'])->name('show.eventos');
Route::get('pdf/{id}',[EventoController::class,'pdf'])->name('pdf.eventos');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
