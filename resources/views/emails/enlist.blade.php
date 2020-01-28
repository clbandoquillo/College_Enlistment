<!DOCTYPE html>

<html>
  <head>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 5px;
        text-align: left;    
      }
    </style>
  </head>

  <body>
    <p>Dear <b>{{ $name }}</b>,<br></br>
    The Ateneo de Davao University informs you that you have been enlisted as one of the freshmen for S.Y 2019-2020.<br>
    Based on your enlistment, you have chosen the following ({{ $programChoice }}) as your program choices.
    To proceed to your enrollment, please follow the instructions given to you. You may now proceed to the next steps below<br><br>

    Step 1: <b>ASSESSMENT OF COMPLETENESS OF DOCUMENTS AT THE NEW STUDENT/INFORMATION COUNTER.</b> Please have the following enrolment documents check for completeness at the New Student Counter at <b>Room F213, Second Floor, Finster Hall</b>:<br></br>

    <ol type="a">
      <li>Original Notice of Acceptance (NOA) from the Admissions Director, [plus 2 photocopies]</li>
      <li>Original Transfer Credential or Honorable Dismissal [plus 3 photocopies] <b>(For Transferees only)</b></li>
      <li>Original Transcript of Records or Certified Academic Records for evaluation [plus 3 photocopies] <b>(For Transferees only)</b></li>
      <li>Original Senior High School Report Card, SF 9 [plus 2 photocopies]</li>
      <li>Certificate of Good Moral Character</li>
      <li>Three (3) 1 x 1 colored photos</li>
      <li>Medical Certificate from the University Clinic, [plus 2 photocopies]</li>
      <li>Philippine Statistic Authority (PSA) Birth Certificate, [plus 2 photocopies]</li>
      <li>Philippine Statistic Authority (PSA) Marriage Contract (<i>for married students</i>), [plus 2 photocopies]</li>
      <li>One (1) copy of Notarized General Parents' Consent signed by parents or Legal guardian (forms, c/o Admissions Office)</li>
      <li>Signed Data Privacy Provision</li>
    </ol>

    Step 2: <b>SUBMISSION OF DOCUMENTS AND PERSONAL DATA CAPTURING AT THE PRE-REGISTRATION COUNTER.</b> Proceed to pre-registration counter for acceptance of application documents and Personal Data capturing;<br></br>

    Step 3: <b>SCHOOL ID.</b> Picture taking for your School ID, c/c Office of the Student Affairs (OSA). Submit the Notarized General Parent's Consent to OSA;<br></br>

    Step 4: <b>INTERVIEW.</b> See assigned faculty interviewers for interview at your designated interview area. Leave the one-page form and its attachments to your interviewer;<br></br>

    Step 5: <b>ENCODING OF SUBJECTS AND PRINTOUT OF CLASS SCHEDULE.</b> The program department encodes and provides your subjects and printout of class schedules;<br></br>

    Step 6: <b>PAYMENT OF TUITION AND FEES AT FINANCE OFFICE CASHIERS.</b> Pay your tuition and fees including OSA, Admission and Aid, and Guidance Office charges [<i>as stated below</i>] to the Cashier of Finance Office. Show your Official Receipt to Steps 1 and 3 Counters.<br></br>
    </p>

    <center>
      <p>
        <i>(<b>REMINDER:</b> In case payment will not be made within the day, make sure you will be able to pay at least the required down-payment within the 72- hour limit after your subjects are encoded digitally, otherwise your enrolment slot will be erased and given to the next registrant.)</i>
      </p>
    </center>
      <p>
      Step 7: <b>OSA KIT.</b>Return to the <b>Office of Student Affairs</b> at <b>Room F213</b>, Second Floor, Finster Hall for your OSA Kit (ID, ID sling, ID casing, School pin, Ribbon for female students, Uniform design).<br></br>

      <br></br>
      <i>Please don't reply to this e-mail.</i>
      </p><br></br>

      <b>IMPORTANT DATES/ACTIVITES/NOTES TO REMEMBER:</b>
      <ul style="list-style-type:disc;">
        <li>June 3 - 4       - Ateneo First Year Orientation Program (AFYOP) for School of Arts and Sciences (SAS) and School of 
                               Engineering (SEA), 8:00 am to 5:00 pm.</li>
        <li>June 6 - 7       - Ateneo First Year Orientation Program (AFYOP) for School of Business and Governance (SBG), School 
                               of Nursing (SON), and School of Education (SoE), 8:00 am to 5:00 pm.</li>
        <li>June 13          - Beginning of First Semester Classes</li>
        <li>June 15          - First Year late Enrollees/Transferees/Returnees Orientation Program</li>
        <li>July 6           - International Students Orientation Program</li>
      </ul><br></br>

      <p><b>Here are the curricula for your selected Program Choices for the First Semester of School Year 2019-2020.</b></p>
      
      {!! $ch1 !!}
      {!! $ch2 !!}
      {!! $ch3 !!}

  </body>

  <!-- jquery
		============================================ -->
    <script src="{{ asset('assets/jquery-3.3.1.min.js') }}"></script>

    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{ asset('assets/js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/data-table-active.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/bootstrap-table-export.js') }}"></script>
    <!--  editable JS
		============================================ -->
    <script src="{{ asset('assets/js/editable/jquery.mockjax.js') }}"></script>
    <script src="{{ asset('assets/js/editable/mock-active.js') }}"></script>
    <script src="{{ asset('assets/js/editable/select2.js') }}"></script>
    <script src="{{ asset('assets/js/editable/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/editable/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/js/editable/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('assets/js/editable/xediable-active.js') }}"></script>
    <!-- Chart JS
		============================================ -->
    <script src="{{ asset('assets/js/chart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/peity/peity-active.js') }}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset('assets/js/tab.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.12/sorting/num-html.js"></script>
    <script type = "text/javascript">
      $("#addProgram").click(function()
      {
          $("programs").attr("action", "/programs/create");
      });

    $("#loadFirstSemSubjects").DataTable({
      'paging'		: true,
  		'pageLength'	: 10,
  		'lengthChange'	: true,
  		'searching'		: true,
  		'ordering'		: true,
  		'aaSorting'		: [[0, "asc"]],
  		'info'			: false,
  		'autoWidth'		: false,
  		'columns'		: [
                    { data: 'COURSECODE' },
          					{ data: 'SUBJNO' },
                    { data: 'DESCRIPTION' },
    		],
    		"ajax": {
    	    	url: '/programs/all',
    			type: 'GET',
    			error: function(xhr, status, response)
    			{

    			},
    	    },
    	});

    </script>
</html>
