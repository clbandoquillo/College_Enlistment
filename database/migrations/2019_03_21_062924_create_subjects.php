<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->string('CODE');
            $table->string('ID');
            $table->string('SUBJNO');
            $table->string('DESCRIPTION');
            $table->string('subjectLoad');
            $table->string('transcriptLoad');
            $table->string('divisionCode');
            $table->string('cDesc', 500);
            $table->string('yearLevel');
            $table->string('semester');
            $table->string('incCapping');
            $table->string('encodedBy');
            $table->string('groupNo');
            $table->string('isActive');
            $table->string('preReq');
            $table->string('OldSubjNo');
            $table->string('exemptSched');
            $table->string('teacherLoad');
            $table->string('loadType');
            $table->string('MaxClassSize');
            $table->string('MaxClassSizeSummer');
            $table->string('exemptRoom');
            $table->string('academicDepartmentId');
            $table->string('includeInAveComputation');
            $table->string('RoomTypeRequirement');
            $table->string('type');
            $table->string('exemptTeacher');
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
        Schema::dropIfExists('subjects');
    }
}
