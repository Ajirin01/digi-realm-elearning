<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['lecture',
    'grade'
    ];

    public function lectures(){
        return $this->belongsTo('App\Lecture');
    }

}