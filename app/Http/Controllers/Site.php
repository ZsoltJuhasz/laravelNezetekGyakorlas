<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    public function index(){
        //echo "<h1>Szöveg az index metódusból</h1>";
        //print_r ("<h1>Szöveg az index metódusból</h1>"); így is lehet vagy print-el is

        return view("first");
    }
}
