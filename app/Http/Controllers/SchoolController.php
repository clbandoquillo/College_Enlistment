<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //
    public function schools(){
        $schools = DB::select(DB::raw("SELECT [SchoolId]
        ,[SchoolName]
        ,[Address]
        ,[CityId]
        ,[ProvinceId]
    FROM [Enlistment].[dbo].[Schools] where schoolname != '' order by schoolname asc;"));
        return response()->json([
            'schools'=>$schools
        ], 200);
    }
}
