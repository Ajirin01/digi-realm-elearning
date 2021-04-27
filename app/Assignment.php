<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'assignment', 'status'
    ];

    public function lecture(){
        return $this->belongsTo('App\Lecture');
    }
}