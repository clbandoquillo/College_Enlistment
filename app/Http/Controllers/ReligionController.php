<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    //
    public function religions(){
        $religions = DB::select(DB::raw("SELECT distinct r.description as descr, r.code code FROM [Enlistment].[dbo].[religion] r where code != '' and description != '' order by DESCRIPTION asc;"));
        return response()->json([
            'religions'=>$religions
        ], 200);
    }
}
