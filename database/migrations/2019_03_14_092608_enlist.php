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
            $table->string('suffix')->nullable();
            $table->string('firstname');
            $table->string('middlename');
            $table->date('birthDate');
            $table->string('birthPlace');
            $table->integer('gender');
            $table->string('civilStatus');
            $table->string('citizenship');
            $table->string('religion');

            $table->string('permanentAddress');
            $table->string('permanentProvince');
            $table->string('permanentCity');
            $table->string('permanentzippostalcode');
            $table->string('permanentCountry');

            $table->string('sameAsPermanent')->nullable();
            $table->string('boarding')->nullable();
            $table->string('withRelative')->nullable();

            $table->string('cityAddress')->nullable();
            $table->string('cityProvince')->nullable();
            $table->string('cityCity')->nullable();
            $table->string('cityzippostalcode')->nullable();
            $table->string('cityCountry')->nullable();

            $table->string('email');
            $table->string('mobileNum');

            $table->string('personToContact');
            $table->string('personToContactRelationship');
            $table->string('personToContactTelNo')->nullable();
            $table->string('personToContactMobileNo');

            $table->string('bloodGroup')->nullable();
            $table->string('rh')->nullable();
            $table->string('physicianName')->nullable();
            $table->string('physicianContactInformation')->nullable();
            $table->integer('takingMedication')->nullable();
            $table->string('medicationInfo')->nullable();
            $table->string('specialNeeds')->nullable();
            $table->string('typeOfSpecialNeeds')->nullable();
            $table->string('othersSpecialNeeds')->nullable();

            $table->string('positionFamily');
            $table->integer('numBrothers');
            $table->integer('numSisters');


            $table->string('fatherName');
            $table->string('fatherOccupation');
            $table->string('fatherAddress');
            $table->string('fatherContactNum')->nullable();
            $table->string('motherName');
            $table->string('motherOccupation');
            $table->string('motherAddress');
            $table->string('motherContactNum')->nullable();

            $table->string('parentsMaritalStatus');
            $table->string('nameOfSpouse')->nullable();

            $table->string('annualFamilyIncome');

            $table->string('nameSHS')->nullable();
            $table->string('addressSHS')->nullable();
            $table->string('principalSHS')->nullable();
            $table->string('track')->nullable();
            $table->string('strand')->nullable();
            $table->integer('isIndigenous');
            $table->string('indigenousCommunity')->nullable();
            $table->string('nameCollegeUniv')->nullable();
            $table->string('addressCollegeUniv')->nullable();
            $table->string('programChoiceOne')->nullable();
            $table->string('programChoiceTwo')->nullable();
            $table->string('programChoiceThree')->nullable();

            $table->integer('currTherapyRehabCounseling')->nullable();
            $table->string('currTherapyRehabCounselingName')->nullable();
            $table->string('currTherapyRehabCounselingContact')->nullable();
            $table->string('reasonToSeekHelp', 1000)->nullable();

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
