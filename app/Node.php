<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    public function route()
    {
    	return $this->belongsTo(Route::class);
    }
}
