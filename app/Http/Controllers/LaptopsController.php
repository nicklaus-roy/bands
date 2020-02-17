<?php

namespace App\Http\Controllers;

use App\Laptop;
use Illuminate\Http\Request;

class LaptopsController extends Controller
{
    public function store()
    {
    	Laptop::create([
    		'brand' => 'Dell',
    		'model' => 'alienware',
    	]);	
    }

    public function update()
    {
    	//retrieve one laptop from the db
    	$laptop = Laptop::where('id', 1)->first();
    	//change the values
    	$laptop->brand = 'Acer';
    	$laptop->model = 'Nitro';
    	//save to db 
    	$laptop->save();
    }

    public function delete()
    {
    	//retrieve one laptop from the db
    	$laptop = Laptop::where('id', 1)->first();
    	//delete the record
    	$laptop->delete();
    }
}
