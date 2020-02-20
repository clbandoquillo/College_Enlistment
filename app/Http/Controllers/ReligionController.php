<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    //
    public function religions(){
        $religions = DB::select(DB::raw("SELECT * FROM [Enlistment].[dbo].[religion] order by DESCRIPTION asc;"));
        return response()->json([
            'religions'=>$religions
        ], 200);
    }
}
