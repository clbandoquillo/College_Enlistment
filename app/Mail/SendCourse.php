<?php

namespace App\Mail;
use App\Enlist;
use App\Program;
use DB;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCourse extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $programChoice;
    public $choice1;
    public $choice2;
    public $choice3;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $programChoice, $choice1, $choice2, $choice3)
    {
        $this->name = $name;
        $str = "";
        if(sizeof($programChoice) == 1){
            $str = "";
        }
        if(sizeof($programChoice) == 2){
            $str = " and ";
        }
        if(sizeof($programChoice) == 3){
            $str = ", ";
        }
        $this->programChoice = implode($str, $programChoice);
        $this->choice1 = $choice1;
        $this->choice2 = $choice2;
        $this->choice3 = $choice3;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $ch1 = $this->fchoice($this->choice1);
        $ch2 = $this->schoice($this->choice2);
        $ch3 = $this->tchoice($this->choice3);
        return $this->view('emails.enlist')->with('ch1', $ch1)
                                            ->with('ch2', $ch2)
                                            ->with('ch3', $ch3)
                                            ->subject('Pre-Registration For Incoming First Year Students');
    }

    public function fchoice($choice1){
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
        INNER JOIN [Enlistment].[dbo].[curriculumn] ON [Enlistment].[dbo].[curriculumn].[CODE] = [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE] 
        INNER JOIN [Enlistment].[dbo].[subjects] ON [Enlistment].[dbo].[CURRICCONTENT].[SUBJECTCODE] = [Enlistment].[dbo].[subjects].[CODE]
        WHERE [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE] = '$choice1' and [YEARSTARTED] = 2019 and [Enlistment].[dbo].[CURRICCONTENT].[SEMESTER] = 1 and [Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL] = 1 ORDER BY [Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL], [Enlistment].[dbo].[CURRICCONTENT].[SEMESTER] ASC;
    "));
        // dd($menu);
        $message = 'success';
        $thead = "<h3>$choice1</h3>
                    <table style='width:60%'>
                        <tr>
                        <th width = '25%'>CODE</th>
                        <th width = '25%'>SUBJECT NUMBER</th>
                        <th width = '50%'>DESCRIPTION</th>
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

    public function schoice($choice2){
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
        INNER JOIN [Enlistment].[dbo].[curriculumn] ON [Enlistment].[dbo].[curriculumn].[CODE] = [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE] 
        INNER JOIN [Enlistment].[dbo].[subjects] ON [Enlistment].[dbo].[CURRICCONTENT].[SUBJECTCODE] = [Enlistment].[dbo].[subjects].[CODE]
        WHERE [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE] = '$choice2' and [YEARSTARTED] = 2019 and [Enlistment].[dbo].[CURRICCONTENT].[SEMESTER] = 1 and [Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL] = 1 ORDER BY [Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL], [Enlistment].[dbo].[CURRICCONTENT].[SEMESTER] ASC;
    "));
        // dd($menu);
        $message = 'success';
        $thead = "<h3>$choice2</h3>
                    <table style='width:60%'>
                        <tr>
                        <th width = '25%'>CODE</th>
                        <th width = '25%'>SUBJECT NUMBER</th>
                        <th width = '50%'>DESCRIPTION</th>
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

    public function tchoice($choice3){
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
        INNER JOIN [Enlistment].[dbo].[curriculumn] ON [Enlistment].[dbo].[curriculumn].[CODE] = [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE] 
        INNER JOIN [Enlistment].[dbo].[subjects] ON [Enlistment].[dbo].[CURRICCONTENT].[SUBJECTCODE] = [Enlistment].[dbo].[subjects].[CODE]
        WHERE [Enlistment].[dbo].[CURRICCONTENT].[COURSECODE] = '$choice3' and [YEARSTARTED] = 2019 and [Enlistment].[dbo].[CURRICCONTENT].[SEMESTER] = 1 and [Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL] = 1 ORDER BY [Enlistment].[dbo].[CURRICCONTENT].[YEARLEVEL], [Enlistment].[dbo].[CURRICCONTENT].[SEMESTER] ASC;
    "));
        // dd($menu);
        $message = 'success';
        $thead = "<h3>$choice3</h3>
                    <table style='width:60%'>
                        <tr>
                        <th width = '25%'>CODE</th>
                        <th width = '25%'>SUBJECT NUMBER</th>
                        <th width = '50%'>DESCRIPTION</th>
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
}
