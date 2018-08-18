<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function orders(){
        return $this->hasMany('App\Models\Order');
    }
}
