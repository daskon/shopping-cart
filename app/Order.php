<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
    protected $fillable = ['user_id','cart','address','name','payment_id'];

    protected $collection = 'order';
    protected $connection = 'mongodb';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
