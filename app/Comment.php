<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    'comment', 'status'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function lecture(){
        return $this->belongsTo('App\Lecture');
    }
}