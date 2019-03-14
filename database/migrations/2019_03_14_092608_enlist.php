<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Enlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enlist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->date('dateOfBirth');
            $table->integer('sex');
            $table->integer('civilStatus');
            $table->string('homeAddress');
            $table->string('homeTelFaxEmail');
            $table->string('mobileNum');
            $table->string('citizenship');
            $table->string('nameAddSHS')->nullable();
            $table->string('track')->nullable();
            $table->string('strand')->nullable();
            $table->integer('isIndigenous');
            $table->string('indigenousCommunity')->nullable();
            $table->string('nameAddCollegeUniv')->nullable();
            $table->string('programChoiceOne');
            $table->string('programChoiceTwo');
            $table->string('programChoiceThree');
            $table->string('fatherName');
            $table->string('fatherOccupation');
            $table->string('motherName');
            $table->string('motherOccupation');
            $table->string('annualFamilyIncome');

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
        Schema::dropIfExists('enlist');
    }
}
