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
        return view('enlist.allenlistment')->with('programs', $program)
                                           ->with('divisions', $division);
               //->with('users', $users);
    }

    public function create(Request $request){

        $enlist = new Enlist;
        $enlist->surname = $request->surname;
        $enlist->firstmiddlename = $request->firstmiddlename;
        $name = $request->surname.", ".$request->firstmiddlename;
        $enlist->dateOfBirth = $request->dateOfBirth;
        $enlist->sex = $request->sex;
        $enlist->civilStatus = $request->civilStatus;
        $enlist->homeAddress = $request->homeAddress;
        $enlist->homeTelFaxEmail = $request->homeTelFaxEmail;
        $enlist->mobileNum = $request->mobileNum;
        $enlist->citizenship = $request->citizenship;
        $enlist->nameAddSHS = $request->nameAddSHS;
        $enlist->track = $request->track;
        $enlist->strand = $request->strand;
        $enlist->isIndigenous = $request->isIndigenous;
        $enlist->indigenousCommunity = $request->indigenousCommunity;
        $enlist->nameAddCollegeUniv = $request->nameAddCollegeUniv;
        $enlist->programChoiceOne = $request->programChoiceOne;
        $enlist->programChoiceTwo = $request->programChoiceTwo;
        $enlist->programChoiceThree = $request->programChoiceThree;
        $programChoice = $request->programChoiceOne.", ".$request->programChoiceTwo." and ".$request->programChoiceThree;
        $enlist->fatherName = $request->fatherName;
        $enlist->fatherOccupation = $request->fatherOccupation;
        $enlist->motherName = $request->motherName;
        $enlist->motherOccupation = $request->motherOccupation;
        $enlist->annualFamilyIncome = $request->annualFamilyIncome;
        $enlist->save();

        \Mail::to($request->homeTelFaxEmail)->send(new SendCourse($name, $programChoice));
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
