<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_basic_infos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('student_name',50);
            $table->string('student_father_name',50);
            $table->string('student_mother_name',50);
            $table->string('student_blood_group',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_basic_infos');
    }
}
