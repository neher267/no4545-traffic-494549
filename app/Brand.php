<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function products()
    {
    	$this->hasMany(Product::class);
    }

}
