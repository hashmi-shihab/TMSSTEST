<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentBasicInfo extends Model
{
    protected $fillable=['student_name','student_father_name','student_mother_name','student_blood_group'];
}
