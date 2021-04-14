<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrolledCourse extends Model
{
    protected $fillable = [
        'course_name'
    ];

    public function	user() {
        return	$this->belongsTo('App\User');
    }
}