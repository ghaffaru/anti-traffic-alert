<template>
  <footer class="page-footer font-small pt-4">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a
                class="btn-floating btn-fb mx-1 privacy"
                href="https://abeyiestudios.com/privacy-statement/"
              >privacy statement</a>
            </li>
            <li class="list-inline-item">
              <a
                class="btn-floating btn-fb mx-1 privacy"
                href="https://abeyiestudios.com/terms-and-conditions/"
              >terms &amp; conditions</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-7 text-center text-md-right">
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3">
      © 2020 Copyright:
      <a href>antiTraffikAlert.com</a>
      
    </div>
  </footer>
</template>
<script>
export default {
  name: "Footer"
};
</script>
<style>
.page-footer {
  background-color: #24355c;
}
.privacy:hover {
  text-decoration: underline;
}
</style>