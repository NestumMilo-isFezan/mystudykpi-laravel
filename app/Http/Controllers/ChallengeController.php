<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    public function index(){
        // Variables
        $title = "Challenge and Plans";
        // Logic here

        // Return View ([view file kat resource], [data])
        return view('challenge',[
            "title" => $title,
            "challenge" => Challenge::get()
        ]);
    }
}
