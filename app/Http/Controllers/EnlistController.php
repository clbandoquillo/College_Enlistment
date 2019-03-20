<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Enlist;
use App\Mail\SendCourse;
use App\Program;
use App\Division;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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
        // dd();
        //$users = User::all();
        $program = Program::all();
        return view('enlist.index')->with('programs', $program);
                                   
               //->with('users', $users);
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

    public function create(Request $request){

        $enlist = new Enlist;
        $enlist->surname = $request->surname;
        $enlist->suffix = $request->suffix;
        $enlist->firstname = $request->firstname;
        $enlist->middlename = $request->middlename;
        $name = $request->surname." ".$request->suffix.", ".$request->firstname." ".$request->middlename;
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
        
        if($request->sameAsPermanent == 0){
            $enlist->cityAddress = $request->cityAddress;
            $enlist->cityProvince = $request->cityProvince;
            $enlist->cityCity = $request->cityCity;
            $enlist->cityzippostalcode = $request->cityzippostalcode;
            $enlist->cityCountry = $request->cityCountry;    
        }

        if($request->sameAsPermanent == 1){
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

        $enlist->positionFamily = $request->positionFamily;
        $enlist->numBrothers = $request->numBrothers;
        $enlist->numSisters = $request->numSisters;

        $enlist->fatherName = $request->fatherName;
        $enlist->fatherOccupation = $request->fatherOccupation;
        $enlist->fatherAddress = $request->fatherAddress;
        $enlist->fatherContactNum = $request->fatherContactNum;

        $enlist->motherName = $request->motherName;
        $enlist->motherOccupation = $request->motherOccupation;
        $enlist->motherAddress = $request->motherAddress;
        $enlist->motherContactNum = $request->motherContactNum;

        $enlist->parentsMaritalStatus = $request->parentsMaritalStatus;
        $enlist->nameOfSpouse = $request->nameOfSpouse;

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
        $choices = array();
        array_push($choices, $choice1);
        if($choice2 != ""){
            array_push($choices, $choice2);
        }
        if($choice3 != ""){
            array_push($choices, $choice3);
        }
        \Mail::to($request->email)->send(new SendCourse($name, $choices));
        $enlist->save();
        return Redirect::back()->with('success', "Hi ($name). You are now enlisted! Thank you.");

    }

    public function all()
    {
        $enlist = Enlist::all();
        $message = 'success';

        $data = array();
        //dd($enlist);
        if(isset($enlist))
        {
            foreach($enlist as $a)
            {
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

        $data = array('data' => $data, 'message' =>$message);

        return json_encode($data);
    }
}
