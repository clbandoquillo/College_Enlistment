<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlist extends Model
{
    protected $table = 'enlist';
    protected $fillable = [
        'surname',
        'suffix',
        'firstname',
        'middlename',
        'birthDate',
        'birthDate',
        'birthPlace',
        'gender',
        'civilStatus',
        'citizenship',
        'religion',

        'permanentAddress',
        'permanentProvince',
        'permanentCity',
        'permanentzippostalcode',
        'permanentCountry',

        'cityAddress',
        'cityProvince',
        'cityCity',
        'cityzippostalcode',
        'cityCountry',

        'sameAsPermanent',
        'boarding',
        'withRelative',

        'email',
        'mobileNum',

        'personToContact',
        'personToContactRelationship',
        'personToContactTelNo',
        'personToContactMobileNo',

        'bloodGroup',
        'rh',
        'physicianName',
        'physicianContactInformation',
        'takingMedication',
        'medicationInfo',
        'specialNeeds',
        'typeOfSpecialNeeds',
        'othersSpecialNeeds',

        'positionFamily',
        'numBrothers',
        'numSisters',

        'fatherName',
        'fatherliving',
        'fatherOccupation',
        'fatherAddress',
        'fatherContactNum',

        'motherName',
        'motherliving',
        'motherOccupation',
        'motherAddress',
        'motherContactNum',

        'parentsMaritalStatus',
        'nameOfSpouse',

        'preSchoolName',
        'preSchoolAddress',
        'preSchoolGraduated',

        'gradeSchoolName',
        'gradeSchoolAddress',
        'gradeSchoolGraduated',

        'highSchoolName',
        'highSchoolAddress',
        'highSchoolGraduated',

        'nameSHS',
        'addressSHS',
        'track',
        'strand',
        'isIndigenous',
        'indigenousCommunity',
        'nameCollegeUniv',
        'addressCollegeUniv',
        'principalSHS',
        'programChoiceOne',
        'programChoiceTwo',
        'programChoiceThree',
        'fatherName',
        'fatherOccupation',
        'motherName',
        'motherOccupation',
        'annualFamilyIncome',
        'programChoiceOne',
        'programChoiceTwo',
        'programChoiceThree',
        'currTherapyRehabCounseling',
        'currTherapyRehabCounselingName',
        'currTherapyRehabCounselingContact',
        'reasonToSeekHelp'
    ];
}
