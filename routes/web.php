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
    $dati_comics = config("comics");
    //var_dump($dati_comics);
   /*  foreach ($dati_comics as $value) {
      var_dump($value['title']);
    } */
    return view('home.index', compact('dati_comics'));
    //"lista_comics" => $dati_comics invece di compact('dati_comics')
})->name("home.index");

Route::get("/products", function(){
    return view("products.index");
})->name("products.index");



