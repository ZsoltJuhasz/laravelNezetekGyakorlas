<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;
use App\Http\Controllers\ServiceController;

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
    return view('welcome');
});

Route::view("/services-view", "services");

Route::get("/first", [Site::class, "index" ]);
// Route::get("/services", function () {
//     return "<h1>Szöveg a szervíz útvonalról</h1>";
// });

// Route::get("/services", function () {
//     return view("services");
// });

Route::get("/about",function(){
    return view("about");
});
Route::redirect("/products", "/about"); //átirányítás egy másik oldalra(productsról az aboutra)
//Route::get("/services/{id?}/{name}", [ServiceController::class, "index"]); //?-jel jelzi hogy tetszőlegesen adhatunk paramétert

Route::get("/services/{id?}/{name}", function($id, $name){
    echo "<h1>$id</h1>";
    echo "<h1>$name</h1>";
})->where([ "id" => "[0-9]+", "name" => "[a-zA-Zé]+"]); 
//bármennyi karakter lehet, de legalább 1-nek lennie kell, a *-nál üreset is elfogad és lehet bármennyi karakter 
//csak az angol abc kis és nagybetűit fogadja el 
//ékezetes karaktereket egyesével fel kell sorolni pl.:[a-zA-Zé]

Route::get("/juhasz",function(){
    return view("juhasz");
});
