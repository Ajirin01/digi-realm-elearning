<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile() {								
        return	$this->hasOne('App\Profile');
    }

    public function likes() {								
        return	$this->hasMany('App\Like');
    }

    public function comments() {								
        return	$this->hasMany('App\Comment');
    }

    public function enrolled_courses() {								
        return	$this->hasMany('App\EnrolledCourse');
    }

    public function grades() {								
        return	$this->hasMany('App\Grade');
    }

    public function assignment() {								
        return	$this->hasMany('App\Assignments');
    }

    public function assessments() {								
        return	$this->hasMany('App\Assessment');
    }

    public function subscriptions() {								
        return	$this->hasMany('App\Subscription');
    }

    public function chats() {								
        return	$this->hasMany('App\Chat');
    }

}