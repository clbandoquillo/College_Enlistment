<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-3">
        <div
          class="nav flex-column nav-pills"
          id="v-pills-tab"
          role="tablist"
          aria-orientation="vertical"
        >
          {{ clicked_value }}
          <a
            class="nav-link"
            id="v-pills-personalinfo-tab"
            data-toggle="pill"
            href="#v-pills-personalinfo"
            role="tab"
            aria-controls="v-pills-personalinfo"
            aria-selected="true"
            :click="changeVal(1)"
            :class="{ active: personalInfoNav }"
          >Basic Personal Information</a>

          <a
            class="nav-link"
            id="v-pills-addressAndContact-tab"
            data-toggle="pill"
            href="#v-pills-addressAndContact"
            role="tab"
            aria-controls="v-pills-addressAndContact"
            aria-selected="false"
            :click="changeVal(2)"
            :class="{ active: addressContactInfoNav }"
          >Address and Contact Information</a>
          <!--
          <a
            class="nav-link"
            :class="{ medicalProfile }"
            @click="medicalProfile"
            id="v-pills-medicalProfile-tab"
            data-toggle="pill"
            href="#v-pills-medicalProfile"
            role="tab"
            aria-controls="v-pills-medicalProfile"
            aria-selected="false"
          >Health / Medical profile</a>

          <a
            class="nav-link"
            :class="{ familyInfo }"
            @click="familyInfo"
            id="v-pills-familyInfo-tab"
            data-toggle="pill"
            href="#v-pills-familyInfo"
            role="tab"
            aria-controls="v-pills-familyInfo"
            aria-selected="false"
          >Family Information</a>

          <a
            class="nav-link"
            :class="{ educationalBackground }"
            @click="educationalBackground"
            id="v-pills-educationalBackground-tab"
            data-toggle="pill"
            href="#v-pills-educationalBackground"
            role="tab"
            aria-controls="v-pills-educationalBackground"
            aria-selected="false"
          >Educational Background</a>

          <a
            class="nav-link"
            :class="{ psychologicalProfile }"
            @click="psychologicalProfile"
            id="v-pills-psychologicalProfile-tab"
            data-toggle="pill"
            href="#v-pills-psychologicalProfile"
            role="tab"
            aria-controls="v-pills-psychologicalProfile"
            aria-selected="false"
          >Psychological Profile</a>-->

          <!--<a
            class="nav-link"
            id="v-pills-preinterview-tab"
            data-toggle="pill"
            href="#v-pills-preinterview"
            role="tab"
            aria-controls="v-pills-preinterview"
            aria-selected="false"
          >Pre-Interview Questions</a>-->
        </div>
      </div>
      <div class="col-xs-9 col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="v-pills-personalinfo"
            ref="personalInfo"
            role="tabpanel"
            aria-labelledby="v-pills-personalinfo-tab"
          >
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4 class="form-header text-primary">Name as it appears on the Birth Certificate</h4>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                          <div class="form-group">
                            <label>Surname</label>
                            <input
                              name="surname"
                              type="text"
                              class="form-control"
                              placeholder="Surname"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group">
                            <label>Suffix (Jr., III, IV etc.)</label>
                            <input
                              name="suffix"
                              type="text"
                              class="form-control"
                              placeholder="Suffix"
                            />
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
                            <input
                              name="firstname"
                              type="text"
                              class="form-control"
                              placeholder="Firstname"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label>Middle Name</label>
                            <input
                              name="middlename"
                              type="text"
                              class="form-control"
                              placeholder="Middlename"
                              required
                            />
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
                            <input
                              name="birthDate"
                              id="datepicker"
                              type="date"
                              class="form-control"
                              placeholder="Date of Birth"
                              required
                            />
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group">
                            <label>Birthplace</label>
                            <input
                              name="birthPlace"
                              type="text"
                              class="form-control"
                              placeholder="Birthplace"
                              required
                            />
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control" required>
                              <option value="none" selected disabled></option>
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
                              <option value="none" selected disabled></option>
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
                              <select
                                data-placeholder="Choose a Citizenship..."
                                id="citizenship"
                                name="citizenship"
                                class="form-control"
                                tabindex="-1"
                                required
                              >
                                <option value selected></option>
                                <option value selected></option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group">
                            <label>Religion</label>
                            <select id="religion" name="religion" class="form-control" required>
                              <option value="none" selected disabled></option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button
              :click="clicked_value = 2"
              :class="{ active: addressContactInfoNav }"
              id="v-pills-addressAndContact-tab"
              data-toggle="pill"
              href="#v-pills-addressAndContact"
              class="btn btn-primary btn-lg btn-block"
            >Proceed to Address and Contact Information</button>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-addressAndContact"
            ref="addressAndContact"
            role="tabpanel"
            aria-labelledby="v-pills-addressAndContact-tab"
          >
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4 class="form-header text-primary">Permanent Address</h4>
                <div class="form-group">
                  <label>Permanent Address (House No., Street, Subdivision/Sitio, Barangay)</label>
                  <input
                    name="permanentAddress"
                    type="text"
                    class="form-control"
                    placeholder="Permanent Address"
                    required
                  />
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label>City</label>
                            <select
                              data-placeholder="Choose a City..."
                              id="permanentCity"
                              name="permanentCity"
                              class="form-control"
                              tabindex="-1"
                            >
                              <option value selected></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label>Province</label>
                            <select
                              id="permanentProvince"
                              name="permanentProvince"
                              class="form-control"
                              required
                            >
                              <option value="none" selected disabled></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label>Zip/Postal Code</label>
                            <input
                              name="permanentzippostalcode"
                              type="text"
                              class="form-control"
                              placeholder="Zip/Postal Code"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label>Country</label>
                            <div class="chosen-select-single mg-b-20">
                              <select
                                data-placeholder="Choose a Country..."
                                id="permanentCountry"
                                name="permanentCountry"
                                class="form-control"
                                tabindex="-1"
                                required
                              >
                                <option value selected></option>
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
                  <label class="radio-inline">
                    <input
                      class="pull-left"
                      type="radio"
                      onclick="javascript:checkPermanent();"
                      id="sameAsPermanent"
                      value="1"
                      name="sameAsPermanent"
                    />Yes
                  </label>
                  <label class="radio-inline">
                    <input
                      class="pull-left"
                      type="radio"
                      onclick="javascript:checkPermanent();"
                      id="sameAsPermanent"
                      value="0"
                      name="sameAsPermanent"
                    />No
                  </label>
                </div>
                <label id="boxcheck">Check the following boxes if the following applies to you:</label>
                <div id="board" class="form-group">
                  <label>Boarding</label>
                  <label class="radio-inline">
                    <input
                      class="pull-left"
                      type="checkbox"
                      value="1"
                      name="boarding"
                      id="boarding"
                    />
                  </label>
                </div>
                <div id="relative" class="form-group">
                  <label>With Relative</label>
                  <label class="radio-inline">
                    <input
                      class="pull-left"
                      type="checkbox"
                      value="1"
                      name="withRelative"
                      id="withRelative"
                    />
                  </label>
                </div>
                <div class="form-group" style="display:block" id="caddress">
                  <label
                    id="cityAddressLabel"
                  >City Address (House No., Street, Subdivision/Sitio, Barangay)</label>
                  <input
                    id="cityAddress"
                    name="cityAddress"
                    type="text"
                    class="form-control"
                    placeholder="City Address"
                  />
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label id="cityCityLabel">City</label>
                            <select
                              data-placeholder="Choose a City..."
                              id="cityCity"
                              name="cityCity"
                              class="form-control"
                              tabindex="-1"
                            >
                              <option value></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label id="cityProvinceLabel">Province</label>
                            <select
                              id="cityProvince"
                              name="cityProvince"
                              class="form-control"
                              required
                            >
                              <option value></option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label id="cityzippostalcodeLabel">Zip/Postal Code</label>
                            <input
                              id="cityzippostalcode"
                              name="cityzippostalcode"
                              type="text"
                              class="form-control"
                              placeholder="Zip/Postal Code"
                            />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label id="cityCountryLabel">Country</label>
                            <div class="chosen-select-single mg-b-20">
                              <select
                                data-placeholder="Choose a Country..."
                                id="cityCountry"
                                name="cityCountry"
                                class="form-control"
                                tabindex="-1"
                              >
                                <option value selected></option>
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
                            <input
                              name="email"
                              type="email"
                              class="form-control"
                              placeholder="E-mail Address"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label>Mobile Number</label>
                            <input
                              name="mobileNum"
                              id="mobileNum"
                              type="tel"
                              class="form-control"
                              placeholder="Mobile no."
                              data-mask="+63 999-999-9999"
                              required
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <h4 class="form-header text-primary">
                  In Case of Emergency
                  <h5
                    class="form-header text-primary"
                  >(if boarding or living with relative, indicate name of landlady of guardian as person to contact)</h5>
                </h4>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                          <div class="form-select-list">
                            <label>Person To Contact</label>
                            <input
                              name="personToContact"
                              type="text"
                              class="form-control"
                              placeholder="Person To Contact"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                          <div class="form-select-list">
                            <label>Relationship</label>
                            <input
                              name="personToContactRelationship"
                              type="text"
                              class="form-control basic-ele-mg-t-10"
                              placeholder="Relationship"
                              required
                            />
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
                            <input
                              type="text"
                              class="form-control"
                              data-mask="(999) 999-9999"
                              name="personToContactTelNo"
                              placeholder="Telephone No."
                            />
                          </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                          <div class="form-select-list">
                            <label>Mobile No.</label>
                            <input
                              name="personToContactMobileNo"
                              id="personToContactMobileNo"
                              type="tel"
                              class="form-control"
                              placeholder="Mobile no."
                              data-mask="+63 999-999-9999"
                              required
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-medicalProfile"
            role="tabpanel"
            aria-labelledby="v-pills-medicalProfile-tab"
          >
            <h4 class="form-header text-primary">Health / Medical Profile</h4>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-select-list">
                        <label>Blood Group</label>
                        <select name="bloodGroup" class="form-control" required>
                          <option value="none" selected disabled></option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="AB">AB</option>
                          <option value="O">O</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-select-list">
                        <label>Rh</label>
                        <select name="rh" class="form-control" required>
                          <option value="none" selected disabled></option>
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
                        <input
                          name="physicianName"
                          type="text"
                          class="form-control"
                          placeholder="Family / Personal Physician's Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-select-list">
                        <label>Physician's Contact Information</label>
                        <input
                          name="physicianContactInformation"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder="Physician's Contact Information"
                        />
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
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="form-select-list">
                        <label>Presently taking medication?</label>
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="1"
                            name="takingMedication"
                            onclick="javascript:yesnoMedication();"
                            id="yestakingMedication"
                          />Yes
                        </label>
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="0"
                            name="takingMedication"
                            onclick="javascript:yesnoMedication();"
                            id="notakingMedication"
                          />No
                        </label>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-select-list">
                        <label>If yes, please indicate medication:</label>
                        <input
                          id="medicationInfo"
                          name="medicationInfo"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder
                        />
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
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                      <div class="form-select-list">
                        <label>Do you have special needs?</label>
                        <br />
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="1"
                            name="specialNeeds"
                            onclick="javascript:yesnoSpecialNeeds();"
                            id="yesSpecialNeeds"
                          />Yes
                        </label>
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="0"
                            name="specialNeeds"
                            onclick="javascript:yesnoSpecialNeeds();"
                            id="noSpecialNeeds"
                          />No
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <div class="form-select-list">
                        <label>Special Needs</label>
                        <select
                          id="typeOfSpecialNeeds"
                          name="typeOfSpecialNeeds"
                          class="form-control"
                        >
                          <option value selected></option>
                          <option value="0">Psychiatric</option>
                          <option value="1">Physical</option>
                          <option value="2">PWD</option>
                          <option value="3">Others</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                      <div class="form-select-list">
                        <label>Others: (Please specify)</label>
                        <input
                          id="othersSpecialNeeds"
                          name="othersSpecialNeeds"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder="Others: (Please specify)"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-familyInfo"
            role="tabpanel"
            aria-labelledby="v-pills-familyInfo-tab"
          >
            <h4 class="form-header text-primary">Family Information</h4>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <label>Position in the Family(e.g. eldest)</label>
                        <input
                          name="positionFamily"
                          type="text"
                          class="form-control"
                          placeholder="Position in the Family"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <label>No. of Brothers</label>
                        <input
                          name="numBrothers"
                          min="0"
                          value="0"
                          type="number"
                          class="form-control"
                          placeholder="No. of Brothers"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-group">
                        <label>No. of Sisters</label>
                        <input
                          name="numSisters"
                          min="0"
                          value="0"
                          type="number"
                          class="form-control"
                          placeholder="No. of Sisters"
                          required
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h5 class="form-header text-primary">Parents</h5>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-select-list">
                        <label>Father's Complete Name</label>
                        <input
                          type="text"
                          class="form-control"
                          name="fatherName"
                          placeholder="Father's Complete Name"
                          required
                        />
                        <label class="text-danger font-weight-bold">Check if deceased</label>
                        <input
                          class="pull-left"
                          type="checkbox"
                          onclick="javascript:checkFather();"
                          id="fatherLiving"
                          value="1"
                          name="fatherLiving"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Father's Occupation</label>
                        <input
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          id="fatherOccupation"
                          name="fatherOccupation"
                          placeholder="Father's Occupation"
                          required
                        />
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
                        <input
                          type="text"
                          class="form-control"
                          id="fatherAddress"
                          name="fatherAddress"
                          placeholder="Father's Address"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <div class="form-select-list">
                        <label>Father's Contact Number</label>
                        <input
                          name="fatherContactNum"
                          id="fatherContactNum"
                          type="tel"
                          class="form-control"
                          placeholder="Mobile no."
                          data-mask="+63 999-999-9999"
                        />
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
                        <input
                          name="motherName"
                          type="text"
                          class="form-control"
                          placeholder="Mother's Complete Name"
                          required
                        />
                        <label class="text-danger font-weight-bold">Check if deceased</label>
                        <input
                          class="pull-left"
                          type="checkbox"
                          onclick="javascript:checkMother();"
                          id="motherLiving"
                          value="1"
                          name="motherLiving"
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Mother's Occupation</label>
                        <input
                          id="motherOccupation"
                          name="motherOccupation"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder="Mother's Occupation"
                          required
                        />
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
                        <input
                          type="text"
                          class="form-control"
                          id="motherAddress"
                          name="motherAddress"
                          placeholder="Mother's Address"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <div class="form-select-list">
                        <label>Mother's Contact Number</label>
                        <input
                          name="motherContactNum"
                          id="motherContactNum"
                          type="tel"
                          class="form-control"
                          placeholder="Mobile no."
                          data-mask="+63 999-999-9999"
                        />
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
                        <label>Parents' Marital Status</label>
                        <select name="parentsMaritalStatus" class="form-control" required>
                          <option value="none" selected disabled></option>
                          <option value="1">Single (Never Married)</option>
                          <option value="2">Married</option>
                          <option value="3">Widow / Widower</option>
                          <option value="4">Head of the Family</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                      <div class="form-select-list">
                        <label>Name of Enlistee's Spouse (if married)</label>
                        <input
                          type="text"
                          class="form-control"
                          name="nameOfSpouse"
                          placeholder="Name of Spouse (if married)"
                        />
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12"></div>
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
                        <input
                          type="text"
                          class="form-control"
                          name="nameOfSpouse"
                          placeholder="Name of Spouse (if married)"
                        />
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
                        <input
                          type="number"
                          id="annualFamilyIncome"
                          name="annualFamilyIncome"
                          class="form-control"
                          min="1"
                          value="0"
                          placeholder="Annual Family Income"
                          required
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-educationalBackground"
            role="tabpanel"
            aria-labelledby="v-pills-educationalBackground-tab"
          >
            <h4 class="form-header text-primary">Educational Background</h4>
            <h5 class="form-header text-primary">Preschool</h5>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <div class="form-select-list">
                        <label>Name of School</label>
                        <input
                          name="preSchoolName"
                          type="text"
                          class="form-control"
                          placeholder="Name of School"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Address</label>
                        <input
                          name="preSchoolAddress"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder="Address"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="form-select-list">
                        <label>Year Graduated</label>
                        <input
                          name="preSchoolGraduated"
                          type="number"
                          class="form-control basic-ele-mg-t-10"
                          min="1"
                          placeholder="Years Graduated"
                          required
                        />
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
                        <input
                          name="gradeSchoolName"
                          type="text"
                          class="form-control"
                          placeholder="Name of School"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Address</label>
                        <input
                          name="gradeSchoolAddress"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder="Address"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="form-select-list">
                        <label>Year Graduated</label>
                        <input
                          name="gradeSchoolGraduated"
                          type="number"
                          class="form-control basic-ele-mg-t-10"
                          min="1"
                          placeholder="Years Graduated"
                          required
                        />
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
                        <input
                          name="highSchoolName"
                          type="text"
                          class="form-control"
                          placeholder="Name of School"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Address</label>
                        <input
                          name="highSchoolAddress"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder="Address"
                          required
                        />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <div class="form-select-list">
                        <label>Year Graduated</label>
                        <input
                          name="highSchoolGraduated"
                          type="number"
                          class="form-control basic-ele-mg-t-10"
                          min="1"
                          placeholder="Years Graduated"
                          required
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <label>Check the following boxes if the following applies to you:</label>
            <div class="form-group isIndigenousComm">
              <label>Are you a College Transferee?</label>
              <label class="radio-inline">
                <input
                  class="pull-left"
                  type="checkbox"
                  onclick="javascript:yesnoCheckCollege();"
                  id="yesCheckCollege"
                  value="1"
                  name="isCollege"
                />
              </label>
            </div>
            <div class="form-group">
              <div id="collegeInfo" style="display:none">
                <label>Name of College or University Attended(if transfer student)</label>
                <input
                  name="nameCollegeUniv"
                  id="nameCollegeUniv"
                  type="text"
                  class="form-control"
                  placeholder="Name of College or University Attended(if transfer student)"
                />
                <label>Complete Address of College or University Attended(if transfer student)</label>
                <input
                  name="addressCollegeUniv"
                  id="addressCollegeUniv"
                  type="text"
                  class="form-control"
                  placeholder="Complete Address of College or University Attended(if transfer student)"
                />
              </div>
            </div>
            <div class="form-group isIndigenousComm">
              <label>Did you attend Senior High School?</label>
              <label class="radio-inline">
                <input
                  class="pull-left"
                  type="checkbox"
                  value="0"
                  name="isSHS"
                  onclick="javascript:yesnoCheckSHS();"
                  id="yesCheckSHS"
                />
              </label>
            </div>
            <div class="form-group" id="shsName" style="display:none">
              <label>Name of Senior High School Attended</label>
              <input
                name="nameSHS"
                id="nameSHS"
                type="text"
                class="form-control"
                placeholder="Name of Senior High School"
              />
            </div>
            <div class="form-group" id="shsAdd" style="display:none">
              <label>Complete Address of Senior High School Attended</label>
              <input
                name="addressSHS"
                id="addressSHS"
                type="text"
                class="form-control"
                placeholder="Complete Address of Senior High School"
              />
            </div>
            <div class="form-group" id="shsPrincipal" style="display:none">
              <label>Principal's Name</label>
              <input
                name="principalSHS"
                id="principalSHS"
                type="text"
                class="form-control"
                placeholder="Principal's Name"
              />
            </div>
            <div class="form-group" id="shsTrackStrand" style="display:none">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-select-list">
                        <label>Track</label>
                        <select
                          id="track"
                          name="track"
                          class="form-control"
                          onclick="javascript:strandCheck();"
                        >
                          <option value selected disabled></option>
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
                          <option value="none" selected></option>
                          <option value="HUMSS" id="HUMSS" style="display:none">HUMSS</option>
                          <option value="STEM" id="STEM" style="display:none">STEM</option>
                          <option value="ABM" id="ABM" style="display:none">ABM</option>
                          <option value="GAS" id="GAS" style="display:none">GAS</option>
                          <option
                            value="Agri-Fishery Arts Strand"
                            id="Agri"
                            style="display:none"
                          >Agri-Fishery Arts Strand</option>
                          <option
                            value="Home Economics Strand"
                            id="Home"
                            style="display:none"
                          >Home Economics Strand</option>
                          <option
                            value="Industrial Arts Strand"
                            id="Industrial"
                            style="display:none"
                          >Industrial Arts Strand</option>
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
              <label class="radio-inline">
                <input
                  class="pull-left"
                  type="checkbox"
                  onclick="javascript:yesnoCheck();"
                  id="yesCheck"
                  value="1"
                  name="isIndigenous"
                />
              </label>
            </div>
            <div class="form-group">
              <div id="ifYes" style="display:none">
                <label>If yes, please indicate the name of your community.</label>
                <input
                  name="indigenousCommunity"
                  id="indigenousCommunity"
                  type="text"
                  class="form-control"
                  placeholder="community"
                />
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <label>Program(s) Applied for in order of preference</label>
                <br />
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <div class="form-select-list">
                          <label>Choice 1</label>
                          <select
                            id="choice"
                            name="programChoiceOne"
                            class="form-control programChoice1"
                            required
                          >
                            <option value="none" selected disabled></option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Choice 2</label>
                        <select
                          id="choice"
                          name="programChoiceTwo"
                          class="form-control programChoice2"
                        >
                          <option value selected></option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Choice 3</label>
                        <select
                          id="choice"
                          name="programChoiceThree"
                          class="form-control programChoice3"
                        >
                          <option value selected></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-psychologicalProfile"
            role="tabpanel"
            aria-labelledby="v-pills-psychologicalProfile-tab"
          >
            <h4 class="form-header text-primary">Psychological Profile</h4>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-select-list">
                        <label>Are you currently in therapy, rehabilitation, or clinical counseling elsewhere?</label>
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="1"
                            name="currTherapyRehabCounseling"
                            onclick="javascript:yesnoCounseling();"
                            id="yesCheckCounseling"
                          />Yes
                        </label>
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="0"
                            name="currTherapyRehabCounseling"
                            onclick="javascript:yesnoCounseling();"
                            id="noCheckCounseling"
                          />No
                        </label>
                      </div>
                      <div class="form-select-list">
                        <label>If yes, with whom:</label>
                        <input
                          id="currTherapyRehabCounselingName"
                          name="currTherapyRehabCounselingName"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder
                        />
                      </div>
                      <div class="form-select-list">
                        <label>Contact Information</label>
                        <input
                          name="currTherapyRehabCounselingContact"
                          id="currTherapyRehabCounselingContact"
                          type="tel"
                          class="form-control"
                          placeholder="Mobile no."
                          data-mask="+63 999-999-9999"
                        />
                      </div>
                      <div class="form-select-list">
                        <label>Briefly describe your reason for seeking help:</label>
                        <textarea
                          class="form-control"
                          id="reasonToSeekHelp"
                          name="reasonToSeekHelp"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-preinterview"
            role="tabpanel"
            aria-labelledby="v-pills-preinterview-tab"
          >Pre-Interview Questions</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      clicked_value: 1
    }
  },

  methods: {
    changeVal(el){
      this.clicked_value = el;
    }
  },

  computed: {
    personalInfoNav: function() {
      return this.clicked_value == 1 ? true : false;
    },

    addressContactInfoNav: function() {
      return this.clicked_value == 2 ? true : false;
    }
  }
};
</script>

<style>
.active {
  opacity: 1;
  visibility: visible;
}
</style>