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
            $table->string('mobileNum');
            $table->integer('sex');
            $table->integer('civilStatus');
            $table->string('homeAddress');
            $table->string('homeTelFaxEmail');
            $table->string('state');
            $table->string('city');
            $table->string('zippostalcode');
            $table->string('country');
            $table->string('citizenship');
            $table->string('nameSHS')->nullable();
            $table->string('addressSHS')->nullable();
            $table->string('track')->nullable();
            $table->string('strand')->nullable();
            $table->integer('isIndigenous');
            $table->string('indigenousCommunity')->nullable();
            $table->string('nameCollegeUniv')->nullable();
            $table->string('addressCollegeUniv')->nullable();
            $table->string('programChoiceOne');
            $table->string('programChoiceTwo')->nullable();
            $table->string('programChoiceThree')->nullable();
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
