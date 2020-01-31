<template>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <a :class="personalinfo" id="v-pills-personalinfo-tab" data-toggle="pill" href="#v-pills-personalinfo" role="tab" aria-controls="v-pills-personalinfo" aria-selected="true">Basic Personal Information</a>

                    <a class="nav-link" id="v-pills-addressAndContact-tab" data-toggle="pill" href="#v-pills-addressAndContact" role="tab" aria-controls="v-pills-addressAndContact" aria-selected="false">Address and Contact Information</a>

                    <a class="nav-link" id="v-pills-contactinfo-tab" data-toggle="pill" href="#v-pills-contactinfo" role="tab" aria-controls="v-pills-contactinfo" aria-selected="false">Health / Medical profile</a>
                    
                    <a class="nav-link" id="v-pills-contactinfo-tab" data-toggle="pill" href="#v-pills-contactinfo" role="tab" aria-controls="v-pills-contactinfo" aria-selected="false">Family Information</a>
                    
                    <a class="nav-link" id="v-pills-contactinfo-tab" data-toggle="pill" href="#v-pills-contactinfo" role="tab" aria-controls="v-pills-contactinfo" aria-selected="false">Educational Background</a>
                    
                    <a class="nav-link" id="v-pills-contactinfo-tab" data-toggle="pill" href="#v-pills-contactinfo" role="tab" aria-controls="v-pills-contactinfo" aria-selected="false">Psychological Profile</a>
                    
                    <a class="nav-link" id="v-pills-contactinfo-tab" data-toggle="pill" href="#v-pills-contactinfo" role="tab" aria-controls="v-pills-contactinfo" aria-selected="false">Pre-Interview Questions</a>
                </div>
            </div>
            <div class="col-xs-9 col-9">
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-personalinfo" role="tabpanel" aria-labelledby="v-pills-personalinfo-tab">
                        
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4 class="form-header text-primary">Name as it appears on the Birth Certificate</h4>
                                <div class="form-group">
                                    <div class = "row">
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
                                    <div class = "row">
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
                                    <div class = "row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class = "form-group">
                                                    <label>Birthdate</label>
                                                        <input name="birthDate" id="datepicker" type="date" class="form-control" placeholder="Date of Birth" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class = "form-group">
                                                        <label>Birthplace</label>
                                                        <input name="birthPlace" type="text" class="form-control" placeholder="Birthplace" required>
                                                    </div>
                                                </div>
                                                    
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class = "form-group">
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
                                    <div class = "row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class = "form-group">
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
                                                    <div class = "form-group">
                                                        <label>Citizenship</label>
                                                        <div class="chosen-select-single mg-b-20">
                                                            <select data-placeholder="Choose a Citizenship..." id="citizenship" name="citizenship" class="form-control" tabindex="-1" required>
                                                                <option value="" selected></option>
                                                                <option value="" selected="" ></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class = "form-group">
                                                        <label>Religion</label>
                                                        <select id = "religion" name="religion" class="form-control" required>
                                                            <option value="none" selected="" disabled=""></option>
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

                    <div class="tab-pane fade" id="v-pills-addressAndContact" role="tabpanel" aria-labelledby="v-pills-addressAndContact-tab">...
                        
                    </div>

                    <div class="tab-pane fade" id="v-pills-contactinfo" role="tabpanel" aria-labelledby="v-pills-contactinfo-tab">...

                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {

        data(){
            
            return {

                personalinfo : 'nav-link active'
            }
        }
        
    };
</script>

<style scoped>

</style>