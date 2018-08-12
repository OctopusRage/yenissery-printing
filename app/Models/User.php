<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function orders(){
        $this->hasMany('App\Models\Order');
    }
}
