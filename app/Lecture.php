<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'lecture_title', 'lecture_description', 'lecture_description_images_array'
    ];

    public function courses(){
        return $this->belongsTo('App\Course');
    }

    public function likes(){
        return $this->hasMany('App\Like');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function grades(){
        return $this->hasMany('App\Grade');
    }
}