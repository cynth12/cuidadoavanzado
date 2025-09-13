<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio.index');
})->name('inicio');

Route::get('/nosotros', function () {
    return view('nosotros.index');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('servicios.index');
})->name('servicios');

Route::get('/tecnologias', function () {
    return view('tecnologias.index');
})->name('tecnologias');

Route::get('/contacto', function () {
    return view('contacto.index');
})->name('contacto');