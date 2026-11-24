
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/hitung-diskon', function () {
    return view('diskon.index');
})->name('diskon.index');

Route::get('/hasil-perhitungan', function () {
    return view('diskon.hasil');
})->name('diskon.hasil');

Route::get('/riwayat', function () {
    return view('riwayat.index');
})->name('riwayat.index');

Route::get('/metode-fuzzy', function () {
    return view('metode.index');
})->name('metode.index');
