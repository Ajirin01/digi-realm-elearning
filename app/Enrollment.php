<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'Student_name',
        'enrollment_course',
        'status'
    ];
}