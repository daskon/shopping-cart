<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent implements Authenticatable
{
   use AuthenticableTrait;

   protected $fillable = ['email','password'];

   protected $collection = 'user';
   protected $connection = 'mongodb';

   public function orders(){
       return $this->hasMany('App\Order');
   }
}
