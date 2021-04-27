<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'chat', 'receiver', 'status'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}