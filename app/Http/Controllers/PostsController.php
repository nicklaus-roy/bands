<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
    	$name = 'John Doe';
    	$age = 22;
    	$gender = 'Male';
    	return view('posts.index', compact('name', 'age', 'gender'));
    }

    public function create()
    {
    	return view('posts.create');
    }
}
