<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index( $id = null, $name ) {
        echo "<h1>Id: </h1>". $id." Név:".$name ;
        return view( "services");
    }
}
