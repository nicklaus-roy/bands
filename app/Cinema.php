<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    public function movies()
    {
    	//one to many
    	return $this->hasMany(Movie::class);	
    }
}
