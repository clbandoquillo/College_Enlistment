<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    //
    public function countries(){

        $countries = DB::select(DB::raw("select * from countries;"));
        return response()->json([
            'countries'=>$countries
        ], 200);

    }
}
