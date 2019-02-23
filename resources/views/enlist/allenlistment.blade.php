
<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.head')
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  	<link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/select2/dist/css/select2.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('assets/adminlte/dist/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/adminlte/dist/css/skins/skin-black.min.css') }}">
</head>
<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    @include('layouts.sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{ url('/home') }}"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.header')
        <!-- MAIN CONTENT -->
          <section class="content-header">
            <h1>
              Enlistment Report
              <div class="pull-right">
                <a class="btn btn-sm btn-primary" href="timeclock-report-print.html" target="_blank">
                  <i class="fa fa-print"></i>
                  Print to PDF
                </a>
              </div>
            </h1>
          </section>
          <section class="content container-fluid">
            <div class="row">
              <div class="col-md-3">
        <!-- FILTER BAR -->
                <div class="box box-default filter-bar">
                  <div class="box-header">
                    <h3 class="box-title">Report Filters</h3>
                  </div>
                  <div class="box-body">
                    <form action="">
                      <div class="form-group">
                        <label>Period</label>
                        <input type="text" class="form-control btn btn-default" id="daterange">
                      </div>
                      <div class="form-group noc-filter-group">
                        <label>Divisions</label>
                        <select class="form-control noc-select" multiple>
                          <option selected>All</option>
                          <option>Larry Orezonte</option>
                          <option>James Rodulfo</option>
                          <option>Bryan Duller</option>
                          <option>Arbie Alcasid</option>
                          <option>Kenny Granado</option>
                        </select>
                      </div>
                      <div class="form-group status-filter-group">
                        <label>Status</label>
                        <select class="form-control status-select" multiple>
                          <option selected>All</option>
                          <option>Login</option>
                          <option>Logout</option>
                          <option>Idle</option>
                          <option>Quick Break</option>
                          <option>Lunch Break</option>
                        </select>
                      </div>
                      <div class="form-group schedule-filter-group">
                        <label>Shift Schedule</label>
                        <select class="form-control schedule-select" multiple>
                          <option selected>All</option>
                          <option>Morning Shift (10am - 7pm)</option>
                          <option>Mid Shift (3pm - 12am)</option>
                          <option>Night Shift (10pm - 7am)</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="box-footer">
                    <button class="btn btn-primary btn-block generate-report-button">Generate Report</button>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
        <!-- REPORT -->
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Enlistment Report</h3>
                  </div>
                  <div class="box-body">
                    <table id = "enlist_table" class="table table-bordered" >
                      <thead>
                        <th>Surname</th>
                        <th>First and Middlename</th>
                        <th>Program Choice One</th>
                        <th>Program Choice Two</th>
                        <th>Program Choice Three</th>
                      </thead>
                    </table>
                  </div>
                </div>
        <!-- REPORT SUMMARY -->
                <div class="box report-summary">
                  <div class="box-header">
                    <h3 class="box-title">Report Summary</h3>
                  </div>
                  <div class="box-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <p class="text-primary"><strong>Filters Used</strong></p>
                        <table class="table table-condensed report-summary-table">
                          <tr>
                            <th>Period</th>
                            <td>06-20-2018 to 06-26-2018 / 7 days</td>
                          </tr>
                          <tr>
                            <th>Total Agents</th>
                            <td>5 agents</td>
                          </tr>
                          <tr>
                            <th>Agent List</th>
                            <td>All Agents, Larry Orezonte, James Rodulfo, Bryan Duller, Arbie Alcasid, Kenny Granado</td>
                          </tr>
                          <tr>
                            <th>Statuses</th>
                            <td>All Statuses, Login, Logout, Idle, Quick Break, Lunch Break</td>
                          </tr>
                          <tr>
                            <th>Shift Schedules</th>
                            <td>All Shift Schedules Morning Shift: 7am-4pm, 8am-5pm, 10am-7pm / Mid Shift: 1pm-10pm, 2pm-11pm / Night Shift: 8pm-5am, 12am-9am</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-sm-6">
                        <p class="text-primary"><strong>Stats</strong></p>
                        <table class="table table-condensed report-summary-table">
                          <tr>
                            <th>Total Absences</th>
                            <td>4 absences</td>
                          </tr>
                          <tr>
                            <th>Total Lates</th>
                            <td>7 lates / 24 mins total</td>
                          </tr>
                          <tr>
                            <th>Average Quick Break</th>
                            <td>19 mins / day</td>
                          </tr>
                          <tr>
                            <th>Average Lunch Break</th>
                            <td>47 mins / day</td>
                          </tr>
                          <tr>
                            <th>Average Idle Time</th>
                            <td>132 mins / day</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        @include('layouts.footer')
    </div>



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
    <script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.12/sorting/num-html.js') }}"></script>
    <script src="{{ asset('assets/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>


<!-- DateRangePicker -->
<script src="{{ asset('assets/adminlte/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script>
$(function(){
	$("#daterange").daterangepicker({
		ranges:{
			"Today": [moment(), moment()],
			"Yesterday": [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			"Last 7 Days": [moment().subtract(6, 'days'), moment()],
			"Last 30 Days": [moment().subtract(29, 'days'), moment()],
			"This Month": [moment().startOf('month'), moment().endOf('month')],
			"Last Month": [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		locale: {
			"format": "MM-DD-YYYY",
			"separator": " to ",
		},
		startDate: moment(),
		endDate: moment(),
		opens: "right"
	}, function(start, end, label) {});
});
</script>

<!-- Select2 -->
<script src="{{ asset('assets/adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
$(function(){
	$(".noc-select, .status-select, .schedule-select").select2({
		width: "100%",
		allowClear: true,
		closeOnSelect: false,
	});
});
</script>

<!-- DataTables -->
<script src="{{ asset('assets/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
$(function(){
	$(".report-table").DataTable({
		paging			: true,
		pageLength		: 15,
		lengthChange	: true,
		searching		: true,
		ordering		: true,
		aaSorting		: [[0, "asc"],[1, "desc"]],
		//columnDefs	: [{'targets': 6, 'orderable': false}],
		info			: false,
		autoWidth		: false,
	});
});
</script>

<script src="{{ asset('assets/adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('assets/adminlte/dist/js/noc-monitoring.js') }}"></script>

<!-- PAGE SCRIPTS -->

<script>
$(function(){
// improvement on select2 behavior
	$(".select2-hidden-accessible").on("select2:select", function(e){
		if(e.params.data.element.index == 0){
			$(this).select2("close"); // closes the dropdown
			$(this).find("option:not(:eq(0))").prop("selected", false); // unselects other options except ALL
			$(this).trigger("change"); // updates select2 element
		}
		else{
			$(this).find("option:eq(0)").prop("selected", false);
			$(this).trigger("change");
		}
	});

	$(".select2-hidden-accessible").on("select2:selecting", function(e){
		if($(this).find("option:eq(0)").prop("selected")) $(this).val(null);
	});

	$(".select2-hidden-accessible").on("select2:unselect", function(e){
		$(this).select2("close");
	});

	$(document).on("click", ".select2-selection__choice__remove", function(e){
		$(".select2-hidden-accessible").select2("close");
	});
});
</script>

    <script type = "text/javascript">
      $("#addProgram").click(function()
      {
          $("programs").attr("action", "/programs/create");
      });

    $("#enlist_table").DataTable({
      'paging'		: true,
  		'pageLength'	: 10,
  		'lengthChange'	: true,
  		'searching'		: true,
  		'ordering'		: true,
  		'aaSorting'		: [[0, "asc"]],
  		'info'			: false,
  		'autoWidth'		: false,
  		'columns'		: [
                    { data: 'surname' },
          					{ data: 'firstmiddlename' },
                    { data: 'programChoiceOne' },
                    { data: 'programChoiceTwo' },
                    { data: 'programChoiceThree' },
    		],
    		"ajax": {
    	    	url: '/enlist/all',
    			type: 'GET',
    			error: function(xhr, status, response)
    			{

    			},
    	    },
    	});

    </script>
</body>

</html>
