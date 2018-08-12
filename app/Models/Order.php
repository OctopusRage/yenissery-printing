<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
        $this->belongsTo('App\Models\User');
    }
    public function products() {
        $this->belongsToMany('App\Models\Product', 'order_product');
    }

    public function productsWithDetails() {
        $this->belongsToMany('App\Models\Product', 'order_product')->withPivot(['quantity', 'finished_at_request', 'file_attachment']);
    }

    //**
    //  unpaid
    //  waiting_confirmation
    //  on_queue
    //  on_progress
    //  finished
    //
    //*/STATUS ORDER

    public function payment(){
        $this->hasOne('App\Models\Payment');
    }

}
