<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
    	// $members = DB::table('members')
    	// 	->where('id', '<', 4)
    	// 	->get();
    	$members = DB::table('members')
    		->where('firstname', 'like', '%r%')
    		->orWhere('lastname', 'like', '%r%')
    		->get();
    	return view('members.index', compact('members'));
    }

    public function create()
    {
    	DB::table('members')->insert([
    		// ['firstname' => 'Nick', 'lastname' => 'Roy']
    		// ['firstname' => 'Renz', 'lastname' => 'Renz s Last name'],
    		['firstname' => 'Julie', 'lastname' => 'Rapada'],
    		['firstname' => 'Ace', 'lastname' => 'Cabel'],
    		['firstname' => 'Red', 'lastname' => 'Damian']
    	]);
    }

    public function update()
    {
    	DB::table('members')
    		->where('id', 4)
    		->update(
    			['firstname' => 'Nicklaus', 'lastname' => 'Calpase']
    		);
    }

    public function delete()
    {
    	DB::table('members')->where('lastname', 'Doe')->delete();
    }
}
