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
    $comics = config("comics");
    $dates_comics = [];

    foreach($comics as $index => $comic) {
        $comic["id"] = $index; // qui creiamo noi la chiavi id e gli assegniamo il valore dell'indice

        $dates_comics[] = $comic;
        
    } 
    //dump($dates_comics);
    return view("products.index", compact('dates_comics'));
})->name("products.index");

Route::get("/products/{id?}", function($id){
    $comics = config("comics");
    
    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $info_comic = $comics[$id];
        return view("products.index", [
        "comic"=>$info_comic
        ]);
    } else{
        abort('404');
    }
    //dump($dates_comics);

})->name("products.index");


