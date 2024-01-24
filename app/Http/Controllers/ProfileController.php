<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        // Logic here

        // Return View
        return view('profile');
    }
}
