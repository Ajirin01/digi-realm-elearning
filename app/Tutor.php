<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'tutor_name', 'tutor_phone_number'
    ];

    public function courses(){
        return $this->hasMany('App\Course');
    }
}