<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Student extends Model
{
    protected $fillable = [
        'student_id',
        'first_name',
        'last_name',
        'email',
        'year_level',
        'course'
    ];
}
