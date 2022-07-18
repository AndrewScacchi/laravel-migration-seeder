<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $trains = \App\Train::all();
        return view('home', compact('trains'));
    }
}
