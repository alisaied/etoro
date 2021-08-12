<template>

     <!-- <div id="container" class="container-fluid fixed-bottom bg-info">   -->
      <div class="container-fluid bg-info ">
     <div >
              <div id="contacts--contact"> 
                <p >{{ mail }}</p>
                <p >{{ phone }}</p>
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
      mail : 'ali.saied83@gmail.com',
      phone : '00963947982876',
      mention : '2021 | Salamieh, Syria'
    }
  }
    }
</script>
