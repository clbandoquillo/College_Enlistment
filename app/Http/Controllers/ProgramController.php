<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Division;
use DB;
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

    public function programs(){
        $programs = DB::select(DB::raw("SELECT * FROM [Enlistment].[dbo].[curriculumn] 
        WHERE CODE IN (SELECT COURSECODE
                FROM [Enlistment].[dbo].[CURRICCONTENT] 
                WHERE [YEARSTARTED] = 2019) AND yearAbolished IS NULL and shortCode IS NOT NULL and EnlistmentLevel = 'COLLEGIATE' order by divisioncode asc"));
        return response()->json([
            'programs'=>$programs
        ], 200);
    }

    public function index()
    {
        // dd();
        //$users = User::all();
        $division = Division::all();

        return view('programs.index')->with('divisions', $division);
               //->with('users', $users);
    }

    public function create(Request $request){

        $program = new Program;
        $program->programCode = $request->programCode;
        $program->programDescription = $request->programDescription;
        $program->programDiv = $request->programDiv;
        $program->save();

        return Redirect::back()->with(['success', 'Program Created Successfully']);

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
                $array['programDiv'] = $a->programDiv;
                $data[] = $array;
            }
        }

        $data = array('data' => $data, 'message' =>$message);

        return json_encode($data);
    }

    public function program_choice_counter()
    {
        $program = $menu = DB::select(DB::raw("SELECT MAX(programs.programCode) as progcode, 
        programs.programDiv as progDiv,
        programs.programDescription as progDesc,
        count(e1.programChoiceOne) as Choice_1, 
        count(e2.programChoiceTwo) as Choice_2,
        count(e3.programChoiceThree) as Choice_3,  
        count(e1.programChoiceOne) + count(e2.programChoiceTwo) + count(e3.programChoiceThree) as Total
        from programs 
        left join enlist as e1 on e1.programChoiceOne = programs.programCode
        left join enlist as e2 on e2.programChoiceTwo = programs.programCode
        left join enlist as e3 on e3.programChoiceThree = programs.programCode
        group by programs.programCode, programs.programDescription, programs.programDiv"));
        // dd($menu);
        $message = 'success';

        $data = array();
        //dd(count($program));
        if(isset($program))
        {
            foreach($program as $a)
            {
                $array = array();                
                $array['programcode'] = $a->progcode;
                $array['programdescription'] = $a->progDesc;
                $array['programDiv'] = $a->progDiv;              
                $array['firstChoice'] = $a->Choice_1;
                $array['secondChoice'] = $a->Choice_2;
                $array['thirdChoice'] = $a->Choice_3; 
                $array['total'] = $a->Total; 
                $data[] = $array;
            }
        }
        
        $data = array('data' => $data, 'message' =>$message);

        return json_encode($data);
    }
}
