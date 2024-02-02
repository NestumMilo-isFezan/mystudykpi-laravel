<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // Variables
        $title = "My StudyKPI Home";
        // Logic here

        // Return View ([view file kat resource], [data])
        return view('home',[
            "title" => $title
        ]);
    }
}
