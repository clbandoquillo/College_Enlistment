<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Enlist;
use App\Mail\SendCourse;
use App\Program;
use App\Division;
use App\Religion;
use App\Province;
use App\Countries;
use App\City;
use DB;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnlistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $currentYear = date("Y") - 1;
        $student_enlistments = DB::select(DB::raw("
        SELECT top 10 [id]
              ,[surname]
              ,[suffix]
              ,[firstname]
              ,[middlename]
              ,[birthDate]
              ,[birthPlace]
              ,[gender]
              ,[civilStatus]
              ,[citizenship]
              ,[religion]
              ,[permanentAddress]
              ,[permanentProvince]
              ,[permanentCity]
              ,[permanentzippostalcode]
              ,[permanentCountry]
              ,[sameAsPermanent]
              ,[boarding]
              ,[withRelative]
              ,[cityAddress]
              ,[cityProvince]
              ,[cityCity]
              ,[cityzippostalcode]
              ,[cityCountry]
              ,[email]
              ,[mobileNum]
              ,[personToContact]
              ,[personToContactRelationship]
              ,[personToContactTelNo]
              ,[personToContactMobileNo]
              ,[bloodGroup]
              ,[rh]
              ,[physicianName]
              ,[physicianContactInformation]
              ,[takingMedication]
              ,[medicationInfo]
              ,[specialNeeds]
              ,[typeOfSpecialNeeds]
              ,[othersSpecialNeeds]
              ,[positionFamily]
              ,[numBrothers]
              ,[numSisters]
              ,[fatherName]
              ,[fatherLiving]
              ,[fatherOccupation]
              ,[fatherAddress]
              ,[fatherContactNum]
              ,[motherName]
              ,[motherLiving]
              ,[motherOccupation]
              ,[motherAddress]
              ,[motherContactNum]
              ,[parentsMaritalStatus]
              ,[nameOfSpouse]
              ,[annualFamilyIncome]
              ,[preSchoolName]
              ,[preSchoolAddress]
              ,[preSchoolGraduated]
              ,[gradeSchoolName]
              ,[gradeSchoolAddress]
              ,[gradeSchoolGraduated]
              ,[highSchoolName]
              ,[highSchoolAddress]
              ,[highSchoolGraduated]
              ,[nameSHS]
              ,[addressSHS]
              ,[principalSHS]
              ,[track]
              ,[strand]
              ,[isIndigenous]
              ,[indigenousCommunity]
              ,[nameCollegeUniv]
              ,[addressCollegeUniv]
              ,[programChoiceOne]
              ,[programChoiceTwo]
              ,[programChoiceThree]
              ,[currTherapyRehabCounseling]
              ,[currTherapyRehabCounselingName]
              ,[currTherapyRehabCounselingContact]
              ,[reasonToSeekHelp]
              ,[status]
              ,[created_at]
              ,[updated_at]
              ,[applicantID]
          FROM [Enlistment].[dbo].[enlist] where YEAR(created_at) = '$currentYear' order by id desc"));
        return response()->json([
            'student_enlistments' => $student_enlistments
        ], 200);
        // dd();
        //$users = User::all();
        /*
        $program = DB::select(DB::raw("SELECT * FROM [Enlistment].[dbo].[curriculumn] 
        WHERE CODE IN (SELECT COURSECODE
                FROM [Enlistment].[dbo].[CURRICCONTENT] 
                WHERE [YEARSTARTED] = 2019) AND yearAbolished IS NULL and shortCode IS NOT NULL and EnlistmentLevel = 'COLLEGIATE' order by divisioncode asc"));
        //$religion = Religion::all();
        $religion = DB::select(DB::raw("SELECT * FROM [Enlistment].[dbo].[religion] order by DESCRIPTION asc;"));
        $countries = Countries::all();
        $province = DB::select(DB::raw("SELECT * FROM [Enlistment].[dbo].[Provinces] order by ProvinceName asc;"));
        $city =  DB::select(DB::raw("SELECT * FROM [Enlistment].[dbo].[city] order by CityName asc;"));
        $nationality =  DB::select(DB::raw("select *
        from nationality
        where
            code not in (23,44,84,53,76,81,39,6,82,75,93,64,49,92,91,40,89,63,97,68,56,65,100,99,67,57,47,96,77,50,38,61,62,54,55,58,60,51,101,12,37,66,48,43,35,103,94,70,83,71,80,45)
        order by name"));
        return view('enlist.index')->with('programs', $program)
                                   ->with('religions', $religion)
                                   ->with('provinces', $province)
                                   ->with('city', $city)
                                   ->with('nationality', $nationality)
                                   ->with('countries', $countries);
                                   
               //->with('users', $users);*/
    }

    public function allin()
    {
        // dd();
        //$users = User::all();
        $program = Program::all();
        $division = Division::all();
        return view('enlist.allenlistment')->with('programs', $program)
            ->with('divisions', $division);
        //->with('users', $users);
    }

    public function filter(Request $request)
    {
        // dd();
        //$users = User::all();
        $program = Program::all();
        $division = Division::all();
        $period = $request->period;
        $divisionFilter = $request->division;
        $programFilter = $request->program;
        $query = DB::select(DB::raw("select * frp, "));
        return view('enlist.allenlistment')->with('programs', $program)
            ->with('divisions', $division);
        //->with('users', $users);
    }

    public function create(Request $request)
    {

        $enlist = new Enlist;
        $enlist->surname = mb_strtoupper($request->surname);
        $enlist->suffix = mb_strtoupper($request->suffix);
        $enlist->firstname = mb_strtoupper($request->firstname);
        $enlist->middlename = mb_strtoupper($request->middlename);
        $name = mb_strtoupper($request->surname . " " . $request->suffix . ", " . $request->firstname . " " . $request->middlename);
        $enlist->birthDate = $request->birthDate;
        $enlist->birthPlace = $request->birthPlace;
        $enlist->gender = $request->gender;
        $enlist->civilStatus = $request->civilStatus;
        $enlist->citizenship = $request->citizenship;
        $enlist->religion = $request->religion;

        $enlist->permanentAddress = $request->permanentAddress;
        $enlist->permanentProvince = $request->permanentProvince;
        $enlist->permanentCity = $request->permanentCity;
        $enlist->permanentzippostalcode = $request->permanentzippostalcode;
        $enlist->permanentCountry = $request->permanentCountry;

        $enlist->sameAsPermanent = $request->sameAsPermanent;
        $enlist->boarding = $request->boarding;
        $enlist->withRelative = $request->withRelative;

        $enlist->cityAddress = "";
        $enlist->cityProvince = "";
        $enlist->cityCity = "";
        $enlist->cityzippostalcode = "";
        $enlist->cityCountry = "";

        if ($request->sameAsPermanent == 0) {
            $enlist->cityAddress = $request->cityAddress;
            $enlist->cityProvince = $request->cityProvince;
            $enlist->cityCity = $request->cityCity;
            $enlist->cityzippostalcode = $request->cityzippostalcode;
            $enlist->cityCountry = $request->cityCountry;
        }

        if ($request->sameAsPermanent == 1) {
            $enlist->cityAddress = $request->permanentAddress;
            $enlist->cityProvince = $request->permanentProvince;
            $enlist->cityCity = $request->permanentCity;
            $enlist->cityzippostalcode = $request->permanentzippostalcode;
            $enlist->cityCountry = $request->permanentCountry;
        }

        $enlist->email = $request->email;
        $enlist->mobileNum = $request->mobileNum;

        $enlist->personToContact = $request->personToContact;
        $enlist->personToContactRelationship = $request->personToContactRelationship;
        $enlist->personToContactTelNo = $request->personToContactTelNo;
        $enlist->personToContactMobileNo = $request->personToContactMobileNo;

        $enlist->bloodGroup = $request->bloodGroup;
        $enlist->rh = $request->rh;
        $enlist->physicianName = $request->physicianName;
        $enlist->physicianContactInformation = $request->physicianContactInformation;
        $enlist->takingMedication = $request->takingMedication;
        $enlist->medicationInfo = $request->medicationInfo;
        $enlist->specialNeeds = $request->specialNeeds;
        $enlist->typeOfSpecialNeeds = $request->typeOfSpecialNeeds;
        $enlist->othersSpecialNeeds = $request->othersSpecialNeeds;

        $enlist->positionFamily = $request->positionFamily;
        $enlist->numBrothers = $request->numBrothers;
        $enlist->numSisters = $request->numSisters;

        $enlist->fatherName = $request->fatherName;
        $enlist->fatherliving = $request->fatherLiving;
        $enlist->fatherOccupation = $request->fatherOccupation;
        $enlist->fatherAddress = $request->fatherAddress;
        $enlist->fatherContactNum = $request->fatherContactNum;

        $enlist->motherName = $request->motherName;
        $enlist->motherliving = $request->motherLiving;
        $enlist->motherOccupation = $request->motherOccupation;
        $enlist->motherAddress = $request->motherAddress;
        $enlist->motherContactNum = $request->motherContactNum;

        $enlist->parentsMaritalStatus = $request->parentsMaritalStatus;
        $enlist->nameOfSpouse = $request->nameOfSpouse;

        $enlist->preSchoolName = $request->preSchoolName;
        $enlist->preSchoolAddress = $request->preSchoolAddress;
        $enlist->preSchoolGraduated = $request->preSchoolGraduated;

        $enlist->gradeSchoolName = $request->gradeSchoolName;
        $enlist->gradeSchoolAddress = $request->gradeSchoolAddress;
        $enlist->gradeSchoolGraduated = $request->gradeSchoolGraduated;

        $enlist->highSchoolName = $request->highSchoolName;
        $enlist->highSchoolAddress = $request->highSchoolAddress;
        $enlist->highSchoolGraduated = $request->highSchoolGraduated;

        $enlist->nameSHS = $request->nameSHS;
        $enlist->addressSHS = $request->addressSHS;
        $enlist->track = $request->track;
        $enlist->strand = $request->strand;
        $enlist->isIndigenous = $request->isIndigenous;
        $enlist->indigenousCommunity = $request->indigenousCommunity;
        $enlist->nameCollegeUniv = $request->nameCollegeUniv;
        $enlist->addressCollegeUniv = $request->addressCollegeUniv;
        $enlist->principalSHS = $request->principalSHS;
        $enlist->programChoiceOne = $request->programChoiceOne;
        $enlist->programChoiceTwo = $request->programChoiceTwo;
        $enlist->programChoiceThree = $request->programChoiceThree;
        $enlist->fatherName = $request->fatherName;
        $enlist->fatherOccupation = $request->fatherOccupation;
        $enlist->motherName = $request->motherName;
        $enlist->motherOccupation = $request->motherOccupation;
        $enlist->annualFamilyIncome = $request->annualFamilyIncome;
        $choice1 = $request->programChoiceOne;
        $choice2 = $request->programChoiceTwo;
        $choice3 = $request->programChoiceThree;

        $enlist->currTherapyRehabCounseling = $request->currTherapyRehabCounseling;
        $enlist->currTherapyRehabCounselingName = $request->currTherapyRehabCounselingName;
        $enlist->currTherapyRehabCounselingContact = $request->currTherapyRehabCounselingContact;
        $enlist->reasonToSeekHelp = $request->reasonToSeekHelp;
        $choices = array();
        array_push($choices, $choice1);
        if ($choice2 != "") {
            array_push($choices, $choice2);
        }
        if ($choice3 != "") {
            array_push($choices, $choice3);
        }
        // $curr_content = CurricontentController::loadFirstSemSubjects($choice1, $choice2, $choice3);
        /*       $to_name = 'MIS';
        $to_email = $enlist->email;
$data = array('name'=>"Sam Jose", "body" => "Test mail");
    
Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
            ->subject('Artisans Web Testing Mail');
    $message->from('clbandoquillo@gmail.com','Artisans Web');
});*/
        $enlist->save();
        if ($enlist->save()) {
            \Mail::to($request->email)->send(new SendCourse($name, $choices, $choice1, $choice2, $choice3));
        }
        return Redirect::back()->with('success', "Hi ($name). You are now enlisted! Please check your e-mail for further instructions. Thank you.");
    }

    public function store(Request $request)
    {

        //dd($request->surname);
        $request->validate([
            'surname' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
           /* 'contact_number' => 'required',
            'birthDate' => 'required',
            'birthPlace' => 'required',
            'gender' => 'required',
            'civilStatus' => 'required',
            'religion' => 'required',

            'permanentAddress' => 'required',
            'permanentProvince' => 'required',
            'permanentCity' => 'required',
            'permanentzippostalcode' => 'required',
            'permanentCountry' => 'required',

            'sameAsPermanent' => 'required',
            'boarding' => 'required',
            'withRelative' => 'required',

            'email' => 'required',
            'mobileNum' => 'required',

            'personToContact' => 'required',
            'personToContactRelationship' => 'required',*/
        ]);
        
        $surname = $request->surname;
        $suffix = $request->suffix;
        $firstname = $request->firstname;
        $middlename = $request->middlename;
        $birthDate = $request->birthDate;

        $student_enlistments = new Enlist([
            'surname' => $surname,
            'suffix' => $suffix,
            'firstname' => $firstname,
            'middlename' => $middlename,
            'birthDate' => $birthDate,
            'birthPlace' => $request->birthPlace,
            'gender' => $request->gender,
            'civilStatus' => $request->civilStatus,
            'citizenship' => $request->citizenship,
            'religion' => $request->religion,

            'permanentAddress' => $request->permanentAddress,
            'permanentProvince' => $request->permanentProvince,
            'permanentCity' => $request->permanentCity,
            'permanentzippostalcode' => $request->permanentzippostalcode,
            'permanentCountry' => $request->permanentCountry,

            'sameAsPermanent' => $request->sameAsPermanent,
            'boarding' => $request->boarding,
            'withRelative' => $request->withRelative
        ]);
        
        $student_enlistments->save();

        return response()->json([

            'student_enlistments' => $student_enlistments,
            'message' => 'Student has been enlisted'
        ]);
/*
        $enlist = new Enlist;
        $enlist->surname = mb_strtoupper($request->surname);
        $enlist->suffix = mb_strtoupper($request->suffix);
        $enlist->firstname = mb_strtoupper($request->firstname);
        $enlist->middlename = mb_strtoupper($request->middlename);
        $name = mb_strtoupper($request->surname . " " . $request->suffix . ", " . $request->firstname . " " . $request->middlename);
        $enlist->birthDate = $request->birthDate;
        $enlist->birthPlace = $request->birthPlace;
        $enlist->gender = $request->gender;
        $enlist->civilStatus = $request->civilStatus;
        $enlist->citizenship = $request->citizenship;
        $enlist->religion = $request->religion;

        $enlist->permanentAddress = $request->permanentAddress;
        $enlist->permanentProvince = $request->permanentProvince;
        $enlist->permanentCity = $request->permanentCity;
        $enlist->permanentzippostalcode = $request->permanentzippostalcode;
        $enlist->permanentCountry = $request->permanentCountry;

        $enlist->sameAsPermanent = $request->sameAsPermanent;
        $enlist->boarding = $request->boarding;
        $enlist->withRelative = $request->withRelative;

        $enlist->cityAddress = "";
        $enlist->cityProvince = "";
        $enlist->cityCity = "";
        $enlist->cityzippostalcode = "";
        $enlist->cityCountry = "";

        if ($request->sameAsPermanent == 0) {
            $enlist->cityAddress = $request->cityAddress;
            $enlist->cityProvince = $request->cityProvince;
            $enlist->cityCity = $request->cityCity;
            $enlist->cityzippostalcode = $request->cityzippostalcode;
            $enlist->cityCountry = $request->cityCountry;
        }

        if ($request->sameAsPermanent == 1) {
            $enlist->cityAddress = $request->permanentAddress;
            $enlist->cityProvince = $request->permanentProvince;
            $enlist->cityCity = $request->permanentCity;
            $enlist->cityzippostalcode = $request->permanentzippostalcode;
            $enlist->cityCountry = $request->permanentCountry;
        }

        $enlist->email = $request->email;
        $enlist->mobileNum = $request->mobileNum;

        $enlist->personToContact = $request->personToContact;
        $enlist->personToContactRelationship = $request->personToContactRelationship;
        $enlist->personToContactTelNo = $request->personToContactTelNo;
        $enlist->personToContactMobileNo = $request->personToContactMobileNo;

        $enlist->bloodGroup = $request->bloodGroup;
        $enlist->rh = $request->rh;
        $enlist->physicianName = $request->physicianName;
        $enlist->physicianContactInformation = $request->physicianContactInformation;
        $enlist->takingMedication = $request->takingMedication;
        $enlist->medicationInfo = $request->medicationInfo;
        $enlist->specialNeeds = $request->specialNeeds;
        $enlist->typeOfSpecialNeeds = $request->typeOfSpecialNeeds;
        $enlist->othersSpecialNeeds = $request->othersSpecialNeeds;

        $enlist->positionFamily = $request->positionFamily;
        $enlist->numBrothers = $request->numBrothers;
        $enlist->numSisters = $request->numSisters;

        $enlist->fatherName = $request->fatherName;
        $enlist->fatherliving = $request->fatherLiving;
        $enlist->fatherOccupation = $request->fatherOccupation;
        $enlist->fatherAddress = $request->fatherAddress;
        $enlist->fatherContactNum = $request->fatherContactNum;

        $enlist->motherName = $request->motherName;
        $enlist->motherliving = $request->motherLiving;
        $enlist->motherOccupation = $request->motherOccupation;
        $enlist->motherAddress = $request->motherAddress;
        $enlist->motherContactNum = $request->motherContactNum;

        $enlist->parentsMaritalStatus = $request->parentsMaritalStatus;
        $enlist->nameOfSpouse = $request->nameOfSpouse;

        $enlist->preSchoolName = $request->preSchoolName;
        $enlist->preSchoolAddress = $request->preSchoolAddress;
        $enlist->preSchoolGraduated = $request->preSchoolGraduated;

        $enlist->gradeSchoolName = $request->gradeSchoolName;
        $enlist->gradeSchoolAddress = $request->gradeSchoolAddress;
        $enlist->gradeSchoolGraduated = $request->gradeSchoolGraduated;

        $enlist->highSchoolName = $request->highSchoolName;
        $enlist->highSchoolAddress = $request->highSchoolAddress;
        $enlist->highSchoolGraduated = $request->highSchoolGraduated;

        $enlist->nameSHS = $request->nameSHS;
        $enlist->addressSHS = $request->addressSHS;
        $enlist->track = $request->track;
        $enlist->strand = $request->strand;
        $enlist->isIndigenous = $request->isIndigenous;
        $enlist->indigenousCommunity = $request->indigenousCommunity;
        $enlist->nameCollegeUniv = $request->nameCollegeUniv;
        $enlist->addressCollegeUniv = $request->addressCollegeUniv;
        $enlist->principalSHS = $request->principalSHS;
        $enlist->programChoiceOne = $request->programChoiceOne;
        $enlist->programChoiceTwo = $request->programChoiceTwo;
        $enlist->programChoiceThree = $request->programChoiceThree;
        $enlist->fatherName = $request->fatherName;
        $enlist->fatherOccupation = $request->fatherOccupation;
        $enlist->motherName = $request->motherName;
        $enlist->motherOccupation = $request->motherOccupation;
        $enlist->annualFamilyIncome = $request->annualFamilyIncome;
        $choice1 = $request->programChoiceOne;
        $choice2 = $request->programChoiceTwo;
        $choice3 = $request->programChoiceThree;

        $enlist->currTherapyRehabCounseling = $request->currTherapyRehabCounseling;
        $enlist->currTherapyRehabCounselingName = $request->currTherapyRehabCounselingName;
        $enlist->currTherapyRehabCounselingContact = $request->currTherapyRehabCounselingContact;
        $enlist->reasonToSeekHelp = $request->reasonToSeekHelp;
        $choices = array();
        array_push($choices, $choice1);
        if ($choice2 != "") {
            array_push($choices, $choice2);
        }
        if ($choice3 != "") {
            array_push($choices, $choice3);
        }
        // $curr_content = CurricontentController::loadFirstSemSubjects($choice1, $choice2, $choice3);
        /*       $to_name = 'MIS';
        $to_email = $enlist->email;
$data = array('name'=>"Sam Jose", "body" => "Test mail");
    
Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
            ->subject('Artisans Web Testing Mail');
    $message->from('clbandoquillo@gmail.com','Artisans Web');
});*/
     /*   $enlist->save();
        if ($enlist->save()) {
            \Mail::to($request->email)->send(new SendCourse($name, $choices, $choice1, $choice2, $choice3));
        }
        return Redirect::back()->with('success', "Hi ($name). You are now enlisted! Please check your e-mail for further instructions. Thank you.");*/
    }

    public function all()
    {
        $enlist = Enlist::all();
        $message = 'success';

        $data = array();
        //dd($enlist);
        if (isset($enlist)) {
            foreach ($enlist as $a) {
                $array = array();
                /* $array['edit'] = '<span class="server-maintenance-button" data-toggle="modal" data-target="#add-modal"><button class="btn btn-xs btn-primary" id="editUser" name="editUser" value='.$a->id.'>
                <i class="fa fa-pencil"></i> EDIT</button></span>';*/
                $array['surname'] = $a->surname;
                $array['firstmiddlename'] = $a->firstmiddlename;
                $array['programChoiceOne'] = $a->programChoiceOne;
                $array['programChoiceTwo'] = $a->programChoiceTwo;
                $array['programChoiceThree'] = $a->programChoiceThree;
                $data[] = $array;
            }
        }

        $data = array('data' => $data, 'message' => $message);

        return json_encode($data);
    }
}
