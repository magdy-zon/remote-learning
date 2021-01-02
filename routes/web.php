<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('friday13');
});

// Routes for 'Grupo 1 y 3'
Route::get('/equipo1-3', function () {
    return view('equipo1y3/equipo1y3');
});
// Routes for 'Grupo 2'

// Routes for 'Grupo 4'

// Routes for 'Grupo 5'