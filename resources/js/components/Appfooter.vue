<template>
     <div id="container" class="container py-3">
       <div class="row">
        <div id="contacts">
          <div id="contacts--contact" class="alert alert-success"> 
            <p>{{ mail }}</p>
            <p>{{ phone }}</p>
          </div>

        </div>
        <div id="mentions" class="alert alert-danger">
          <p>{{ mention }}</p>
        </div>
      </div>
   </div>
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
          data(){
    return{
      mail : 'xavier.seignard+drangies@gmail.com',
      phone : '06.00.00.00.00',
      mention : '2018 | mentions légales'
    }
  }
    }
</script>
