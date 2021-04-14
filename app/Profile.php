<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'date_of_birth',
        'home_address',
        'gender',
        'profile_photo',
        'expires_at'
    ];

    public function	user() {
        return	$this->belongsTo('App\User');
    } 
}