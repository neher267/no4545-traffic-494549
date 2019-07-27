<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function nodes()
    {
    	return $this->hasMany(Node::class);
    }
}
