<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products() {
        $this->belongsToMany('App\Models\Product', 'order_product');
    }

}
