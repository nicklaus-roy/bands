<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    public function index()
    {
    	$bands = Band::all();
    	return view('bands.index', compact('bands'));
    }

    public function show(Band $band)
    {
    	return view('bands.show', compact('band'));
    }

}
