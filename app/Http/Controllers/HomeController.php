<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // Logic here

        // Return View ([view file kat resource], [data])
        return view('home');
    }
}
