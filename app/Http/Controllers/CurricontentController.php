<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurricontentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function loadFirstSemSubjects($choice1, $choice2, $choice3)
    {
        $ch1 = firstChoice($choice1);

        return view('emails.enlist')->with('ch1', $ch1);
        
    }

    public function firstChoice($choice1){
        $overall = "";
        $append = "";
        $forAppend = "";
        $program = $menu = DB::select(DB::raw("SELECT [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE]
        ,[Enlistment].[dbo].[subjects].[SUBJNO]
        ,[Enlistment].[dbo].[subjects].[DESCRIPTION]
        ,[Enlistment].[dbo].[CURRICCONTENT].[YEARSTARTED]
        ,[Enlistment].[dbo].[CURRICCONTENT].[SUBJECTCODE]
        ,[Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL]
        ,[Enlistment].[dbo].[CURRICCONTENT].[SEMESTER]
        ,[Enlistment].[dbo].[CURRICCONTENT].[ISMAJOR]
        FROM [Enlistment].[dbo].[CURRICCONTENT] 
        INNER JOIN [Enlistment].[dbo].[programs] ON [Enlistment].[dbo].[programs].[CODE] = [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE] 
        INNER JOIN [Enlistment].[dbo].[subjects] ON [Enlistment].[dbo].[CURRICCONTENT].[SUBJECTCODE] = [Enlistment].[dbo].[subjects].[CODE]
        WHERE [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE] = '$choice1' and [YEARSTARTED] = 2019 and [Enlistment].[dbo].[CURRICCONTENT].[SEMESTER] = 1 and [Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL] = 1 ORDER BY [Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL], [Enlistment].[dbo].[CURRICCONTENT].[SEMESTER] ASC;
    "));
        // dd($menu);
        $message = 'success';
        $thead = "<h5>$choice1</h5>
                    <table style='width:100%'>
                        <tr>
                        <th>CODE</th>
                        <th>SUBJECT NUMBER</th>
                        <th>DESCRIPTION</th>
                        </tr>";
        $tfoot = "</table>";

        $data = array();
        //dd(count($program));
        if(isset($program))
        {
            foreach($program as $a)
            {            
                $courseCode = $a->COURSECODE;
                $subjNo = $a->SUBJNO;
                $description = $a->DESCRIPTION;   
                $forAppend = "<tr>
                                <td>$courseCode</td>
                                <td>$subjNo</td>
                                <td>$description</td>
                              </tr>";  
                $append .= $forAppend;
            }
        }
        $overall = $thead." ".$append." ".$tfoot;

        return $overall;

    }
    
    public function secondChoice($choice2){

    }

    public function thirdChoice($choice3){

    }
}
