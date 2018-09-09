<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function products() {
        return $this->belongsToMany('App\Models\Product', 'order_product');
    }

    public function productsWithDetails() {
        return $this->belongsToMany('App\Models\Product', 'order_product')->withPivot(['quantity', 'finished_at_request', 'file_attachment']);
    }

    //**
    //  unpaid
    //  on_progress
    //  finished
    //
    //*/STATUS ORDER

    public function payment(){
        return $this->hasOne('App\Models\Payment');
    }

}
