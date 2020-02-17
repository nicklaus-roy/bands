<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function create()
    {
    	return view('movies.create');
    }

    public function store()
    {
    	//validate the request
    }
}
