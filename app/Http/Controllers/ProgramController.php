<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
        // dd();
        //$users = User::all();

        return view('programs.index');
               //->with('users', $users);
    }

    public function create(Request $request){

        $program = new Program;
        $program->programCode = $request->programCode;
        $program->programDescription = $request->programDescription;
        $program->save();

        return Redirect::back()->withErrors(['Program Created Successfully']);

    }

    public function all()
    {
        $program = Program::all();
        $message = 'success';

        $data = array();
        //dd($program);
        if(isset($program))
        {
            foreach($program as $a)
            {
                $array = array();
               /* $array['edit'] = '<span class="server-maintenance-button" data-toggle="modal" data-target="#add-modal"><button class="btn btn-xs btn-primary" id="editUser" name="editUser" value='.$a->id.'>
                <i class="fa fa-pencil"></i> EDIT</button></span>';*/
                $array['programcode'] = $a->programCode;
                $array['programdescription'] = $a->programDescription;
                $data[] = $array;
            }
        }

        $data = array('data' => $data, 'message' =>$message);

        return json_encode($data);
    }
}
