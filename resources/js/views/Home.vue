<template>
  <div class="row mt-3 px-1">
    <div class="col-lg-3 mb-3">
      <div class="card">
        <div class="card-header bg-primary text-light">
          <h3>Enlistment System</h3>
        </div>
        <div class="card-body">
          <h5>This serves as a system for the enlistment of incoming freshmen college students for the 1st Semester of A.Y. {{ schoolyear}} - {{ schoolyear + 1}}</h5>
          <div class="alert alert-danger" role="alert">
            <h3>Please ensure that all entered information is correct.</h3>
          </div>
          <center>
            <router-link :to="{ name: 'enlist' }">
              <button type="button" class="btn btn-primary btn-lg btn-block">Enlist Here</button>
            </router-link>
          </center>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-header bg-primary text-white">Privacy Notice</div>
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Welcome to the Ateneo de Davao University!</h5>
          <p
            class="card-text"
          >Your personal information as a student, or employee, may be processed manually or by automated means, upon your request or consent, or upon the lawful order of any competent authority, or by virtue of the mandate of the University, as an employer, and as an educational institution. Their disclosure and sharing shall only be upon your consent, or as required by law, with relevant private or public persons, offices, or entities.</p>
          <p
            class="card-text"
          >For the students, the privacy of academic and other relevant personal information, which forms part of their permanent records, is protected by the University from the moment of admission. Incumbent students may access their information via the secured portals dedicated for this particular purpose.</p>
          <p
            class="card-text"
          >On the other hand, the personal information of the employees, such as their employment records and credentials, may be kept by the University HRMDO from the moment of their submission, and during their engagement with the University, unless otherwise required by law.</p>
          <p
            class="card-text"
          >The University may likewise collect and process personal information of third parties who may enter its campuses and facilities, such as video recordings, and other basic information for records purposes and security.</p>
          <p
            class="card-text"
          >As our data subject, you may avail of the guarantees provided by Section 16 of RA 10173, or the Data Privacy Act, which includes the rights to be informed, to object, access, rectify, erasure or blocking, data portability, file a complaint, and to the payment of damages.</p>
        </div>
        <div class="card-footer">
          <p class="card-text">For more information, please visit:</p>
          <p>
            <strong>THE UNIVERSITY DATA PROTECTION OFFICER</strong>
            <br />Ateneo de Davao University
            <br />Lower ground floor, Finster Building,
            <br />Jacinto Street, Davao City
            <br />(082) 221-2411, Local 8514
            <br />dataprotection@addu.edu.ph
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      schoolyear: new Date().getFullYear()
    };
  }
};
</script>