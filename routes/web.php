<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

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
    return view('welcome');
});
Route::get('/practice', function () {
    return view('layouts/practice');
});
Route::get('/tailwind', function () {
    return view('layouts/tailwindpractice');
});
Route::get('/forms', function () {
    return view('layouts/formpractice');
});