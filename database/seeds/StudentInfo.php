<?php

use App\StudentBasicInfo;
use App\StudentBloodGroup;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentBasicInfoFaker= Faker::create('StudentBasicInfo');

        for ($i=1;$i<60001;$i++){
            StudentBasicInfo::create([
                'student_name' =>$studentBasicInfoFaker->word,
                'student_father_name' =>$studentBasicInfoFaker->word,
                'student_mother_name' =>$studentBasicInfoFaker->word,
                'student_blood_group' =>$studentBasicInfoFaker->word,
                'created_at' =>\Carbon\Carbon::now(),
                'updated_at' =>\Carbon\Carbon::now(),
            ]);
        }

        $studentBloodGroupFaker= Faker::create('StudentBloodGroup');
        $students_id = StudentBasicInfo::pluck('id');

        for ($j=0;$j<60000;$j++){
            StudentBloodGroup::create([
                'student_basic_infos_id' =>$students_id[$j],
                'student_blood_group_name' =>$studentBloodGroupFaker->word,
                'created_at' =>\Carbon\Carbon::now(),
                'updated_at' =>\Carbon\Carbon::now(),
            ]);
        }
    }
}
