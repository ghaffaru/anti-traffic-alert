<template>
          <section id="contact" class="py-5" style="background-color: #eee;">
          <div class="container">
            <h2 class="h1-responsive font-weight-bold text-center mb-5">
              Contact us
            </h2>
            <p class="text-center w-responsive mx-auto mb-5">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit,
              error amet numquam iure provident voluptate esse quasi, veritatis
              totam voluptas nostrum quisquam eum porro a pariatur veniam.
            </p>
            <div class="row">
              <div class="col-md-9 mb-md-0 mb-5">
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input
                          type="text"
                          id="contact-name"
                          class="form-control"
                        />
                        <label for="contact-name" class="">Your name</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input
                          type="text"
                          id="contact-email"
                          class="form-control"
                        />
                        <label for="contact-email" class="">Your email</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="md-form mb-0">
                        <input
                          type="text"
                          id="contact-Subject"
                          class="form-control"
                        />
                        <label for="contact-Subject" class="">Subject</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="md-form">
                        <textarea
                          type="text"
                          id="contact-message"
                          class="form-control md-textarea"
                          rows="3"
                        ></textarea>
                        <label for="contact-message">Your message</label>
                      </div>
                    </div>
                  </div>
                </form>

                <div class="text-center text-md-left">
                  <a class="btn btn-primary btn-md">Send</a>
                </div>
              </div>
              <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                  <li>
                    <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
                    <p>Achimota, Mile 7, Ghana</p>
                  </li>
                  <li>
                    <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
                    <p>+ 223 249809695</p>
                  </li>
                  <li>
                    <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
                    <p class="mb-0">contact@example.com</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
</template>

<script>
export default {

}
</script>

<style>

</style>