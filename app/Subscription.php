<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'subscription_course', 'status'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
}