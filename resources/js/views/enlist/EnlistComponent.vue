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
          <a
            class="nav-link active"
            id="v-pills-personalinfo-tab"
            data-toggle="pill"
            href="#v-pills-personalinfo"
            role="tab"
            aria-controls="v-pills-personalinfo"
            aria-selected="true"
          >Basic Personal Information</a>

          <a
            class="nav-link"
            id="v-pills-addressAndContact-tab"
            data-toggle="pill"
            href="#v-pills-addressAndContact"
            role="tab"
            aria-controls="v-pills-addressAndContact"
            aria-selected="false"
          >Address and Contact Information</a>
          <a
            class="nav-link"
            id="v-pills-medicalProfile-tab"
            data-toggle="pill"
            href="#v-pills-medicalProfile"
            role="tab"
            aria-controls="v-pills-medicalProfile"
            aria-selected="false"
          >Health / Medical profile</a>

          <a
            class="nav-link"
            id="v-pills-familyInfo-tab"
            data-toggle="pill"
            href="#v-pills-familyInfo"
            role="tab"
            aria-controls="v-pills-familyInfo"
            aria-selected="false"
          >Family Information</a>

          <a
            class="nav-link"
            id="v-pills-educationalBackground-tab"
            data-toggle="pill"
            href="#v-pills-educationalBackground"
            role="tab"
            aria-controls="v-pills-educationalBackground"
            aria-selected="false"
          >Educational Background</a>

          <a
            class="nav-link"
            id="v-pills-psychologicalProfile-tab"
            data-toggle="pill"
            href="#v-pills-psychologicalProfile"
            role="tab"
            aria-controls="v-pills-psychologicalProfile"
            aria-selected="false"
          >Psychological Profile</a>
          <br />

          <button @click="submitModal" class="btn btn-primary btn-lg btn-block">Submit Enlistment</button>
          <br />

          <!-- <a
            class="nav-link"
            id="v-pills-review-tab"
            data-toggle="pill"
            href="#v-pills-review"
            role="tab"
            aria-controls="v-pills-review"
            aria-selected="false"
          >Review</a>-->
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
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          <div class="form-group">
                            <label>Surname</label>
                            <input
                              v-model="enlist.surname"
                              name="surname"
                              type="text"
                              class="form-control"
                              placeholder="Surname"
                              required
                            />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label>Suffix (Jr., III, IV etc.)</label>
                            <input
                              v-model="enlist.suffix"
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
                              v-model="enlist.firstname"
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
                              v-model="enlist.middlename"
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
                              v-model="enlist.birthDate"
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
                              v-model="enlist.birthPlace"
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
                            <select
                              v-model="enlist.gender"
                              name="gender"
                              class="form-control"
                              required
                            >
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
                            <select
                              v-model="enlist.civilStatus"
                              name="civilStatus"
                              class="form-control"
                              required
                            >
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
                                v-model="enlist.citizenship"
                                name="citizenship"
                                class="form-control"
                                tabindex="-1"
                                required
                              >
                                <option disabled selected></option>
                                <option
                                  v-for="nationality in nationalities"
                                  v-bind:value="nationality.code"
                                >{{nationality.name}}</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="form-group">
                            <label>Religion</label>
                            <select
                              id="religion"
                              v-model="enlist.religion"
                              name="religion"
                              class="form-control"
                              required
                            >
                              <option disabled selected></option>
                              <option
                                v-for="religion in religions"
                                v-bind:value="religion.code"
                              >{{religion.descr}}</option>
                            </select>
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
                    v-model="enlist.permanentAddress"
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
                              v-model="enlist.permanentCity"
                              name="permanentCity"
                              class="form-control"
                              tabindex="-1"
                            >
                              <option disabled selected></option>
                              <option
                                v-for="city in cities"
                                v-bind:value="city.CityId"
                              >{{city.CityName}}, {{city.ProvinceName}}</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label>Province</label>
                            <select
                              id="permanentProvince"
                              v-model="enlist.permanentProvince"
                              name="permanentProvince"
                              class="form-control"
                              required
                            >
                              <option disabled selected></option>
                              <option
                                v-for="province in provinces"
                                v-bind:value="province.ProvinceId"
                              >{{province.ProvinceName}}</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="form-group">
                            <label>Zip/Postal Code</label>
                            <input
                              name="permanentzippostalcode"
                              v-model="enlist.permanentzippostalcode"
                              type="number"
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
                                v-model="enlist.permanentCountry"
                                class="form-control"
                                tabindex="-1"
                                required
                              >
                                <option disabled selected></option>
                                <option
                                  v-for="country in countries"
                                  v-bind:value="country.id"
                                >{{country.description}}</option>
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
                      id="sameAsPermanent"
                      value="1"
                      name="sameAsPermanent"
                      v-model="enlist.sameAsPermanent"
                    />Yes
                  </label>
                  <label class="radio-inline">
                    <input
                      class="pull-left"
                      type="radio"
                      id="sameAsPermanent"
                      value="0"
                      name="sameAsPermanent"
                      v-model="enlist.sameAsPermanent"
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
                      v-model="enlist.boarding"
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
                      v-model="enlist.withRelative"
                      id="withRelative"
                    />
                  </label>
                </div>
                <div v-if="enlist.sameAsPermanent != 1">
                  <div class="form-group" style="display:block" id="caddress">
                    <label
                      id="cityAddressLabel"
                    >City Address (House No., Street, Subdivision/Sitio, Barangay)</label>
                    <input
                      id="cityAddress"
                      name="cityAddress"
                      v-model="enlist.cityAddress"
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
                                v-model="enlist.cityCity"
                                class="form-control"
                                tabindex="-1"
                              >
                                <option disabled selected></option>
                                <option
                                  v-for="city in cities"
                                  v-bind:value="city.CityId"
                                >{{city.CityName}}, {{city.ProvinceName}}</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                              <label id="cityProvinceLabel">Province</label>
                              <select
                                id="cityProvince"
                                name="cityProvince"
                                v-model="enlist.cityProvince"
                                class="form-control"
                                required
                              >
                                <option disabled selected></option>
                                <option
                                  v-for="province in provinces"
                                  v-bind:value="province.ProvinceId"
                                >{{province.ProvinceName}}</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                              <label id="cityzippostalcodeLabel">Zip/Postal Code</label>
                              <input
                                id="cityzippostalcode"
                                name="cityzippostalcode"
                                v-model="enlist.cityzippostalcode"
                                type="number"
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
                                  v-model="enlist.cityCountry"
                                  class="form-control"
                                  tabindex="-1"
                                >
                                  <option disabled selected></option>
                                  <option
                                    v-for="country in countries"
                                    v-bind:value="country.id"
                                  >{{country.description}}</option>
                                </select>
                              </div>
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
                              v-model="enlist.email"
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
                              v-model="enlist.mobileNum"
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
                              v-model="enlist.personToContact"
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
                              v-model="enlist.personToContactRelationship"
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
                              v-model="enlist.personToContactTelNo"
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
                              v-model="enlist.personToContactMobileNo"
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
                        <select
                          v-model="enlist.bloodGroup"
                          name="bloodGroup"
                          class="form-control"
                          required
                        >
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
                        <select v-model="enlist.rh" name="rh" class="form-control" required>
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
                          v-model="enlist.physicianName"
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
                          v-model="enlist.physicianContactInformation"
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
                            v-model="enlist.takingMedication"
                          />Yes
                        </label>
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="0"
                            name="takingMedication"
                            v-model="enlist.takingMedication"
                          />No
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div v-if="enlist.takingMedication == 1" class="form-group">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-select-list">
                        <label>If yes, please indicate medication:</label>
                        <input
                          id="medicationInfo"
                          name="medicationInfo"
                          v-model="enlist.medicationInfo"
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
                            v-model="enlist.specialNeeds"
                          />Yes
                        </label>
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="0"
                            name="specialNeeds"
                            v-model="enlist.specialNeeds"
                          />No
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  v-if="enlist.specialNeeds == 1"
                  class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
                >
                  <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <div class="form-select-list">
                        <label>Special Needs</label>
                        <select
                          id="typeOfSpecialNeeds"
                          name="typeOfSpecialNeeds"
                          v-model="enlist.typeOfSpecialNeeds"
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
                      <div class="form-select-list" v-if="enlist.typeOfSpecialNeeds == 3">
                        <label>Others: (Please specify)</label>
                        <input
                          id="othersSpecialNeeds"
                          name="othersSpecialNeeds"
                          v-model="enlist.othersSpecialNeeds"
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
                          v-model="enlist.positionFamily"
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
                          v-model="enlist.numBrothers"
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
                          v-model="enlist.numSisters"
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
                          v-model="enlist.fatherName"
                          placeholder="Father's Complete Name"
                          required
                        />
                        <label class="text-danger font-weight-bold">Check if deceased</label>
                        <input
                          class="pull-left"
                          type="checkbox"
                          id="fatherLiving"
                          value="1"
                          name="fatherLiving"
                          v-model="enlist.fatherLiving"
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
                          v-model="enlist.fatherOccupation"
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
                          v-model="enlist.fatherAddress"
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
                          v-model="enlist.fatherContactNum"
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
                          v-model="enlist.motherName"
                          type="text"
                          class="form-control"
                          placeholder="Mother's Complete Name"
                          required
                        />
                        <label class="text-danger font-weight-bold">Check if deceased</label>
                        <input
                          class="pull-left"
                          type="checkbox"
                          id="motherLiving"
                          v-model="enlist.motherLiving"
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
                          v-model="enlist.motherOccupation"
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
                          v-model="enlist.motherAddress"
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
                          v-model="enlist.motherContactNum"
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
                        <select
                          v-model="enlist.parentsMaritalStatus"
                          name="parentsMaritalStatus"
                          class="form-control"
                          required
                        >
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
                          v-model="enlist.nameOfSpouse"
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
                        <label>Annual Family Income (in Philippine Peso)</label>
                        <input
                          type="number"
                          id="annualFamilyIncome"
                          name="annualFamilyIncome"
                          v-model="enlist.annualFamilyIncome"
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
                        <select
                          data-placeholder="Choose a School..."
                          id="preSchoolName"
                          name="preSchoolName"
                          v-model="enlist.preSchoolName"
                          class="form-control"
                          tabindex="-1"
                        >
                          <option disabled selected></option>
                          <option
                            v-for="school in schools"
                            v-bind:value="school.SchoolId"
                          >{{school.SchoolName}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Address</label>
                        <input
                          name="preSchoolAddress"
                          v-model="enlist.preSchoolAddress"
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
                          v-model="enlist.preSchoolGraduated"
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
                        <select
                          data-placeholder="Choose a School..."
                          id="gradeSchoolName"
                          name="gradeSchoolName"
                          v-model="enlist.gradeSchoolName"
                          class="form-control"
                          tabindex="-1"
                        >
                          <option disabled selected></option>
                          <option
                            v-for="school in schools"
                            v-bind:value="school.SchoolId"
                          >{{school.SchoolName}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Address</label>
                        <input
                          name="gradeSchoolAddress"
                          v-model="enlist.gradeSchoolAddress"
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
                          v-model="enlist.gradeSchoolGraduated"
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
                        <select
                          data-placeholder="Choose a School..."
                          id="highSchoolName"
                          name="highSchoolName"
                          v-model="enlist.highSchoolName"
                          class="form-control"
                          tabindex="-1"
                        >
                          <option disabled selected></option>
                          <option
                            v-for="school in schools"
                            v-bind:value="school.SchoolId"
                          >{{school.SchoolName}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Address</label>
                        <input
                          name="highSchoolAddress"
                          v-model="enlist.highSchoolAddress"
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
                          v-model="enlist.highSchoolGraduated"
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
                  id="yesCheckCollege"
                  value="1"
                  name="isCollege"
                  v-model="enlist.isCollege"
                />
              </label>
            </div>

            <div v-if="enlist.isCollege == 1">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-select-list">
                          <label>Name of College or University Attended(if transfer student)</label>
                          <select
                            data-placeholder="Choose a School..."
                            id="nameCollegeUniv"
                            name="nameCollegeUniv"
                            v-model="enlist.nameCollegeUniv"
                            class="form-control"
                            tabindex="-1"
                          >
                            <option disabled selected></option>
                            <option
                              v-for="school in schools"
                              v-bind:value="school.SchoolId"
                            >{{school.SchoolName}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-select-list">
                          <label>Complete Address of College or University Attended(if transfer student)</label>
                          <input
                            name="addressCollegeUniv"
                            v-model="enlist.addressCollegeUniv"
                            id="addressCollegeUniv"
                            type="text"
                            class="form-control"
                            placeholder="Complete Address of College or University Attended(if transfer student)"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Check if you have attended Senior High School K to 12 Program</label>
              <label class="radio-inline">
                <input
                  class="pull-left"
                  type="checkbox"
                  value="0"
                  name="isSHS"
                  v-model="enlist.isSHS"
                  id="yesCheckSHS"
                />
              </label>
            </div>

            <div v-if="enlist.isSHS == 1">
              <div class="form-group">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-select-list">
                          <label>Name of Senior High School Attended</label>
                          <select
                            data-placeholder="Choose a School..."
                            id="nameSHS"
                            name="nameSHS"
                            v-model="enlist.nameSHS"
                            class="form-control"
                            tabindex="-1"
                          >
                            <option disabled selected></option>
                            <option
                              v-for="school in schools"
                              v-bind:value="school.SchoolId"
                            >{{school.SchoolName}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-select-list">
                          <label>Complete Address of Senior High School Attended</label>
                          <input
                            name="addressSHS"
                            v-model="enlist.addressSHS"
                            id="addressSHS"
                            type="text"
                            class="form-control"
                            placeholder="Complete Address of Senior High School"
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
                          <label>Principal's Name</label>
                          <input
                            name="principalSHS"
                            v-model="enlist.principalSHS"
                            id="principalSHS"
                            type="text"
                            class="form-control"
                            placeholder="Principal's Name"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-select-list"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group" id="shsTrackStrand">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-select-list">
                          <label>Track</label>
                          <select
                            id="track"
                            name="track"
                            v-model="enlist.track"
                            class="form-control"
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
                          <select
                            id="strand"
                            v-model="enlist.strand"
                            name="strand"
                            class="form-control"
                          >
                            <option value="none" selected></option>
                            <option v-if="enlist.track == 'ACADEMIC'" value="HUMSS" id="HUMSS">HUMSS</option>
                            <option v-if="enlist.track == 'ACADEMIC'" value="STEM" id="STEM">STEM</option>
                            <option v-if="enlist.track == 'ACADEMIC'" value="ABM" id="ABM">ABM</option>
                            <option v-if="enlist.track == 'ACADEMIC'" value="GAS" id="GAS">GAS</option>
                            <option
                              v-if="enlist.track == 'TVL'"
                              value="Agri-Fishery Arts Strand"
                              id="Agri"
                            >Agri-Fishery Arts Strand</option>
                            <option
                              v-if="enlist.track == 'TVL'"
                              value="Home Economics Strand"
                              id="Home"
                            >Home Economics Strand</option>
                            <option
                              v-if="enlist.track == 'TVL'"
                              value="Industrial Arts Strand"
                              id="Industrial"
                            >Industrial Arts Strand</option>
                            <option
                              v-if="enlist.track == 'TVL'"
                              value="ICT Strand"
                              id="ICT"
                            >ICT Strand</option>
                          </select>
                        </div>
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
                  value="1"
                  name="isIndigenous"
                  v-model="enlist.isIndigenous"
                />
              </label>
            </div>
            <div v-if="enlist.isIndigenous == 1" class="form-group">
              <div>
                <label>If yes, please indicate the name of your community.</label>
                <input
                  name="indigenousCommunity"
                  v-model="enlist.indigenousCommunity"
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
                            v-model="enlist.programChoiceOne"
                            class="form-control programChoice1"
                            required
                          >
                            <option disabled selected></option>
                            <option
                              v-for="program in programs"
                              v-bind:value="program.CODE"
                            >{{program.CODE}}, {{program.DESCRIPTION}}</option>
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
                          v-model="enlist.programChoiceTwo"
                          class="form-control programChoice2"
                        >
                          <option disabled selected></option>
                          <option
                            v-for="program in programs"
                            v-bind:value="program.CODE"
                          >{{program.CODE}}, {{program.DESCRIPTION}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="form-select-list">
                        <label>Choice 3</label>
                        <select
                          id="choice"
                          name="programChoiceThree"
                          v-model="enlist.programChoiceThree"
                          class="form-control programChoice3"
                        >
                          <option disabled selected></option>
                          <option
                            v-for="program in programs"
                            v-bind:value="program.CODE"
                          >{{program.CODE}}, {{program.DESCRIPTION}}</option>
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
                            v-model="enlist.currTherapyRehabCounseling"
                            id="yesCheckCounseling"
                          />Yes
                        </label>
                        <label class="radio-inline">
                          <input
                            class="pull-left"
                            type="radio"
                            value="0"
                            name="currTherapyRehabCounseling"
                            v-model="enlist.currTherapyRehabCounseling"
                            id="noCheckCounseling"
                          />No
                        </label>
                      </div>
                      <div v-if="enlist.currTherapyRehabCounseling == 1" class="form-select-list">
                        <label>If yes, with whom:</label>
                        <input
                          id="currTherapyRehabCounselingName"
                          name="currTherapyRehabCounselingName"
                          v-model="enlist.currTherapyRehabCounselingName"
                          type="text"
                          class="form-control basic-ele-mg-t-10"
                          placeholder
                        />
                      </div>
                      <div v-if="enlist.currTherapyRehabCounseling == 1" class="form-select-list">
                        <label>Contact Information</label>
                        <input
                          name="currTherapyRehabCounselingContact"
                          v-model="enlist.currTherapyRehabCounselingContact"
                          id="currTherapyRehabCounselingContact"
                          type="tel"
                          class="form-control"
                          placeholder="Mobile no."
                          data-mask="+63 999-999-9999"
                        />
                      </div>
                      <div v-if="enlist.currTherapyRehabCounseling == 1" class="form-select-list">
                        <label>Briefly describe your reason for seeking help:</label>
                        <textarea
                          class="form-control"
                          id="reasonToSeekHelp"
                          name="reasonToSeekHelp"
                          v-model="enlist.reasonToSeekHelp"
                        ></textarea>
                        <br />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="tab-pane fade"
            id="v-pills-review"
            role="tabpanel"
            aria-labelledby="v-pills-review-tab"
          >
            <ul class="list-group list-group-horizontal">
              <li class="list-group-item">Firstname</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div
      id="PrimaryModalalert"
      class="modal modal-edu-general default-popup-PrimaryModal fade"
      role="dialog"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-close-area modal-close-df">
            <a class="close" data-dismiss="modal" href="#">
              <i class="fa fa-close"></i>
            </a>
          </div>
          <div class="modal-body">
            <span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>
            <h2>Please Review your Enlistment Information.</h2>
            <p>This form will not be submitted unless all required fields are filled up. The pre-enrollee assures that all data filled-up in this form is accurate. A feedback will be given along with confirmation message will also be sent to the e-mail that you have provided once the pre-registration is successful.</p>
          </div>
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-custon-rounded-four btn-primary">Cancel</button>
            <button
              @click="create_enlistment"
              :disabled="submitted"
              class="btn btn-custon-rounded-four btn-primary"
            >Confirm Enlistment</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      enlist: {
        applicantID: "",
        surname: "",
        suffix: "",
        firstname: "",
        middlename: "",
        birthDate: "",
        birthPlace: "",
        gender: "",
        civilStatus: "",
        citizenship: "",
        religion: "",
        permanentAddress: "",
        permanentProvince: "",
        permanentCity: "",
        permanentzippostalcode: "",
        permanentCountry: "",
        sameAsPermanent: "",
        boarding: "",
        withRelative: "",
        cityAddress: "",
        cityProvince: "",
        cityCity: "",
        cityzippostalcode: "",
        cityCountry: "",
        email: "",
        mobileNum: "",
        personToContact: "",
        personToContactRelationship: "",
        personToContactTelNo: "",
        personToContactMobileNo: "",
        bloodGroup: "",
        rh: "",
        physicianName: "",
        physicianContactInformation: "",
        takingMedication: "",
        medicationInfo: "",
        specialNeeds: "",
        typeOfSpecialNeeds: "",
        othersSpecialNeeds: "",
        positionFamily: "",
        numBrothers: "",
        numSisters: "",
        fatherName: "",
        fatherLiving: "",
        fatherOccupation: "",
        fatherAddress: "",
        fatherContactNum: "",
        motherName: "",
        motherLiving: "",
        motherOccupation: "",
        motherAddress: "",
        motherContactNum: "",
        parentsMaritalStatus: "",
        nameOfSpouse: "",
        annualFamilyIncome: "",
        preSchoolName: "",
        preSchoolAddress: "",
        preSchoolGraduated: "",
        gradeSchoolName: "",
        gradeSchoolAddress: "",
        gradeSchoolGraduated: "",
        highSchoolName: "",
        highSchoolAddress: "",
        highSchoolGraduated: "",
        nameSHS: "",
        addressSHS: "",
        principalSHS: "",
        track: "",
        strand: "",
        isIndigenous: "",
        indigenousCommunity: "",
        nameCollegeUniv: "",
        addressCollegeUniv: "",
        programChoiceOne: "",
        programChoiceTwo: "",
        programChoiceThree: "",
        currTherapyRehabCounseling: "",
        currTherapyRehabCounselingName: "",
        currTherapyRehabCounselingContact: "",
        reasonToSeekHelp: "",
        status: "",
        isCollege: "",
        isSHS: "",
        isIndigenous: "",
        takingMedication: "",
        specialNeeds: ""
      },

      submitted: false,

      cities: [],
      countries: [],
      nationalities: [],
      provinces: [],
      religions: [],
      schools: [],
      programs: [],

      url_cities: "http://127.0.0.1:8000/citieslist",
      url_countries: "http://127.0.0.1:8000/countrieslist",
      url_nationalities: "http://127.0.0.1:8000/nationalitylist",
      url_provinces: "http://127.0.0.1:8000/provinceslist",
      url_religions: "http://127.0.0.1:8000/religionlist",
      url_schools: "http://127.0.0.1:8000/schoolslist",
      url_programs: "http://127.0.0.1:8000/programslist"
    };
  },

  methods: {
    makeToast() {
      $("#PrimaryModalalert").modal("hide");
      toastr.success("hahaha");
    },

    submitModal() {
      $("#PrimaryModalalert").modal("show");
    },

    load_cities() {
      axios.get(this.url_cities).then(response => {
        this.cities = response.data.cities;
      });
    },
    load_countries() {
      axios.get(this.url_countries).then(response => {
        this.countries = response.data.countries;
      });
    },
    load_nationalities() {
      axios.get(this.url_nationalities).then(response => {
        this.nationalities = response.data.nationalities;
      });
    },
    load_provinces() {
      axios.get(this.url_provinces).then(response => {
        this.provinces = response.data.provinces;
      });
    },
    load_religions() {
      axios.get(this.url_religions).then(response => {
        this.religions = response.data.religions;
      });
    },
    load_schools() {
      axios.get(this.url_schools).then(response => {
        this.schools = response.data.schools;
      });
    },
    load_programs() {
      axios.get(this.url_programs).then(response => {
        this.programs = response.data.programs;
      });
    },

    create_enlistment() {
      this.submitted = true;
  
      axios
        .post("http://127.0.0.1:8000/student_enlistment", {
          surname: this.enlist.surname,
          suffix: this.enlist.suffix,
          firstname: this.enlist.firstname,
          middlename: this.enlist.middlename,
          birthDate: this.enlist.birthDate,
          /*birthPlace: this.enlist.birthPlace,
          gender: this.enlist.gender,
          civilStatus: this.enlist.civilStatus,
          citizenship: this.enlist.citizenship,
          religion: this.enlist.religion,
          permanentAddress: this.enlist.permanentAddress,
          permanentProvince: this.enlist.permanentProvince,
          permanentCity: this.enlist.permanentCity,
          permanentzippostalcode: this.enlist.permanentzippostalcode,
          permanentCountry: this.enlist.permanentCountry,
          sameAsPermanent: this.enlist.sameAsPermanent,
          boarding: this.enlist.boarding,
          withRelative: this.enlist.withRelative,
          cityAddress: this.enlist.cityAddress,
          cityProvince: this.enlist.cityProvince,
          cityCity: this.enlist.cityCity,
          cityzippostalcode: this.enlist.cityzippostalcode,
          cityCountry: this.enlist.cityCountry,
          email: this.enlist.email,
          mobileNum: this.enlist.mobileNum,
          mobileNum: this.enlist.mobileNum,
          personToContactRelationship: this.enlist.personToContactRelationship,
          personToContactTelNo: this.enlist.personToContactTelNo,
          personToContactMobileNo: this.enlist.personToContactMobileNo,
          bloodGroup: this.enlist.bloodGroup,
          rh: this.enlist.rh,
          physicianName: this.enlist.physicianName,
          physicianContactInformation: this.enlist.physicianContactInformation,
          takingMedication: this.enlist.takingMedication,
          medicationInfo: this.enlist.medicationInfo,
          specialNeeds: this.enlist.specialNeeds,
          typeOfSpecialNeeds: this.enlist.typeOfSpecialNeeds,
          othersSpecialNeeds: this.enlist.othersSpecialNeeds,
          positionFamily: this.enlist.positionFamily,
          numBrothers: this.enlist.numBrothers,
          numSisters: this.enlist.numSisters,
          fatherName: this.enlist.fatherName,
          fatherLiving: this.enlist.fatherLiving,
          fatherOccupation: this.enlist.fatherOccupation,
          fatherAddress: this.enlist.fatherAddress,
          fatherContactNum: this.enlist.fatherContactNum,
          motherName: this.enlist.motherName,
          motherLiving: this.enlist.motherLiving,
          motherOccupation: this.enlist.motherOccupation,
          motherAddress: this.enlist.motherAddress,
          motherContactNum: this.enlist.motherContactNum,
          parentsMaritalStatus: this.enlist.parentsMaritalStatus,
          nameOfSpouse: this.enlist.nameOfSpouse,
          annualFamilyIncome: this.enlist.annualFamilyIncome,
          preSchoolName: this.enlist.preSchoolName,
          preSchoolAddress: this.enlist.preSchoolAddress,
          preSchoolGraduated: this.enlist.preSchoolGraduated,
          gradeSchoolName: this.enlist.gradeSchoolName,
          gradeSchoolAddress: this.enlist.gradeSchoolAddress,
          gradeSchoolGraduated: this.enlist.gradeSchoolGraduated,
          highSchoolName: this.enlist.highSchoolName,
          highSchoolAddress: this.enlist.highSchoolAddress,
          highSchoolGraduated: this.enlist.highSchoolGraduated,
          nameSHS: this.enlist.nameSHS,
          addressSHS: this.enlist.addressSHS,
          principalSHS: this.enlist.principalSHS,
          track: this.enlist.track,
          strand: this.enlist.strand,
          isIndigenous: this.enlist.isIndigenous,
          indigenousCommunity: this.enlist.indigenousCommunity,
          nameCollegeUniv: this.enlist.nameCollegeUniv,
          addressCollegeUniv: this.enlist.addressCollegeUniv,
          programChoiceOne: this.enlist.programChoiceOne,
          programChoiceTwo: this.enlist.programChoiceTwo,
          programChoiceThree: this.enlist.programChoiceThree,
          currTherapyRehabCounseling: this.enlist.currTherapyRehabCounseling,
          currTherapyRehabCounselingName: this.enlist
            .currTherapyRehabCounselingName,
          currTherapyRehabCounselingContact: this.enlist
            .currTherapyRehabCounselingContact,
          reasonToSeekHelp: this.enlist.reasonToSeekHelp,
          status: this.enlist.status,
          isCollege: this.enlist.isCollege,
          isSHS: this.enlist.isSHS,
          isIndigenous: this.enlist.isIndigenous,
          takingMedication: this.enlist.takingMedication,
          specialNeeds: this.enlist.specialNeeds*/
        })
        .then(response => {
          this.resetData();
          this.submitted = false;
          $("#PrimaryModalalert").modal("hide");
          this.makeToast;
        });
    }
  },

  computed: {},

  watch: {
    highSchoolAddress: {
      handler: function(val) {
        console.log("changed!", val);
      },
      deep: true
    }
  },

  mounted() {
    this.load_cities();
    this.load_countries();
    this.load_nationalities();
    this.load_provinces();
    this.load_religions();
    this.load_schools();
    this.load_programs();
  }
};
</script>

<style>
.active {
  opacity: 1;
  visibility: visible;
}
</style>