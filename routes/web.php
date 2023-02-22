<?php

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
    $home = 'HomePage';
    return view('home', compact('home'));
})->name('home');


Route::get('/greetings', function () {
    $greet = 'Benvenuto,';
    $user = ['Armando Marino'];
    return view('greetings', compact('greet', 'user'));
})->name('greetings');
