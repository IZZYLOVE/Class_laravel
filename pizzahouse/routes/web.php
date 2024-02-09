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

Route::get('/pizzas', function () {
    // return 'pizzas';
    // return ['henry','frank' ];
    return view('pizzas');
});

Route::get('/pizzastype', function () {
    return view('pizzastype', ['type'=> 'hawaiian']);
});

Route::get('/pizzasdetails', function () {
    $details = ['type'=> 'hawaiian', 'base'=>'cheesy crust', 'price'=> 10];
    return view('pizzasdetails', $details );
});

Route::get('/', function () {
    return view('welcome');
});