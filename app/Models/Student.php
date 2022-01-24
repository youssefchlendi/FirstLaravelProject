<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //hamza
    protected $table="students";
    protected $primaryKey="id";
    protected $fillable=['student_name','course','fee'];
}
