<?php

namespace App\Http\Controllers;

use App\Cinema;
use Illuminate\Http\Request;

class CinemasController extends Controller
{
    public function index()
    {
    	//get a cinema
    	$cinema = Cinema::find(1);
    	//pass it to the view
    	return view('cinemas.index', compact('cinema'));
    }
}
