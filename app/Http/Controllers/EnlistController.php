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
        $enlist->firstname = $request->firstname;
        $enlist->middlename = $request->middlename;
        $name = $request->surname.", ".$request->firstname." ".$request->middlename;
        $enlist->dateOfBirth = $request->dateOfBirth;
        $enlist->mobileNum = $request->mobileNum;
        $enlist->sex = $request->sex;
        $enlist->civilStatus = $request->civilStatus;
        $enlist->homeAddress = $request->homeAddress;
        $enlist->homeTelFaxEmail = $request->homeTelFaxEmail;
        $enlist->state = $request->state;
        $enlist->city = $request->city;
        $enlist->zippostalcode = $request->zippostalcode;
        $enlist->country = $request->country;
        $enlist->citizenship = $request->citizenship;
        $enlist->nameSHS = $request->nameSHS;
        $enlist->addressSHS = $request->addressSHS;
        $enlist->track = $request->track;
        $enlist->strand = $request->strand;
        $enlist->isIndigenous = $request->isIndigenous;
        $enlist->indigenousCommunity = $request->indigenousCommunity;
        $enlist->nameCollegeUniv = $request->nameCollegeUniv;
        $enlist->addressCollegeUniv = $request->addressCollegeUniv;
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
        if($choice1 != ""){
            \Mail::to($request->homeTelFaxEmail)->send(new SendCourse($name, $choice1));
        }

        if($choice2 != ""){
            \Mail::to($request->homeTelFaxEmail)->send(new SendCourse($name, $choice2));
        }

        if($choice3 != ""){
            \Mail::to($request->homeTelFaxEmail)->send(new SendCourse($name, $choice3));
        }
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
