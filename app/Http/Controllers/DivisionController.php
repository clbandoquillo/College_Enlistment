<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

class DivisionController extends Controller
{
    //
    public function index()
    {
        // dd();
        //$users = User::all();

        return view('divisions.index');
               //->with('users', $users);
    }

    public function create(Request $request){

        $division = new Division;
        $division->divisionCode = $request->divisionCode;
        $division->divisionDescription = $request->divisionDescription;
        $division->save();

        return Redirect::back()->with(['success', 'Division Created Successfully']);

    }

    public function all()
    {
        $division = Division::all();
        $message = 'success';

        $data = array();
        //dd($division);
        if(isset($division))
        {
            foreach($division as $a)
            {
                $array = array();
               /* $array['edit'] = '<span class="server-maintenance-button" data-toggle="modal" data-target="#add-modal"><button class="btn btn-xs btn-primary" id="editUser" name="editUser" value='.$a->id.'>
                <i class="fa fa-pencil"></i> EDIT</button></span>';*/
                $array['divisioncode'] = $a->divisionCode;
                $array['divisiondescription'] = $a->divisionDescription;
                $data[] = $array;
            }
        }

        $data = array('data' => $data, 'message' =>$message);

        return json_encode($data);
    }
}
