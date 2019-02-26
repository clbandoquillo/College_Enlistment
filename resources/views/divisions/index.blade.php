
<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.head')
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li><a href="#adddivisions">Add Divisions</a></li>
                                <li class="active"><a href="#viewdivisions">View Divisions</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade" id="adddivisions">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="{{ url('divisions/create')}}" id = "program" class="dropzone dropzone-custom needsclick addcourse" method = "post">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Division Code</label>
                                                                    <input name="divisionCode" type="text" class="form-control" placeholder="Division Code">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Division Description</label>
                                                                    <input name="divisionDescription" type="text" class="form-control" placeholder="Division Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="payment-adress">
                                                                    <button type="submit" id = "addDivision" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{ csrf_field() }}
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade active in" id="viewdivisions">
                                  <!-- Static Table Start -->
                                  <div class="data-table-area mg-b-15">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                  <div class="sparkline13-list">
                                                      <div class="sparkline13-hd">
                                                            @if($errors->any())
                                                                <div class="alert alert-danger">
                                                                  <strong>Failed due to the following error/s!</strong>
                                                                      <ul>
                                                                          @foreach($errors->all() as $e)
                                                                            <li>{{$e}}</li>
                                                                          @endforeach
                                                                      </ul>
                                                                </div>
                                                            @endif
                                                            @if(\Session::has('success'))
                                                                <div class="alert alert-success alert-block">
                                                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                                                    <strong>{!! \Session::get('success') !!}</strong>
                                                                </div>
                                                            @endif
                                                          <div class="main-sparkline13-hd">
                                                              <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                                          </div>
                                                      </div>
                                                      <div class="sparkline13-graph">
                                                          <div class="datatable-dashv1-list custom-datatable-overright">
                                                              <table id="division_table" data-toggle="table" class="table table-bordered table-striped">
                                                                  <thead>
                                                            						<th class="table-center-textalign">Division Code</th>
                                                            						<th class="table-center-textalign">Division Description</th>
                                                                  </thead>
                                                              </table>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.12/sorting/num-html.js"></script>
    <script type = "text/javascript">
      $("#addDivision").click(function()
      {
          $("divisions").attr("action", "/divisions/create");
      });

    $("#division_table").DataTable({
      'paging'		: true,
  		'pageLength'	: 10,
  		'lengthChange'	: true,
  		'searching'		: true,
  		'ordering'		: true,
  		'aaSorting'		: [[0, "asc"]],
  		'info'			: false,
  		'autoWidth'		: false,
  		'columns'		: [
                    { data: 'divisioncode' },
          					{ data: 'divisiondescription' },
    		],
    		"ajax": {
    	    	url: '/divisions/all',
    			type: 'GET',
    			error: function(xhr, status, response)
    			{

    			},
    	    },
    	});

    </script>
</body>

</html>
