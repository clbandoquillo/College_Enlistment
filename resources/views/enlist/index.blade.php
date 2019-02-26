
<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.head')
</head>
<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    @include('layouts.guestsidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.guestheader')

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
          <!-- Single pro tab review Start-->
          <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Basic Information</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="{{ url('enlist/create')}}" id = "enlist" class="dropzone dropzone-custom needsclick add-professors" method = "post">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                  <label>Surname</label>
                                                                    <input name="surname" type="text" class="form-control" placeholder="Surname" required>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label>First and Middle Names</label>
                                                                    <input name="firstmiddlename" type="text" class="form-control" placeholder="First and Middle Names" required>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label>Date of Birth</label>
                                                                    <input name="dateOfBirth" id="datepicker" type="text" class="form-control" placeholder="Date of Birth" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Sex</label>
                                                                    <select name="sex" class="form-control" required>
                                  																		<option value="none" selected="" disabled=""></option>
                                  																		<option value="0">Male</option>
                                  																		<option value="1">Female</option>
                                  																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Civil Status</label>
                                                                    <select name="civilStatus" class="form-control" required>
                                  																		<option value="none" selected="" disabled=""></option>
                                  																		<option value="0">Single (Never Married)</option>
                                  																		<option value="1">Married</option>
                                                                      <option value="2">Divored</option>
                                                                      <option value="3">Separated</option>
                                  																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Home Address</label>
                                                                    <input name="homeAddress" type="text" class="form-control" placeholder="Address" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>E-mail Address</label>
                                                                    <input name="homeTelFaxEmail" type="text" class="form-control" placeholder="E-mail Address" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mobile / Cellphone Number</label>
                                                                    <input name="mobileNum" type="number" class="form-control" placeholder="Mobile no." required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Citizenship</label>
                                                                    <input name="citizenship" id="citizenship" type="text" class="form-control" placeholder="Citizenship" required>
                                                                </div>
                                                            </div>
                                                            <!---------->
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                              <div class="form-group">
                                                                  <label>Name and Complete Address of Senior High School</label>
                                                                  <input name="nameAddSHS" type="text" class="form-control" placeholder="Name and Complete Address of Senior High School">
                                                              </div>
                                                              <div class="form-group-inner">
                                                                <div class = "row">
                                                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      <div class="row">
                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                <label>Track</label>
                                                                                <select name="track" class="form-control">
                                                                                  <option value="none" selected="" disabled=""></option>
                                                                                  <option value="ACADEMIC">Academic Track</option>
                                                                                  <option value="TVL">Technical-Vocational-Livelihood (TVL) Track</option>
                                                                                  <option value="SPORTS">Sports Track</option>
                                                                                  <option value="ARTANDDESIGN">Arts and Design Track</option>
                                                                                </select>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                <label>Strand</label>
                                                                                <select name="strand" class="form-control">
                                                                                  <option value="none" selected="" disabled=""></option>
                                                                                  <option value="HUMSS">HUMSS</option>
                                                                                  <option value="STEM">STEM</option>
                                                                                  <option value="ABM">ABM</option>
                                                                                  <option value="GAS">GAS</option>
                                                                                  <option value="Agri-Fishery Arts Strand">Agri-Fishery Arts Strand</option>
                                                                                  <option value="Home Economics Strand">Home Economics Strand</option>
                                                                                  <option value="Industrial Arts Strand">Industrial Arts Strand</option>
                                                                                  <option value="ICT Strand">ICT Strand</option>
                                                                                </select>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label>Do you identify yourself as a member of an Indigenous Community?</label>
                                                                  <label class = "radio-inline"><input class="pull-left radio-checked" type="radio" checked="" value="1" id="isIndigenous" name="isIndigenous">Yes</label>
                                                                  <label class = "radio-inline"><input class="pull-left" type="radio" value="0" id="isIndigenous" name="isIndigenous">No</label>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label>If yes, please indicate the name of your community.</label>
                                                                  <input name="indigenousCommunity" id="indigenousCommunity" type="text" class="form-control" placeholder="community">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label>Name and Complete Address of College or University (if transfer student)</label>
                                                                  <input name="nameAddCollegeUniv" id="nameAddCollegeUniv" type="text" class="form-control" placeholder="Name and Complete Address of College or University (if transfer student)">
                                                              </div>
                                                              <div class="form-group-inner">
                                                                <div class = "row">
                                                                  <label>Preferred Degree of Program</label><br>
                                                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      <div class="row">
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                <div class="form-select-list">
                                                                                  <label>Choice 1</label>
                                                                                  <select name="programChoiceOne" class="form-control" required>
                                                                                    <option value="none" selected="" disabled=""></option>
                                                                                    @foreach($programs as $p)
                                                                                        <option value="{{ $p->programCode }}">{{ $p->programCode.", ".$p->programDescription }}</option>
                                                                                    @endforeach
                                                                                  </select>
                                                                                </div>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="form-select-list">
                                                                              <label>Choice 2</label>
                                                                              <select name="programChoiceTwo" class="form-control" required>
                                                                                <option value="none" selected="" disabled=""></option>
                                                                                @foreach($programs as $p)
                                                                                    <option value="{{ $p->programCode }}">{{ $p->programCode.", ".$p->programDescription }}</option>
                                                                                @endforeach
                                                                              </select>
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="form-select-list">
                                                                              <label>Choice 3</label>
                                                                              <select name="programChoiceThree" class="form-control" required>
                                                                                <option value="none" selected="" disabled=""></option>
                                                                                <option value="none" selected="" disabled=""></option>
                                                                                @foreach($programs as $p)
                                                                                    <option value="{{ $p->programCode }}">{{ $p->programCode.", ".$p->programDescription }}</option>
                                                                                @endforeach
                                                                              </select>
                                                                            </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group-inner">
                                                                <div class = "row">
                                                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      <div class="row">

                                                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <label>Father's Complete Name</label>
                                                                                  <input type="text" class="form-control" name = "fatherName" placeholder="Father's Complete Name" required>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <label>Father's Occupation</label>
                                                                                  <input type="text" class="form-control basic-ele-mg-t-10" name = "fatherOccupation" placeholder="Father's Occupation" required>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group-inner">
                                                                <div class = "row">
                                                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      <div class="row">

                                                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <label>Mother's Complete Name</label>
                                                                                  <input name = "motherName" type="text" class="form-control" placeholder="Mother's Complete Name" required>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <label>Mother's Occupation</label>
                                                                                  <input name = "motherOccupation" type="text" class="form-control basic-ele-mg-t-10" placeholder="Mother's Occupation" required>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group-inner">
                                                                <div class = "row">
                                                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      <div class="row">

                                                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <label>Annual Family Income</label>
                                                                                  <input name = "annualFamilyIncome" type="number" class="form-control" placeholder="Annual Family Income" required>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" id = "addEnlist" class="btn btn-primary waves-effect waves-light">Submit</button>
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
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
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
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('assets/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('assets/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('assets/js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('assets/js/morrisjs/home3-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('assets/js/sparkline/sparkline-active.js') }}"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="{{ asset('assets/js/datepicker/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/datepicker-active.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('assets/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/fullcalendar-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script type = "text/javascript">
      $("addEnlist").click(function()
      {
        $("enlist").attr("action", "/enlist/create");
      });

      //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd'
    })
    </script>
</body>

</html>
