<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $trains = \App\Train::all();
        return view('home', compact('trains'));
    }
}
