<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public function order(){
        $this->belongsTo('App\Models\Order');
    }
}
