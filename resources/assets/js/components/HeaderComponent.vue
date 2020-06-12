<template>
  <header>
      <NavBar />
      
      <div id="intro" class="view">
        <div class="mask rgba-black-strong">
          <div
            class="container-fluid d-flex align-items-center justify-content-center h-100"
          >
            <div class="row d-flex justify-content-center text-center">
              <div class="col-md-10">
                <h2 class="display-2 font-weight-bold white-text pt-5 mb-2">
                  Anti Traffik Alert
                </h2>

                <hr class="hr-light" />

                <h4 class="white-text my-4">
                  Together We can Save Lives
                </h4>
                <a
                  type="button"
                  href="#report-abuse"
                  class="btn btn-outline-white"
                >
                  REPORT ABUSE<i class="fas fa-book ml-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </header>
</template>

<script>
import  NavBar  from "./NavBar";
export default {
   components: {
       NavBar
   }
}
</script>

<style scoped>
  #intro {
  background: url("../../public/img/hero.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>