<?php

namespace App\Http\Controllers;

use App\StudentBasicInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInfoController extends Controller
{
    public function studentList()
    {
        $studentInfo = StudentBasicInfo::join('student_blood_groups','student_blood_groups.student_basic_infos_id','=','student_basic_infos.id')->get();
        return response()->json($studentInfo);
    }
}
