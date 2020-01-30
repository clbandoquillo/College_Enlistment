<template>
  <div class="col-sm-12 my-auto">
    <center>
      <h1 class="cover-heading">Enlistment System</h1>
      <p class="lead col-md-4">This serves as a system for the enlistment of incoming freshmen college students for the 1st Semester of A.Y. {{ schoolyear}} - {{ schoolyear + 1}}</p>
      <router-link :to="{ name: 'enlist' }">
        <button 
          type="button" 
          class="btn btn-primary btn-lg">
            Enlist Here
        </button>
      </router-link>
    </center>
  </div>

</template>

<script>

  export default{
    data() {
      return{
        schoolyear : new Date().getFullYear()
      }
    }
  };
</script>