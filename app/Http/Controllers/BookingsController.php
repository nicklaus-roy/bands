<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function create()
    {
    	Booking::create([
    		'date_booked' => '2020-01-12',
    		'booker' => 'Me',
    		'date_to_book' => '2020-01-12',
    		'type' => 'wedding',
    		'description' => 'party'
    	]);
    }
}
