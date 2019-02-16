<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Enlist;
use App\Program;
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

    public function create(Request $request){

        $enlist = new Enlist;
        $enlist->surname = $request->surname;
        $enlist->firstmiddlename = $request->firstmiddlename;
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
        $enlist->fatherName = $request->fatherName;
        $enlist->fatherOccupation = $request->fatherOccupation;
        $enlist->motherName = $request->motherName;
        $enlist->motherOccupation = $request->motherOccupation;
        $enlist->annualFamilyIncome = $request->annualFamilyIncome;
        $enlist->save();

        return Redirect::back()->withErrors(['Enlistment Created Successfully']);

    }
}
