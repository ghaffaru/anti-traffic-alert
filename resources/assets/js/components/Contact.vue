<template>
  <section id="contact" class="py-5" style="background-color: #eee;">
    <div class="container">
      <h2 class="h1-responsive font-weight-bold text-center mb-5">Contact us</h2>
      <p
      class="text-center w-responsive mx-auto mb-5"
    >If you need further information or feedback you can conctact us or fill the form below</p>
      <div class="row">
        <div class="col-md-9 mb-md-0 mb-5">
          <div
            class="alert alert-primary"
            role="alert"
            v-if="submittedSuccessMessage"
          >{{ submittedSuccessMessage }}</div>
          <div
            class="alert alert-danger"
            role="alert"
            v-else-if="submittedErrorMessage"
          >{{ submittedErrorMessage }}</div>
          <form @submit.prevent="submit">
            <div class="row">
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input
                    v-model="name"
                    @keyup="validateName"
                    type="text"
                    id="contact-name"
                    class="form-control"
                  />
                  <label for="contact-name" class>Your name</label>

                  <span style="color:red" v-if="nameError">{{ nameError }}</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input
                    v-model="email"
                    @keyup="validateEmail"
                    type="text"
                    id="contact-email"
                    class="form-control"
                  />
                  <label for="contact-email" class>Your email</label>
                  <span style="color:red" v-if="emailError">{{ emailError }}</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input
                    v-model="subject"
                    @keyup="validateSubject"
                    type="text"
                    id="contact-Subject"
                    class="form-control"
                  />
                  <label for="contact-Subject" class>Subject</label>
                  <span style="color:red" v-if="subjectError">{{ subjectError }}</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <textarea
                    v-model="message"
                    @keyup="validateMessage"
                    type="text"
                    id="contact-message"
                    class="form-control md-textarea"
                    rows="3"
                  ></textarea>
                  <label for="contact-message">Your message</label>
                  <span style="color:red" v-if="messageError">{{ messageError }}</span>
                </div>
              </div>
            </div>
            <div class="text-center text-md-left">
              <input type="submit" class="btn btn-primary btn-md" value="Send" v-if="!submitted" />
              <button class="btn btn-primary" type="submit" disabled v-else>
                <span  class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </div>
          </form>
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
import axios from "axios";

export default {
  data() {
    return {
      name: "",
      email: "",
      subject: "",
      message: "",

      nameError: "",
      emailError: "",
      subjectError: "",
      messageError: "",

      submitted : false,
      submittedSuccessMessage: "",
      submittedErrorMessage: ""
    };
  },
  methods: {
    validateName() {
      if (this.name == "") {
        this.nameError = "The name field is required";
      } else {
        this.nameError = "";
      }
    },

    validateEmail() {
      if (this.email == "") {
        this.emailError = "The email field is required";
      } else {
        this.emailError = "";
      }
    },

    validateSubject() {
      if (this.subject == "") {
        this.subjectError = "The subject field is required";
      } else {
        this.subjectError = "";
      }
    },

    validateMessage() {
      if (this.message == "") {
        this.messageError = "The message field is required";
      } else {
        this.messageError = "";
      }
    },

    submit() {
      this.validateName();
      this.validateEmail();
      this.validateSubject();
      this.validateMessage();
      if (
        this.nameError == "" &&
        this.emailError == "" &&
        this.messageError == "" &&
        this.subjectError == ""
      ) {
        this.submitted = true;
        let data = {
          name: this.name,
          email: this.email,
          subject: this.subject,
          message: this.message
        };
  
        axios
          .post("/api/contact", data)
          .then(res => {
            this.submitted = false;
            this.submittedSuccessMessage =
              "Thank you. Your message has been sent";

            this.name = this.email = this.subject = this.message = ''
          })
          .catch(err => {
            this.submitted = false;
            this.submittedErrorMessage = "Error. Please try again";
          });
      }
    }
  }
};
</script>

<style>
</style>