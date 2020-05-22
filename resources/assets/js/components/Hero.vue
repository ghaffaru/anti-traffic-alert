<template>
  <header>
    <mdb-container>
      <mdb-navbar expand="large" position="top" dark href="#" transparent scrolling>
        <mdb-navbar-brand href="#">
          <img src="../../img/logo.png" width="45px" height="45px" alt />
        </mdb-navbar-brand>
        <mdb-navbar-toggler>
          <mdb-navbar-nav>
            <mdb-nav-item href waves-fixed active>Home</mdb-nav-item>
            <mdb-nav-item href="#report-abuse" waves-fixed>Report Case</mdb-nav-item>
            <mdb-nav-item href="#education" waves-fixed>Education</mdb-nav-item>
            <mdb-nav-item href="#contacts" waves-fixed>Contact</mdb-nav-item>
          </mdb-navbar-nav>
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </mdb-navbar-toggler>
      </mdb-navbar>
    </mdb-container>
    <mdb-view>
      <mdb-mask class="d-flex justify-content-center align-items-center" overlay="black-strong">
        <mdb-container
          class="container-fluid d-flex align-items-center justify-content-center h-100"
        >
          <mdb-row class="d-flex justify-content-center text-center">
            <div class="col-md-10">
              <h2 class="display-3 font-weight-bold white-text pt-5 mb-2">Anti Traffik Alert</h2>
              <hr class="hr-light" />
              <h4 class="white-text my-4">Together We can Save Lives</h4>
              <a type="button" href="#report-abuse" class="btn">
                REPORT ABUSE
                <i class="fas fa-book ml-2"></i>
              </a>
            </div>
          </mdb-row>
        </mdb-container>
      </mdb-mask>
    </mdb-view>
  </header>
</template>

<script>
import {
  mdbNavbar,
  mdbNavbarBrand,
  mdbNavbarToggler,
  mdbNavbarNav,
  mdbNavItem,
  mdbView,
  mdbMask,
  mdbContainer,
  mdbRow
} from "mdbvue";
export default {
  name: "Hero",
  components: {
    mdbNavbar,
    mdbNavbarBrand,
    mdbNavbarToggler,
    mdbNavbarNav,
    mdbNavItem,
    mdbView,
    mdbMask,
    mdbContainer,
    mdbRow
  }
};
</script>

<style>
.navbar {
  transition: 1s;
}
.top-nav-collapse {
  background-color: #24355c !important;
}
@media (max-width: 990px) {
  .navbar {
    background-color: #24355c !important;
  }
}
.view {
  background-image: url("../../img/hero.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  height: 100vh;
}
</style>