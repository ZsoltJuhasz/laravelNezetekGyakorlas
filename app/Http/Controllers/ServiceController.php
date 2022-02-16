<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $name = "Béla";
        $email = "bela@test.hu";

        return view("services", compact("name","email"));
    }
}
