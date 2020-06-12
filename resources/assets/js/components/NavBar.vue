<template>
        <nav
        class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar"
      >
        <div class="container">
          <a class="navbar-brand" href="#">
            <img
              src="../../public/img/logo.png"
              alt="Anti Traffik Alert"
              width="50"
              height="50"
          /></a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#basicExampleNav"
            aria-controls="basicExampleNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav mr-auto smooth-scroll">
              <li class="nav-item">
                <a class="nav-link" href="#intro"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#report-abuse">Report Case</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#education">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item">
                <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


</template>

<script>
    export default {
        name: 'NavBar',
        data() {
            return {
                message: 'Hello world'
            }
        }
    }
</script>
<style>

</style>