<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    //
    public function provinces(){
        $provinces = DB::select(DB::raw("SELECT * FROM [Enlistment].[dbo].[Provinces] order by ProvinceName asc;"));
        return response()->json([
            'provinces'=>$provinces
        ], 200);
    }
}
