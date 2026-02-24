<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $taches = ['Taches 1', 'Taches 2', 'Taches 3', 'Taches 4'];
    return view('welcome', ['taches'=>$taches,'nom' =>'Isaak']);
});
Route::get('/about', function () {
    return view('about');
});
