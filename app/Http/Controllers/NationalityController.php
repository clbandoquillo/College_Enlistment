<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    //
    public function nationalities(){
        $nationalities = DB::select(DB::raw("select code, name from nationality where
            code not in (23,44,84,53,76,81,39,6,82,75,93,64,49,92,91,40,89,63,97,68,56,65,100,99,67,57,47,96,77,50,38,61,62,54,55,58,60,51,101,12,37,66,48,43,35,103,94,70,83,71,80,45)
        order by name"));
        return response()->json([
            'nationalities'=>$nationalities
        ], 200);
    }
}
