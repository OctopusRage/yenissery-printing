<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images(){
        return $this->hasMany('App\Models\ProductImage');
    }
    public function primaryImage(){
        return $this->images()->where('is_primary_display',true)->first();
    }
}
