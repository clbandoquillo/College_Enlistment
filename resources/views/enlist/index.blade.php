
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
                        <div class = "">
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
                                                                  <div class = "row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="form-group">
                                                                                <label>Firstname</label>
                                                                                  <input name="firstname" type="text" class="form-control" placeholder="Firstname" required>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="form-group">
                                                                                <label>Middlename</label>
                                                                                  <input name="middlename" type="text" class="form-control" placeholder="Middlename" required>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <div class = "row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                                <label>Date of Birth</label>
                                                                                  <input name="dateOfBirth" id="datepicker" type="date" class="form-control" placeholder="Date of Birth" required>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                                  <label>Mobile Number</label>
                                                                                  <input name="mobileNum" id="mobileNum" type="tel" class="form-control" placeholder="Mobile no." data-mask="+63 999-999-9999" required>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <div class = "row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                                  <label>Sex</label>
                                                                                  <select name="sex" class="form-control" required>
                                                                                    <option value="none" selected="" disabled=""></option>
                                                                                    <option value="0">Male</option>
                                                                                    <option value="1">Female</option>
                                                                                  </select>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                                  <label>Civil Status</label>
                                                                                  <select name="civilStatus" class="form-control" required>
                                                                                    <option value="none" selected="" disabled=""></option>
                                                                                    <option value="0">Single (Never Married)</option>
                                                                                    <option value="1">Married</option>
                                                                                    <option value="2">Divored</option>
                                                                                    <option value="3">Separated</option>
                                                                                  </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label>Address</label>
                                                                    <input name="homeAddress" type="text" class="form-control" placeholder="Address" required>
                                                                </div>
                                                                <div class="form-group">
                                                                  <div class = "row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                                <label>E-mail Address</label>
                                                                                <input name="homeTelFaxEmail" type="email" class="form-control" placeholder="E-mail Address" required>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                                  <label>State</label>
                                                                                  <input name="state" type="text" class="form-control" placeholder="State" required>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <div class = "row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                                  <label>City</label>
                                                                                  <input name="city" type="text" class="form-control" placeholder="City" required>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                                  <label>Zip/Postal Code</label>
                                                                                  <input name="zippostalcode" data-mask="9999" type="text" class="form-control" placeholder="Zip/Postal Code" required>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <div class = "row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class = "form-group">
                                                                              <label>Country</label>
                                                                              <div class="chosen-select-single mg-b-20">
                                                                                <select data-placeholder="Choose a Country..." id="country" name="country" class="chosen-select" tabindex="-1" required>
                                                                                  <option value="Philippines" selected>Philippines</option>
                                                                                  <option value="United States">United States</option>
                                                                                  <option value="United Kingdom">United Kingdom</option>
                                                                                  <option value="Afghanistan">Afghanistan</option>
                                                                                  <option value="Aland Islands">Aland Islands</option>
                                                                                  <option value="Albania">Albania</option>
                                                                                  <option value="Algeria">Algeria</option>
                                                                                  <option value="American Samoa">American Samoa</option>
                                                                                  <option value="Andorra">Andorra</option>
                                                                                  <option value="Angola">Angola</option>
                                                                                  <option value="Anguilla">Anguilla</option>
                                                                                  <option value="Antarctica">Antarctica</option>
                                                                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                                  <option value="Argentina">Argentina</option>
                                                                                  <option value="Armenia">Armenia</option>
                                                                                  <option value="Aruba">Aruba</option>
                                                                                  <option value="Australia">Australia</option>
                                                                                  <option value="Austria">Austria</option>
                                                                                  <option value="Azerbaijan">Azerbaijan</option>
                                                                                  <option value="Bahamas">Bahamas</option>
                                                                                  <option value="Bahrain">Bahrain</option>
                                                                                  <option value="Bangladesh">Bangladesh</option>
                                                                                  <option value="Barbados">Barbados</option>
                                                                                  <option value="Belarus">Belarus</option>
                                                                                  <option value="Belgium">Belgium</option>
                                                                                  <option value="Belize">Belize</option>
                                                                                  <option value="Benin">Benin</option>
                                                                                  <option value="Bermuda">Bermuda</option>
                                                                                  <option value="Bhutan">Bhutan</option>
                                                                                  <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                                                  <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                                  <option value="Botswana">Botswana</option>
                                                                                  <option value="Bouvet Island">Bouvet Island</option>
                                                                                  <option value="Brazil">Brazil</option>
                                                                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                                  <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                                  <option value="Bulgaria">Bulgaria</option>
                                                                                  <option value="Burkina Faso">Burkina Faso</option>
                                                                                  <option value="Burundi">Burundi</option>
                                                                                  <option value="Cambodia">Cambodia</option>
                                                                                  <option value="Cameroon">Cameroon</option>
                                                                                  <option value="Canada">Canada</option>
                                                                                  <option value="Cape Verde">Cape Verde</option>
                                                                                  <option value="Cayman Islands">Cayman Islands</option>
                                                                                  <option value="Central African Republic">Central African Republic</option>
                                                                                  <option value="Chad">Chad</option>
                                                                                  <option value="Chile">Chile</option>
                                                                                  <option value="China">China</option>
                                                                                  <option value="Christmas Island">Christmas Island</option>
                                                                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                                  <option value="Colombia">Colombia</option>
                                                                                  <option value="Comoros">Comoros</option>
                                                                                  <option value="Congo">Congo</option>
                                                                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                                                  <option value="Cook Islands">Cook Islands</option>
                                                                                  <option value="Costa Rica">Costa Rica</option>
                                                                                  <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                                  <option value="Croatia">Croatia</option>
                                                                                  <option value="Cuba">Cuba</option>
                                                                                  <option value="Curacao">Curacao</option>
                                                                                  <option value="Cyprus">Cyprus</option>
                                                                                  <option value="Czech Republic">Czech Republic</option>
                                                                                  <option value="Denmark">Denmark</option>
                                                                                  <option value="Djibouti">Djibouti</option>
                                                                                  <option value="Dominica">Dominica</option>
                                                                                  <option value="Dominican Republic">Dominican Republic</option>
                                                                                  <option value="Ecuador">Ecuador</option>
                                                                                  <option value="Egypt">Egypt</option>
                                                                                  <option value="El Salvador">El Salvador</option>
                                                                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                                  <option value="Eritrea">Eritrea</option>
                                                                                  <option value="Estonia">Estonia</option>
                                                                                  <option value="Ethiopia">Ethiopia</option>
                                                                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                                  <option value="Faroe Islands">Faroe Islands</option>
                                                                                  <option value="Fiji">Fiji</option>
                                                                                  <option value="Finland">Finland</option>
                                                                                  <option value="France">France</option>
                                                                                  <option value="French Guiana">French Guiana</option>
                                                                                  <option value="French Polynesia">French Polynesia</option>
                                                                                  <option value="French Southern Territories">French Southern Territories</option>
                                                                                  <option value="Gabon">Gabon</option>
                                                                                  <option value="Gambia">Gambia</option>
                                                                                  <option value="Georgia">Georgia</option>
                                                                                  <option value="Germany">Germany</option>
                                                                                  <option value="Ghana">Ghana</option>
                                                                                  <option value="Gibraltar">Gibraltar</option>
                                                                                  <option value="Greece">Greece</option>
                                                                                  <option value="Greenland">Greenland</option>
                                                                                  <option value="Grenada">Grenada</option>
                                                                                  <option value="Guadeloupe">Guadeloupe</option>
                                                                                  <option value="Guam">Guam</option>
                                                                                  <option value="Guatemala">Guatemala</option>
                                                                                  <option value="Guernsey">Guernsey</option>
                                                                                  <option value="Guinea">Guinea</option>
                                                                                  <option value="Guinea-bissau">Guinea-bissau</option>
                                                                                  <option value="Guyana">Guyana</option>
                                                                                  <option value="Haiti">Haiti</option>
                                                                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                                  <option value="Honduras">Honduras</option>
                                                                                  <option value="Hong Kong">Hong Kong</option>
                                                                                  <option value="Hungary">Hungary</option>
                                                                                  <option value="Iceland">Iceland</option>
                                                                                  <option value="India">India</option>
                                                                                  <option value="Indonesia">Indonesia</option>
                                                                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                                  <option value="Iraq">Iraq</option>
                                                                                  <option value="Ireland">Ireland</option>
                                                                                  <option value="Isle of Man">Isle of Man</option>
                                                                                  <option value="Israel">Israel</option>
                                                                                  <option value="Italy">Italy</option>
                                                                                  <option value="Jamaica">Jamaica</option>
                                                                                  <option value="Japan">Japan</option>
                                                                                  <option value="Jersey">Jersey</option>
                                                                                  <option value="Jordan">Jordan</option>
                                                                                  <option value="Kazakhstan">Kazakhstan</option>
                                                                                  <option value="Kenya">Kenya</option>
                                                                                  <option value="Kiribati">Kiribati</option>
                                                                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                                  <option value="Korea, Republic of">Korea, Republic of</option>
                                                                                  <option value="Kuwait">Kuwait</option>
                                                                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                                  <option value="Latvia">Latvia</option>
                                                                                  <option value="Lebanon">Lebanon</option>
                                                                                  <option value="Lesotho">Lesotho</option>
                                                                                  <option value="Liberia">Liberia</option>
                                                                                  <option value="Libya">Libya</option>
                                                                                  <option value="Liechtenstein">Liechtenstein</option>
                                                                                  <option value="Lithuania">Lithuania</option>
                                                                                  <option value="Luxembourg">Luxembourg</option>
                                                                                  <option value="Macao">Macao</option>
                                                                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                                  <option value="Madagascar">Madagascar</option>
                                                                                  <option value="Malawi">Malawi</option>
                                                                                  <option value="Malaysia">Malaysia</option>
                                                                                  <option value="Maldives">Maldives</option>
                                                                                  <option value="Mali">Mali</option>
                                                                                  <option value="Malta">Malta</option>
                                                                                  <option value="Marshall Islands">Marshall Islands</option>
                                                                                  <option value="Martinique">Martinique</option>
                                                                                  <option value="Mauritania">Mauritania</option>
                                                                                  <option value="Mauritius">Mauritius</option>
                                                                                  <option value="Mayotte">Mayotte</option>
                                                                                  <option value="Mexico">Mexico</option>
                                                                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                                  <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                                  <option value="Monaco">Monaco</option>
                                                                                  <option value="Mongolia">Mongolia</option>
                                                                                  <option value="Montenegro">Montenegro</option>
                                                                                  <option value="Montserrat">Montserrat</option>
                                                                                  <option value="Morocco">Morocco</option>
                                                                                  <option value="Mozambique">Mozambique</option>
                                                                                  <option value="Myanmar">Myanmar</option>
                                                                                  <option value="Namibia">Namibia</option>
                                                                                  <option value="Nauru">Nauru</option>
                                                                                  <option value="Nepal">Nepal</option>
                                                                                  <option value="Netherlands">Netherlands</option>
                                                                                  <option value="New Caledonia">New Caledonia</option>
                                                                                  <option value="New Zealand">New Zealand</option>
                                                                                  <option value="Nicaragua">Nicaragua</option>
                                                                                  <option value="Niger">Niger</option>
                                                                                  <option value="Nigeria">Nigeria</option>
                                                                                  <option value="Niue">Niue</option>
                                                                                  <option value="Norfolk Island">Norfolk Island</option>
                                                                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                                  <option value="Norway">Norway</option>
                                                                                  <option value="Oman">Oman</option>
                                                                                  <option value="Pakistan">Pakistan</option>
                                                                                  <option value="Palau">Palau</option>
                                                                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                                  <option value="Panama">Panama</option>
                                                                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                                                                  <option value="Paraguay">Paraguay</option>
                                                                                  <option value="Peru">Peru</option>
                                                                                  <option value="Philippines">Philippines</option>
                                                                                  <option value="Pitcairn">Pitcairn</option>
                                                                                  <option value="Poland">Poland</option>
                                                                                  <option value="Portugal">Portugal</option>
                                                                                  <option value="Puerto Rico">Puerto Rico</option>
                                                                                  <option value="Qatar">Qatar</option>
                                                                                  <option value="Reunion">Reunion</option>
                                                                                  <option value="Romania">Romania</option>
                                                                                  <option value="Russian Federation">Russian Federation</option>
                                                                                  <option value="Rwanda">Rwanda</option>
                                                                                  <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                                                  <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                                  <option value="Saint Lucia">Saint Lucia</option>
                                                                                  <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                                                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                                                  <option value="Samoa">Samoa</option>
                                                                                  <option value="San Marino">San Marino</option>
                                                                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                                                                  <option value="Senegal">Senegal</option>
                                                                                  <option value="Serbia">Serbia</option>
                                                                                  <option value="Seychelles">Seychelles</option>
                                                                                  <option value="Sierra Leone">Sierra Leone</option>
                                                                                  <option value="Singapore">Singapore</option>
                                                                                  <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                                                                  <option value="Slovakia">Slovakia</option>
                                                                                  <option value="Slovenia">Slovenia</option>
                                                                                  <option value="Solomon Islands">Solomon Islands</option>
                                                                                  <option value="Somalia">Somalia</option>
                                                                                  <option value="South Africa">South Africa</option>
                                                                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                                                  <option value="South Sudan">South Sudan</option>
                                                                                  <option value="Spain">Spain</option>
                                                                                  <option value="Sri Lanka">Sri Lanka</option>
                                                                                  <option value="Sudan">Sudan</option>
                                                                                  <option value="Suriname">Suriname</option>
                                                                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                                  <option value="Swaziland">Swaziland</option>
                                                                                  <option value="Sweden">Sweden</option>
                                                                                  <option value="Switzerland">Switzerland</option>
                                                                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                                  <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                                  <option value="Tajikistan">Tajikistan</option>
                                                                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                                  <option value="Thailand">Thailand</option>
                                                                                  <option value="Timor-leste">Timor-leste</option>
                                                                                  <option value="Togo">Togo</option>
                                                                                  <option value="Tokelau">Tokelau</option>
                                                                                  <option value="Tonga">Tonga</option>
                                                                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                                  <option value="Tunisia">Tunisia</option>
                                                                                  <option value="Turkey">Turkey</option>
                                                                                  <option value="Turkmenistan">Turkmenistan</option>
                                                                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                                  <option value="Tuvalu">Tuvalu</option>
                                                                                  <option value="Uganda">Uganda</option>
                                                                                  <option value="Ukraine">Ukraine</option>
                                                                                  <option value="United Arab Emirates">United Arab Emirates</option>
                                                                                  <option value="United Kingdom">United Kingdom</option>
                                                                                  <option value="United States">United States</option>
                                                                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                                  <option value="Uruguay">Uruguay</option>
                                                                                  <option value="Uzbekistan">Uzbekistan</option>
                                                                                  <option value="Vanuatu">Vanuatu</option>
                                                                                  <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                                                  <option value="Viet Nam">Viet Nam</option>
                                                                                  <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                                  <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                                  <option value="Western Sahara">Western Sahara</option>
                                                                                  <option value="Yemen">Yemen</option>
                                                                                  <option value="Zambia">Zambia</option>
                                                                                  <option value="Zimbabwe">Zimbabwe</option>
                                                                                </select>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="form-group">
                                                                                <label>Citizenship</label>
                                                                                <input name="citizenship" id="citizenship" type="text" class="form-control" value = "Filipino" placeholder="Citizenship" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                            <!---------->
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group isIndigenousComm">
                                                                  <label>Are you a College Transferee?</label>
                                                                  <label class = "radio-inline"><input class="pull-left" type="radio" onclick="javascript:yesnoCheckCollege();" id = "yesCheckCollege" value="1" name="isIndigenous">Yes</label>
                                                                  <label class = "radio-inline"><input class="pull-left" type="radio" value="0" name="isIndigenous" onclick="javascript:yesnoCheckCollege();" id = "noCheckCollege">No</label>
                                                              </div>
                                                              <div class="form-group" id = "shsName" style="display:none">
                                                                  <label>Name of Senior High School Attended</label>
                                                                  <input name="nameSHS" id="nameSHS" type="text" class="form-control" placeholder="Name of Senior High School">
                                                              </div>
                                                              <div class="form-group" id = "shsAdd" style="display:none">
                                                                  <label>Complete Address of Senior High School Attended</label>
                                                                  <input name="addressSHS" id="addressSHS" type="text" class="form-control" placeholder="Complete Address of Senior High School">
                                                              </div>
                                                              <div class="form-group" id="shsTrackStrand" style="display:none">
                                                                <div class = "row">
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                      <div class="row">
                                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                <label>Track</label>
                                                                                <select id="track" name="track" class="form-control" onclick="javascript:strandCheck();">
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
                                                                                <select id="strand" name="strand" class="form-control">
                                                                                  <option value="none" selected=""></option>
                                                                                    <option value="HUMSS" id="HUMSS" style="display:none">HUMSS</option>
                                                                                    <option value="STEM" id="STEM" style="display:none">STEM</option>
                                                                                    <option value="ABM" id="ABM" style="display:none">ABM</option>
                                                                                    <option value="GAS" id="GAS" style="display:none">GAS</option>
                                                                                  <option value="Agri-Fishery Arts Strand"
                                                                                  id="Agri"
                                                                                  style="display:none">Agri-Fishery Arts Strand</option>
                                                                                  <option value="Home Economics Strand"
                                                                                  id="Home"
                                                                                  style="display:none">Home Economics Strand</option>
                                                                                  <option value="Industrial Arts Strand"
                                                                                  id="Industrial"
                                                                                  style="display:none">Industrial Arts Strand</option>
                                                                                  <option value="ICT Strand"
                                                                                  id="ICT"
                                                                                  style="display:none">ICT Strand</option>
                                                                                </select>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <div id="collegeInfo" style="display:none">
                                                                  <label>Name of College or University Attended(if transfer student)</label>
                                                                  <input name="nameCollegeUniv" id="nameCollegeUniv" type="text" class="form-control" placeholder="Name of College or University Attended(if transfer student)">
                                                                  <label>Complete Address of College or University Attended(if transfer student)</label>
                                                                  <input name="addressCollegeUniv" id="addressCollegeUniv" type="text" class="form-control" placeholder="Complete Address of College or University Attended(if transfer student)">
                                                                </div>
                                                              </div>
                                                              
                                                              <div class="form-group">
                                                                <div class = "row" id="collegeProgram" style="display:none">
                                                                  <label>Preferred Degree of Program</label><br>
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                      <div class="row">
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                <div class="form-select-list">
                                                                                  <label>Choice 1</label>
                                                                                  <select id = "programChoiceOne" name="programChoiceOne" class="form-control" required>
                                                                                    <option value="none" selected="" disabled=""></option>
                                                                                    @foreach($programs as $p)
                                                                                        <option value="{{ $p->programCode }}">{{ $p->programCode.", ".$p->programDescription.", ".$p->programDiv }}</option>
                                                                                    @endforeach
                                                                                  </select>
                                                                                </div>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="form-select-list">
                                                                              <label>Choice 2</label>
                                                                              <select id="programChoiceTwo" name="programChoiceTwo" class="form-control">
                                                                                <option value="none" selected="" ></option>
                                                                                @foreach($programs as $p)
                                                                                    <option value="{{ $p->programCode }}">{{ $p->programCode.", ".$p->programDescription.", ".$p->programDiv }}</option>
                                                                                @endforeach
                                                                              </select>
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                            <div class="form-select-list">
                                                                              <label>Choice 3</label>
                                                                              <select id="programChoiceThree" name="programChoiceThree" class="form-control">
                                                                                <option value="none" selected=""></option>
                                                                                @foreach($programs as $p)
                                                                                    <option value="{{ $p->programCode }}">{{ $p->programCode.", ".$p->programDescription.", ".$p->programDiv }}</option>
                                                                                @endforeach
                                                                              </select>
                                                                            </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group isIndigenousComm">
                                                                  <label>Do you identify yourself as a member of an Indigenous Community?</label>
                                                                  <label class = "radio-inline"><input class="pull-left" type="radio" onclick="javascript:yesnoCheck();" id = "yesCheck" value="1" name="isIndigenous">Yes</label>
                                                                  <label class = "radio-inline"><input class="pull-left" type="radio" value="0" name="isIndigenous" onclick="javascript:yesnoCheck();" id = "noCheck">No</label>
                                                              </div>
                                                              <div class="form-group">
                                                                <div id="ifYes" style="display:none">
                                                                  <label>If yes, please indicate the name of your community.</label>
                                                                  <input name="indigenousCommunity" id="indigenousCommunity" type="text" class="form-control" placeholder="community">
                                                                </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <div class = "row">
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                              <div class="form-group">
                                                                <div class = "row">
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                              <div class="form-group">
                                                                <div class = "row">
                                                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                      <div class="row">

                                                                          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                                              <div class="form-select-list">
                                                                                  <label>Annual Family Income</label>
                                                                                  <input type="number" id = "annualFamilyIncome" name = "annualFamilyIncome" class="form-control" min = "1" value = "0" placeholder="Annual Family Income" required>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div><br><br>
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
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script><!-- form validate JS
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
    <script type = "text/javascript">
      //Date picker

      $("addEnlist").click(function()
      {
        $("enlist").attr("action", "/enlist/create");
      });    

      $('#enlist').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
          e.preventDefault();
          return false;
        }
      });

      $(document).ready(function(){  
        $("select").change(function() {   
          $("select").not(this).find("option[value='"+ $(this).val() + "']").attr('disabled', true);
        }); 
      }); 

      $(this).ready(function(){
   
        $('.isIndigenousComm').change(function(){
            if($(this).val() === '0')
                $("#indigenousCommunity").prop('hidden',false);
            else
                $("#indigenousCommunity").prop('hidden',true);
        });
            
            $('.isIndigenousComm').trigger('change');
      });

      $(this).ready(function(){
   
        $('#programChoiceOne').change(function(){
            if($(this).val() == ''){
              $("#programChoiceTwo").prop('hidden',true);
            }
                
        });
            
            $('#programChoiceOne').trigger('change');
      });

      function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
        }
        else document.getElementById('ifYes').style.display = 'none';
      }

      function yesnoCheckCollege() {
        if (document.getElementById('noCheckCollege').checked) {
          document.getElementById('shsName').style.display = 'block';
          document.getElementById('shsAdd').style.display = 'block';
          document.getElementById('shsTrackStrand').style.display = 'block';
          document.getElementById('collegeInfo').style.display = 'none';
          document.getElementById('collegeProgram').style.display = 'none';
        }
        else{
          document.getElementById('collegeInfo').style.display = 'block';
          document.getElementById('collegeProgram').style.display = 'block';
          document.getElementById('shsName').style.display = 'none';
          document.getElementById('shsAdd').style.display = 'none';
          document.getElementById('shsTrackStrand').style.display = 'none';
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
