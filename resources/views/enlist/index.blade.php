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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="">
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
              </div>
              <div class="product-payment-inner-st">
                <ul id="myTabedu1" class="tab-review-design">
                  <li class="active"><a href="#description">Enlistment Information</a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                  <div class="product-tab-list tab-pane fade active in" id="description">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                          <div id="dropzone1" class="pro-ad">
                            <form action="{{ url('enlist/create')}}" id="enlist" class="dropzone dropzone-custom needsclick add-professors" method="post">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                  <h4 class="form-header text-primary">Name as it appears on the Birth Certificate</h4>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <div class="form-group">
                                              <label>Surname</label>
                                              <input name="surname" type="text" class="form-control" placeholder="Surname" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                              <label>Suffix (Jr., III, IV etc.)</label>
                                              <input name="suffix" type="text" class="form-control" placeholder="Suffix">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                              <label>First Name</label>
                                              <input name="firstname" type="text" class="form-control" placeholder="Firstname" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                              <label>Middle Name</label>
                                              <input name="middlename" type="text" class="form-control" placeholder="Middlename" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h4 class="form-header text-primary">Basic Personal Information</h4>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                              <label>Birthdate</label>
                                              <input name="birthDate" id="datepicker" type="date" class="form-control" placeholder="Date of Birth" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                              <label>Birthplace</label>
                                              <input name="birthPlace" type="text" class="form-control" placeholder="Birthplace" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                              <label>Gender</label>
                                              <select name="gender" class="form-control" required>
                                                <option value="none" selected="" disabled=""></option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                              <label>Civil Status</label>
                                              <select name="civilStatus" class="form-control" required>
                                                <option value="none" selected="" disabled=""></option>
                                                <option value="1">Single (Never Married)</option>
                                                <option value="2">Married</option>
                                                <option value="3">Widow / Widower</option>
                                                <option value="4">Head of the Family</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                              <label>Citizenship</label>
                                              <div class="chosen-select-single mg-b-20">
                                                <select data-placeholder="Choose a Citizenship..." id="citizenship" name="citizenship" class="form-control" tabindex="-1" required>
                                                  <option value="" selected></option>
                                                  <option value="" selected=""></option>
                                                  @foreach($nationality as $n)
                                                  <option value="{{ $n->CODE }}">{{ $n->NAME }}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                              <label>Religion</label>
                                              <select id="religion" name="religion" class="form-control" required>
                                                <option value="none" selected="" disabled=""></option>
                                                @foreach($religions as $r)
                                                <option value="{{ $r->CODE }}">{{ $r->DESCRIPTION }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h4 class="form-header text-primary">Permanent Address</h4>
                                  <div class="form-group">
                                    <label>Permanent Address (House No., Street, Subdivision/Sitio, Barangay)</label>
                                    <input name="permanentAddress" type="text" class="form-control" placeholder="Permanent Address" required>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                              <label>City</label>
                                              <select data-placeholder="Choose a City..." id="permanentCity" name="permanentCity" class="form-control" tabindex="-1">
                                                <option value="" selected=""></option>
                                                @foreach($city as $c)
                                                <option value="{{ $c->CityId }}">{{ $c->CityName }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                              <label>Province</label>
                                              <select id="permanentProvince" name="permanentProvince" class="form-control" required>
                                                <option value="none" selected="" disabled=""></option>
                                                @foreach($provinces as $p)
                                                <option value="{{ $p->ProvinceId }}">{{ $p->ProvinceName }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                              <label>Zip/Postal Code</label>
                                              <input name="permanentzippostalcode" type="text" class="form-control" placeholder="Zip/Postal Code" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                              <label>Country</label>
                                              <div class="chosen-select-single mg-b-20">
                                                <select data-placeholder="Choose a Country..." id="permanentCountry" name="permanentCountry" class="form-control" tabindex="-1" required>
                                                  <option value="" selected=""></option>
                                                  @foreach($countries as $c)
                                                  <option value="{{ $c->id }}">{{ $c->description }}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h4 class="form-header text-primary">City Address</h4>
                                  <div class="form-group">
                                    <label>Same as permanent</label>
                                    <label class="radio-inline"><input class="pull-left" type="radio" onclick="javascript:checkPermanent();" id="sameAsPermanent" value="1" name="sameAsPermanent">Yes</label>
                                    <label class="radio-inline"><input class="pull-left" type="radio" onclick="javascript:checkPermanent();" id="sameAsPermanent" value="0" name="sameAsPermanent">No</label>
                                  </div>
                                  <label id="boxcheck">Check the following boxes if the following applies to you:</label>
                                  <div id="board" class="form-group">
                                    <label>Boarding</label>
                                    <label class="radio-inline"><input class="pull-left" type="checkbox" value="1" name="boarding" id="boarding"></label>
                                  </div>
                                  <div id="relative" class="form-group">
                                    <label>With Relative</label>
                                    <label class="radio-inline"><input class="pull-left" type="checkbox" value="1" name="withRelative" id="withRelative"></label>
                                  </div>
                                  <div class="form-group" style="display:block" id="caddress">
                                    <label id="cityAddressLabel">City Address (House No., Street, Subdivision/Sitio, Barangay)</label>
                                    <input id="cityAddress" name="cityAddress" type="text" class="form-control" placeholder="City Address">
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                              <label id="cityCityLabel">City</label>
                                              <select data-placeholder="Choose a City..." id="cityCity" name="cityCity" class="form-control" tabindex="-1">
                                                <option value=""></option>
                                                @foreach($city as $c)
                                                <option value="{{ $c->CityId }}">{{ $c->CityName }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                              <label id="cityProvinceLabel">Province</label>
                                              <select id="cityProvince" name="cityProvince" class="form-control" required>
                                                <option value=""></option>
                                                @foreach($provinces as $p)
                                                <option value="{{ $p->ProvinceId }}">{{ $p->ProvinceName }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                              <label id="cityzippostalcodeLabel">Zip/Postal Code</label>
                                              <input id="cityzippostalcode" name="cityzippostalcode" type="text" class="form-control" placeholder="Zip/Postal Code">
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                              <label id="cityCountryLabel">Country</label>
                                              <div class="chosen-select-single mg-b-20">
                                                <select data-placeholder="Choose a Country..." id="cityCountry" name="cityCountry" class="form-control" tabindex="-1">
                                                  <option value="" selected=""></option>
                                                  @foreach($countries as $c)
                                                  <option value="{{ $c->id }}">{{ $c->description }}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h4 class="form-header text-primary">Contact Information</h4>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                              <label>E-mail Address</label>
                                              <input name="email" type="email" class="form-control" placeholder="E-mail Address" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                              <label>Mobile Number</label>
                                              <input name="mobileNum" id="mobileNum" type="tel" class="form-control" placeholder="Mobile no." data-mask="+63 999-999-9999" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h4 class="form-header text-primary">In Case of Emergency <h5 class="form-header text-primary">(if boarding or living with relative, indicate name of landlady of guardian as person to contact)</h5>
                                  </h4>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Person To Contact</label>
                                              <input name="personToContact" type="text" class="form-control" placeholder="Person To Contact" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Relationship</label>
                                              <input name="personToContactRelationship" type="text" class="form-control basic-ele-mg-t-10" placeholder="Relationship" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Telephone No.</label>
                                              <input type="text" class="form-control" data-mask="(999) 999-9999" name="personToContactTelNo" placeholder="Telephone No.">
                                            </div>
                                          </div>
                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Mobile No.</label>
                                              <input name="personToContactMobileNo" id="personToContactMobileNo" type="tel" class="form-control" placeholder="Mobile no." data-mask="+63 999-999-9999" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <h4 class="form-header text-primary">Health / Medical Profile</h4>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Blood Group</label>
                                              <select name="bloodGroup" class="form-control" required>
                                                <option value="none" selected="" disabled=""></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Rh</label>
                                              <select name="rh" class="form-control" required>
                                                <option value="none" selected="" disabled=""></option>
                                                <option value="+">+</option>
                                                <option value="-">-</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Family / Personal Physician's Name</label>
                                              <input name="physicianName" type="text" class="form-control" placeholder="Family / Personal Physician's Name">
                                            </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Physician's Contact Information</label>
                                              <input name="physicianContactInformation" type="text" class="form-control basic-ele-mg-t-10" placeholder="Physician's Contact Information">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Presently taking medication?</label><label class="radio-inline"><input class="pull-left" type="radio" value="1" name="takingMedication" onclick="javascript:yesnoMedication();" id="yestakingMedication">Yes</label>
                                              <label class="radio-inline"><input class="pull-left" type="radio" value="0" name="takingMedication" onclick="javascript:yesnoMedication();" id="notakingMedication">No</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                              <label>If yes, please indicate medication:</label>
                                              <input id="medicationInfo" name="medicationInfo" type="text" class="form-control basic-ele-mg-t-10" placeholder="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Do you have special needs?</label><br>
                                              <label class="radio-inline"><input class="pull-left" type="radio" value="1" name="specialNeeds" onclick="javascript:yesnoSpecialNeeds();" id="yesSpecialNeeds">Yes</label>
                                              <label class="radio-inline"><input class="pull-left" type="radio" value="0" name="specialNeeds" onclick="javascript:yesnoSpecialNeeds();" id="noSpecialNeeds">No</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Special Needs</label>
                                              <select id="typeOfSpecialNeeds" name="typeOfSpecialNeeds" class="form-control">
                                                <option value="" selected=""></option>
                                                <option value="0">Psychiatric</option>
                                                <option value="1">Physical</option>
                                                <option value="2">PWD</option>
                                                <option value="3">Others</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Others: (Please specify)</label>
                                              <input id="othersSpecialNeeds" name="othersSpecialNeeds" type="text" class="form-control basic-ele-mg-t-10" placeholder="Others: (Please specify)">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!---------->
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h4 class="form-header text-primary">Family Information</h4>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="form-group">
                                            <label>Position in the Family(e.g. eldest)</label>
                                            <input name="positionFamily" type="text" class="form-control" placeholder="Position in the Family" required>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="form-group">
                                            <label>No. of Brothers</label>
                                            <input name="numBrothers" min="0" value="0" type="number" class="form-control" placeholder="No. of Brothers" required>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                          <div class="form-group">
                                            <label>No. of Sisters</label>
                                            <input name="numSisters" min="0" value="0" type="number" class="form-control" placeholder="No. of Sisters" required>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <h5 class="form-header text-primary">Parents</h4>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Father's Complete Name</label>
                                              <input type="text" class="form-control" name="fatherName" placeholder="Father's Complete Name" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Check if deceased</label><input class="pull-left" type="checkbox" onclick="javascript:checkFather();" id="fatherLiving" value="1" name="fatherLiving">
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Father's Occupation</label>
                                              <input type="text" class="form-control basic-ele-mg-t-10" id="fatherOccupation" name="fatherOccupation" placeholder="Father's Occupation" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Father's Address</label>
                                              <input type="text" class="form-control" id="fatherAddress" name="fatherAddress" placeholder="Father's Address" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Father's Contact Number</label>
                                              <input name="fatherContactNum" id="fatherContactNum" type="tel" class="form-control" placeholder="Mobile no." data-mask="+63 999-999-9999">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Mother's Complete Name</label>
                                              <input name="motherName" type="text" class="form-control" placeholder="Mother's Complete Name" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Check if deceased</label><input class="pull-left" type="checkbox" onclick="javascript:checkMother();" id="motherLiving" value="1" name="motherLiving">
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Mother's Occupation</label>
                                              <input id="motherOccupation" name="motherOccupation" type="text" class="form-control basic-ele-mg-t-10" placeholder="Mother's Occupation" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Mother's Address</label>
                                              <input type="text" class="form-control" id="motherAddress" name="motherAddress" placeholder="Mother's Address" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Mother's Contact Number</label>
                                              <input name="motherContactNum" id="motherContactNum" type="tel" class="form-control" placeholder="Mobile no." data-mask="+63 999-999-9999">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Parent's Marital Status</label>
                                              <select name="parentsMaritalStatus" class="form-control" required>
                                                <option value="none" selected="" disabled=""></option>
                                                <option value="1">Single (Never Married)</option>
                                                <option value="2">Married</option>
                                                <option value="3">Widow / Widower</option>
                                                <option value="4">Head of the Family</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Name of Enlistee's Spouse (if married)</label>
                                              <input type="text" class="form-control" name="nameOfSpouse" placeholder="Name of Spouse (if married)">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Annual Family Income (in Philippine Peso)</label>
                                              <input type="number" id="annualFamilyIncome" name="annualFamilyIncome" class="form-control" min="1" value="0" placeholder="Annual Family Income" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h4 class="form-header text-primary">Educational Background</h4>
                                  <h5 class="form-header text-primary">Preschool</h5>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Name of School</label>
                                              <input name="preSchoolName" type="text" class="form-control" placeholder="Name of School" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Address</label>
                                              <input name="preSchoolAddress" type="text" class="form-control basic-ele-mg-t-10" placeholder="Address" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Year Graduated</label>
                                              <input name="preSchoolGraduated" type="number" class="form-control basic-ele-mg-t-10" min="1" placeholder="Years Graduated" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h5 class="form-header text-primary">Primary School</h5>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Name of School</label>
                                              <input name="gradeSchoolName" type="text" class="form-control" placeholder="Name of School" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Address</label>
                                              <input name="gradeSchoolAddress" type="text" class="form-control basic-ele-mg-t-10" placeholder="Address" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Year Graduated</label>
                                              <input name="gradeSchoolGraduated" type="number" class="form-control basic-ele-mg-t-10" min="1" placeholder="Years Graduated" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h5 class="form-header text-primary">High School (Grade 7 to 10)</h5>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Name of School</label>
                                              <input name="highSchoolName" type="text" class="form-control" placeholder="Name of School" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Address</label>
                                              <input name="highSchoolAddress" type="text" class="form-control basic-ele-mg-t-10" placeholder="Address" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Year Graduated</label>
                                              <input name="highSchoolGraduated" type="number" class="form-control basic-ele-mg-t-10" min="1" placeholder="Years Graduated" required>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <label>Check the following boxes if the following applies to you:</label>
                                  <div class="form-group isIndigenousComm">
                                    <label>Are you a College Transferee?</label>
                                    <label class="radio-inline"><input class="pull-left" type="checkbox" onclick="javascript:yesnoCheckCollege();" id="yesCheckCollege" value="1" name="isCollege"></label>
                                  </div>
                                  <div class="form-group">
                                    <div id="collegeInfo" style="display:none">
                                      <label>Name of College or University Attended(if transfer student)</label>
                                      <input name="nameCollegeUniv" id="nameCollegeUniv" type="text" class="form-control" placeholder="Name of College or University Attended(if transfer student)">
                                      <label>Complete Address of College or University Attended(if transfer student)</label>
                                      <input name="addressCollegeUniv" id="addressCollegeUniv" type="text" class="form-control" placeholder="Complete Address of College or University Attended(if transfer student)">
                                    </div>
                                  </div>
                                  <div class="form-group isIndigenousComm">
                                    <label>Did you attend Senior High School?</label>
                                    <label class="radio-inline"><input class="pull-left" type="checkbox" value="0" name="isSHS" onclick="javascript:yesnoCheckSHS();" id="yesCheckSHS"></label>
                                  </div>
                                  <div class="form-group" id="shsName" style="display:none">
                                    <label>Name of Senior High School Attended</label>
                                    <input name="nameSHS" id="nameSHS" type="text" class="form-control" placeholder="Name of Senior High School">
                                  </div>
                                  <div class="form-group" id="shsAdd" style="display:none">
                                    <label>Complete Address of Senior High School Attended</label>
                                    <input name="addressSHS" id="addressSHS" type="text" class="form-control" placeholder="Complete Address of Senior High School">
                                  </div>
                                  <div class="form-group" id="shsPrincipal" style="display:none">
                                    <label>Principal's Name</label>
                                    <input name="principalSHS" id="principalSHS" type="text" class="form-control" placeholder="Principal's Name">
                                  </div>
                                  <div class="form-group" id="shsTrackStrand" style="display:none">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Track</label>
                                              <select id="track" name="track" class="form-control" onclick="javascript:strandCheck();">
                                                <option value="" selected="" disabled=""></option>
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
                                              <select id="strand" name="strand" class="form-control">
                                                <option value="none" selected=""></option>
                                                <option value="HUMSS" id="HUMSS" style="display:none">HUMSS</option>
                                                <option value="STEM" id="STEM" style="display:none">STEM</option>
                                                <option value="ABM" id="ABM" style="display:none">ABM</option>
                                                <option value="GAS" id="GAS" style="display:none">GAS</option>
                                                <option value="Agri-Fishery Arts Strand" id="Agri" style="display:none">Agri-Fishery Arts Strand</option>
                                                <option value="Home Economics Strand" id="Home" style="display:none">Home Economics Strand</option>
                                                <option value="Industrial Arts Strand" id="Industrial" style="display:none">Industrial Arts Strand</option>
                                                <option value="ICT Strand" id="ICT" style="display:none">ICT Strand</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group isIndigenousComm">
                                    <label>Do you identify yourself as a member of an Indigenous Community?</label>
                                    <label class="radio-inline"><input class="pull-left" type="checkbox" onclick="javascript:yesnoCheck();" id="yesCheck" value="1" name="isIndigenous"></label>
                                  </div>
                                  <div class="form-group">
                                    <div id="ifYes" style="display:none">
                                      <label>If yes, please indicate the name of your community.</label>
                                      <input name="indigenousCommunity" id="indigenousCommunity" type="text" class="form-control" placeholder="community">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label>Program(s) Applied for in order of preference</label><br>
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <div class="form-select-list">
                                                <label>Choice 1</label>
                                                <select id="choice" name="programChoiceOne" class="form-control programChoice1" required>
                                                  <option value="none" selected="" disabled=""></option>
                                                  @foreach($programs as $p)
                                                  <option value="{{ $p->CODE }}">{{ $p->CODE.", ".$p->DESCRIPTION.", ".$p->DIVISIONCODE }}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Choice 2</label>
                                              <select id="choice" name="programChoiceTwo" class="form-control programChoice2">
                                                <option value="" selected=""></option>
                                                @foreach($programs as $p)
                                                <option value="{{ $p->CODE }}">{{ $p->CODE.", ".$p->DESCRIPTION.", ".$p->DIVISIONCODE }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Choice 3</label>
                                              <select id="choice" name="programChoiceThree" class="form-control programChoice3">
                                                <option value="" selected=""></option>
                                                @foreach($programs as $p)
                                                <option value="{{ $p->CODE }}">{{ $p->CODE.", ".$p->DESCRIPTION.", ".$p->DIVISIONCODE }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <h4 class="form-header text-primary">Psychological Profile</h4>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Are you currently in therapy, rehabilitation, or clinical counseling elsewhere?</label><label class="radio-inline"><input class="pull-left" type="radio" value="1" name="currTherapyRehabCounseling" onclick="javascript:yesnoCounseling();" id="yesCheckCounseling">Yes</label>
                                              <label class="radio-inline"><input class="pull-left" type="radio" value="0" name="currTherapyRehabCounseling" onclick="javascript:yesnoCounseling();" id="noCheckCounseling">No</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>If yes, with whom:</label>
                                              <input id="currTherapyRehabCounselingName" name="currTherapyRehabCounselingName" type="text" class="form-control basic-ele-mg-t-10" placeholder="">
                                            </div>
                                          </div>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-select-list">
                                              <label>Contact Information</label>
                                              <input name="currTherapyRehabCounselingContact" id="currTherapyRehabCounselingContact" type="tel" class="form-control" placeholder="Mobile no." data-mask="+63 999-999-9999">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-select-list">
                                          <label>Briefly describe your reason for seeking help:</label>
                                          <textarea id="reasonToSeekHelp" name="reasonToSeekHelp"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div><br><br>

                        <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                              </div>
                              <div class="modal-body">
                                <span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>
                                <h2>Please Review your Enlistment Information. Click the confirm button ONCE.</h2>
                                <p> This form will not be submitted unless all required fields are filled up. The pre-enrollee assures that all data filled-up in this form is accurate. A feedback will be given along with confirmation message will also be sent to the e-mail that you have provided once the pre-registration is successful.</p>
                              </div>
                              <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-custon-rounded-four btn-primary">Cancel</button>
                                <button id="addEnlist" class="btn btn-custon-rounded-four btn-primary">Confirm Enlistment</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{ csrf_field() }}
                        </form>


                        <div class="row">
                          <div class="col-lg-12">
                            <div class="payment-adress">
                              <!--<button type="submit" id = "addEnlist" class="btn btn-primary waves-effect waves-light">Submit</button>-->
                              <button data-toggle="modal" data-target="#PrimaryModalalert" class="btn btn-primary waves-effect waves-light">Submit</button>
                              <!--<a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Primary</a>-->
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
  <!-- form validate JS
		============================================ -->
  <script src="{{ asset('assets/js/form-validation/jquery.form.min.js') }}"></script>
  <script src="{{ asset('assets/js/form-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/js/form-validation/form-active.js') }}"></script>
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
  <!-- chosen JS
		============================================ -->
  <script src="{{ asset('js/chosen/chosen.jquery.js') }}"></script>
  <script src="{{ asset('js/chosen/chosen-active.js') }}"></script>
  <!-- select2 JS
		============================================ -->
  <script src="js/select2/select2.full.min.js"></script>
  <script src="js/select2/select2-active.js"></script>
  <!-- main JS
		============================================ -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('assets/adminlte/dist/js/adminlte.min.js') }}"></script>
  <script src="{{ asset('assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/input-mask/jasny-bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    function validateForm() {
      var isValid = true;
      $('.form-field').each(function() {
        if ($(this).val() === '')
          isValid = false;
      });
      return isValid;
    }


    $('.programChoice1').select2();
    $('.programChoice2').select2();
    $('.programChoice3').select2();
    $('#permanentProvince').select2();
    $('#citizenship').select2();
    $('#permanentCountry').select2();
    $('#permanentCity').select2();
    $('#cityProvince').select2();
    $('#cityCountry').select2();
    $('#cityCity').select2();
    //      $('#cityProvince').prop('disabled', true);

    //Date picker

    $("addEnlist").click(function() {
      $("enlist").attr("action", "/enlist/create");
    });

    $('#enlist').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) {
        e.preventDefault();
        return false;
      }
    });

    $(document).ready(function() {
      $("select").change(function() {
        $("select[id='choice']").not(this).find("option[value='" + $(this).val() + "']").attr('disabled', true);
      });
    });

    $(this).ready(function() {

      $('.isIndigenousComm').change(function() {
        if ($(this).val() === '0')
          $("#indigenousCommunity").prop('hidden', false);
        else
          $("#indigenousCommunity").prop('hidden', true);
      });

      $('.isIndigenousComm').trigger('change');
    });

    function yesnoCheck() {
      if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
      } else document.getElementById('ifYes').style.display = 'none';
    }

    function yesnoMedication() {
      if (document.getElementById('yestakingMedication').checked) {
        document.getElementById('medicationInfo').disabled = false;
      } else document.getElementById('medicationInfo').disabled = true;
    }

    function yesnoSpecialNeeds() {
      if (document.getElementById('yesSpecialNeeds').checked) {
        document.getElementById('typeOfSpecialNeeds').disabled = false;
        document.getElementById('othersSpecialNeeds').disabled = false;
      } else {
        document.getElementById('typeOfSpecialNeeds').disabled = true;
        document.getElementById('othersSpecialNeeds').disabled = true;
      }
    }

    function yesnoCounseling() {
      if (document.getElementById('yesCheckCounseling').checked) {
        document.getElementById('currTherapyRehabCounselingName').disabled = false;
        document.getElementById('currTherapyRehabCounselingContact').disabled = false;
        document.getElementById('reasonToSeekHelp').disabled = false;
      } else {
        document.getElementById('currTherapyRehabCounselingName').disabled = true;
        document.getElementById('currTherapyRehabCounselingContact').disabled = true;
        document.getElementById('reasonToSeekHelp').disabled = true;
      }
    }

    function checkFather() {
      if (document.getElementById('fatherLiving').checked) {
        document.getElementById('fatherOccupation').disabled = true;
        document.getElementById('fatherAddress').disabled = true;
        document.getElementById('fatherContactNum').disabled = true;
        document.getElementById('fatherOccupation').required = false;
        document.getElementById('fatherAddress').required = false;
        document.getElementById('fatherContactNum').required = false;

      } else {
        document.getElementById('fatherOccupation').disabled = false;
        document.getElementById('fatherAddress').disabled = false;
        document.getElementById('fatherContactNum').disabled = false;
        document.getElementById('fatherOccupation').value = "";
        document.getElementById('fatherAddress').value = "";
        document.getElementById('fatherContactNum').value = "";
        document.getElementById('fatherOccupation').required = true;
        document.getElementById('fatherAddress').required = true;
        document.getElementById('fatherContactNum').required = true;
      }
    }

    function checkMother() {
      if (document.getElementById('motherLiving').checked) {
        document.getElementById('motherOccupation').disabled = true;
        document.getElementById('motherAddress').disabled = true;
        document.getElementById('motherContactNum').disabled = true;
        document.getElementById('motherOccupation').required = false;
        document.getElementById('motherAddress').required = false;
        document.getElementById('motherContactNum').required = false;
      } else {
        document.getElementById('motherOccupation').disabled = false;
        document.getElementById('motherAddress').disabled = false;
        document.getElementById('motherContactNum').disabled = false;
        document.getElementById('motherOccupation').value = "";
        document.getElementById('motherAddress').value = "";
        document.getElementById('motherContactNum').value = "";
        document.getElementById('motherOccupation').required = true;
        document.getElementById('motherAddress').required = true;
        document.getElementById('motherContactNum').required = true;
      }
    }

    function yesnoCheckCollege() {
      if (document.getElementById('yesCheckCollege').checked) {
        ;
        document.getElementById('collegeInfo').style.display = 'block';
        document.getElementById('collegeProgram').style.display = 'block';
      } else {
        document.getElementById('collegeInfo').style.display = 'none';
        document.getElementById('collegeProgram').style.display = 'none';
      }
    }

    function yesnoCheckSHS() {
      if (document.getElementById('yesCheckSHS').checked) {
        document.getElementById('shsName').style.display = 'block';
        document.getElementById('shsAdd').style.display = 'block';
        document.getElementById('shsTrackStrand').style.display = 'block';
        document.getElementById('shsPrincipal').style.display = 'block';
      } else {
        document.getElementById('shsName').style.display = 'none';
        document.getElementById('shsAdd').style.display = 'none';
        document.getElementById('shsTrackStrand').style.display = 'none';
        document.getElementById('shsPrincipal').style.display = 'none';
      }
    }

    function checkPermanent() {
      if (document.getElementById("sameAsPermanent").checked == 1) {
        document.getElementById('cityAddress').disabled = true;
        document.getElementById('cityCity').disabled = true;
        document.getElementById('cityzippostalcode').disabled = true;
        document.getElementById('cityAddress').style.display = 'none';
        document.getElementById('cityCity').style.display = 'none';
        document.getElementById('cityzippostalcode').style.display = 'none';
        $('#cityProvince').prop('disabled', true);
        $('#cityProvince').next(".select2-container").hide();
        $('#cityCountry').prop('disabled', true);
        $('#cityCountry').next(".select2-container").hide();
        $('#cityCity').prop('disabled', true);
        $('#cityCity').next(".select2-container").hide();
        document.getElementById('cityAddressLabel').style.display = 'none';
        document.getElementById('cityCityLabel').style.display = 'none';
        document.getElementById('cityzippostalcodeLabel').style.display = 'none';
        document.getElementById('cityProvinceLabel').style.display = 'none';
        document.getElementById('cityCountryLabel').style.display = 'none';
        document.getElementById('board').style.display = 'none';
        document.getElementById('relative').style.display = 'none';
        document.getElementById('boxcheck').style.display = 'none';

      }
      if (document.getElementById('sameAsPermanent').checked != 1) {
        document.getElementById('cityAddress').disabled = false;
        document.getElementById('cityCity').disabled = false;
        document.getElementById('cityzippostalcode').disabled = false;

        document.getElementById('cityAddress').style.display = 'block';
        document.getElementById('cityCity').style.display = 'block';
        document.getElementById('cityzippostalcode').style.display = 'block';
        $('#cityProvince').prop('disabled', false);
        $('#cityProvince').next(".select2-container").show();
        $('#cityCountry').prop('disabled', false);
        $('#cityCountry').next(".select2-container").show();

        $('#cityCity').prop('disabled', false);
        $('#cityCity').next(".select2-container").show();

        document.getElementById('cityAddressLabel').style.display = 'block';
        document.getElementById('cityCityLabel').style.display = 'block';
        document.getElementById('cityzippostalcodeLabel').style.display = 'block';
        document.getElementById('cityProvinceLabel').style.display = 'block';
        document.getElementById('cityCountryLabel').style.display = 'block';
        document.getElementById('board').style.display = 'block';
        document.getElementById('relative').style.display = 'block';
        document.getElementById('boxcheck').style.display = 'block';
      }
    }


    function strandCheck() {
      if (document.getElementById('track').value == "ACADEMIC") {
        document.getElementById('HUMSS').style.display = 'block';
        document.getElementById('STEM').style.display = 'block';
        document.getElementById('ABM').style.display = 'block';
        document.getElementById('GAS').style.display = 'block';
        document.getElementById('Agri').style.display = 'none';
        document.getElementById('Home').style.display = 'none';
        document.getElementById('Industrial').style.display = 'none';
        document.getElementById('ICT').style.display = 'none';
      }
      if (document.getElementById('track').value == "TVL") {
        document.getElementById('HUMSS').style.display = 'none';
        document.getElementById('STEM').style.display = 'none';
        document.getElementById('ABM').style.display = 'none';
        document.getElementById('GAS').style.display = 'none';
        document.getElementById('Agri').style.display = 'block';
        document.getElementById('Home').style.display = 'block';
        document.getElementById('Industrial').style.display = 'block';
        document.getElementById('ICT').style.display = 'block';
      }
      if (document.getElementById('track').value == "SPORTS" || document.getElementById('track').value == "ARTANDDESIGN") {
        document.getElementById('HUMSS').style.display = 'none';
        document.getElementById('STEM').style.display = 'none';
        document.getElementById('ABM').style.display = 'none';
        document.getElementById('GAS').style.display = 'none';
        document.getElementById('Agri').style.display = 'none';
        document.getElementById('Home').style.display = 'none';
        document.getElementById('Industrial').style.display = 'none';
        document.getElementById('ICT').style.display = 'none';
      }
    }
  </script>
</body>

</html>