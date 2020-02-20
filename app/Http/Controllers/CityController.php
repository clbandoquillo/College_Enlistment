<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function cities(){
        $cities =  DB::select(DB::raw("SELECT * FROM [Enlistment].[dbo].[city] inner join provinces on provinces.ProvinceId = city.ProvinceId order by CityName asc;"));
        return response()->json([
            'cities'=>$cities
        ], 200);
    }
}
