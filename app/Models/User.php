<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    public function orders(){
        $this->hasMany('App\Models\Order');
    }

    protected $fillable = [ 'name', 'email', 'password', 'phone', 'is_active'];

    protected $hidden = ['password', 'remember_token'];
}
