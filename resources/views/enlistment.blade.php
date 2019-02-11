
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
            <div class="container-fluid">
                <div class="row">
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
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                  <label>Surname</label>
                                                                    <input name="surname" type="text" class="form-control" placeholder="Surname">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label>First and Middle Names</label>
                                                                    <input name="firstname" type="text" class="form-control" placeholder="First and Middle Names">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label>Date of Birth</label>
                                                                    <input name="finish" id="finish" type="text" class="form-control" placeholder="Date of Birth">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Sex</label>
                                                                    <select name="sex" class="form-control">
                                  																		<option value="none" selected="" disabled=""></option>
                                  																		<option value="0">Male</option>
                                  																		<option value="1">Female</option>
                                  																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Civil Status</label>
                                                                    <select name="civilStatus" class="form-control">
                                  																		<option value="none" selected="" disabled=""></option>
                                  																		<option value="0">Single (Never Married)</option>
                                  																		<option value="1">Married</option>
                                                                      <option value="2">Divored</option>
                                                                      <option value="3">Separated</option>
                                  																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Home Address</label>
                                                                    <input name="address" type="text" class="form-control" placeholder="Address">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Home Telephone No. and Fax / Email</label>
                                                                    <input name="address" type="text" class="form-control" placeholder="Home Telephone No. and Fax / Email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Mobile / Cellphone Number</label>
                                                                    <input name="mobileno" type="number" class="form-control" placeholder="Mobile no.">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Citizenship</label>
                                                                    <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Citizenship">
                                                                </div>
                                                            </div>
                                                            <!---------->
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                              <div class="form-group">
                                                                  <label>Name and Complete Address of Senior High School</label>
                                                                  <input name="address" type="text" class="form-control" placeholder="Address">
                                                              </div>
                                                              <div class="form-group-inner">
                                                                <div class = "row">
                                                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      <div class="row">
                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                <label>Track</label>
                                                                                <select name="sex" class="form-control">
                                                                                  <option value="none" selected="" disabled=""></option>
                                                                                  <option value="0">Male</option>
                                                                                  <option value="1">Female</option>
                                                                                </select>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                <label>Strand</label>
                                                                                <select name="sex" class="form-control">
                                                                                  <option value="none" selected="" disabled=""></option>
                                                                                  <option value="0">Male</option>
                                                                                  <option value="1">Female</option>
                                                                                </select>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label>Do you identify yourself as a member of an Indigenous Community?</label>
                                                                  <label class = "radio-inline"><input class="pull-left radio-checked" type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">Yes</label>
                                                                  <label class = "radio-inline"><input class="pull-left" type="radio" value="option2" id="optionsRadios2" name="optionsRadios">No</label>
                                                              </div>
                                                              <div class="form-group">
                                                                  <label>If yes, please indicate the name of your community.</label>
                                                                  <input name="postcode" id="postcode" type="text" class="form-control" placeholder="community">
                                                              </div>
                                                              <div class="form-group">
                                                                  <label>Name and Complete Address of College or University (if transfer student)</label>
                                                                  <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Name and Complete Address of College or University (if transfer student)">
                                                              </div>
                                                              <div class="form-group-inner">
                                                                <div class = "row">
                                                                  <label>Preferred Degree of Program</label><br>
                                                                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                      <div class="row">
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <input type="text" class="form-control" placeholder="Choice 1">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <input type="text" class="form-control basic-ele-mg-t-10" placeholder="Choice 2">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                              <div class="form-select-list basic-ele-mg-t-10">
                                                                                  <input type="text" class="form-control" placeholder="Choice 3">
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
                                                                                  <input type="text" class="form-control" placeholder="Father's Complete Name">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <label>Father's Occupation</label>
                                                                                  <input type="text" class="form-control basic-ele-mg-t-10" placeholder="Father's Occupation">
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
                                                                                  <input type="text" class="form-control" placeholder="Mother's Complete Name">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <label>Mother's Occupation</label>
                                                                                  <input type="text" class="form-control basic-ele-mg-t-10" placeholder="Mother's Occupation">
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
                                                                                  <input type="text" class="form-control" placeholder="Annual Family Income">
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
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
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
</body>

</html>
