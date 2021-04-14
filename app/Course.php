<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name', 'course_description', 'course_image', 'course_duration'
    ];
    
    public function	lectures() {
        return	$this->hasMany('App\Lecture');
    } 

    public function	likes() {
        return	$this->hanMany('App\Like');
    }

    public function	comments() {
        return	$this->hanMany('App\Comment');
    }

    public function tutors(){
        return $this->belongsTo('App\Tutor');
    }
}