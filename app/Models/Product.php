<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images(){
        $this->hasMany('App\Models\ProductImages');
    }
}
