<template>
  <section id="report-abuse">
    <h2 class="font-weight-bold text-center">Report Abuse</h2>
    <p class="text-center upload" v-if="caseSubmitted">Uploaded successfully</p>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <form class="p-3 grey-text" @submit.prevent="submit" enctype="multipart/form-data">
          <div class="md-form form-sm">
            <i class="fas fa-user orange-text prefix"></i>
            <input
              v-model="name"
              type="text"
              id="form3"
              class="form-control form-control-sm"
              name="name"
            />
            <label for="form3">Name (optional)</label>
          </div>
          <div class="md-form form-sm">
            <i class="fas fa-envelope orange-text prefix"></i>
            <input
              v-model="email"
              type="text"
              id="form2"
              class="form-control form-control-sm"
              name="email"
            />
            <label for="form2">Email (optional)</label>
          </div>
          <div class="md-form form-sm">
            <i class="fas fa-phone orange-text prefix"></i>
            <input
              v-model="phone"
              type="number"
              id="form32"
              class="form-control form-control-sm"
              name="phone"
            />
            <label for="form34">Phone Number (optional)</label>
          </div>
          <div class="md-form form-sm">
            <i class="fas fa-location-arrow orange-text prefix"></i>
            <input
              v-model="location"
              type="text"
              id="form32"
              class="form-control form-control-sm"
              name="location"
            />
            <label for="form34">Location (optional)</label>
          </div>
          <div class="md-form form-sm">
            <i class="fas fa-pencil-alt orange-text prefix"></i>
            <textarea
              @keyup="validateDescription"
              v-model="description"
              type="text"
              id="form8"
              class="md-textarea form-control form-control-sm"
              rows="4"
              name="description"
            ></textarea>
            <label for="form8">Description</label>
            
            <span style="color:red" v-if="descriptionError">{{ descriptionError }}</span>
          </div>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload image/video</span>
            </div>
            <div class="custom-file">
              <input
                ref="file"
                type="file"
                name="media"
                class="custom-file-input"
                id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01"
                @change="handleFileUpload()"
              />
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            <div>
              <span style="color:red">{{ fileError }}</span>
            </div>
          </div>
          <span v-if="file">File Name: {{ file.name }}</span>

          <div class="text-center mt-4">
            <button class="btn btn-primary submitBtn">
              Send
              <i class="far fa-paper-planeml-1"></i>
            </button>
          </div>
        </form>
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
      phone: "",
      location: "",
      description: "",
      file: "",
      showFileName: false,

      descriptionError: "",
      fileError: "",
      caseSubmitted: false
    };
  },
  methods: {
    handleFileUpload() {
      this.file = this.$refs.file.files[0];
      let fileTypes = [
        "image/png",
        "image/jpg",
        "image/gif",
        "video/mp4",
        "video/webm"
      ];

      if (fileTypes.indexOf(this.file.type) == -1) {
        this.fileError = "File must be an image or video";
      } else {
        this.fileError = "";
      }
    },
    submit() {
      let fileTypes = [
        "image/png",
        "image/jpg",
        "image/gif",
        "video/mp4",
        "video/webm"
      ];

      if (this.description == "") {
        this.descriptionError = "The description field is required";
      } else if (!this.file) {
        this.fileError = "Please select an image or video";
      } else if (fileTypes.indexOf(this.file.type) == -1) {
        this.fileError = "File must be an image or video";
      } else {
        let formData = new FormData();
        formData.append("name", this.name);
        formData.append("email", this.email);
        formData.append("phone", this.phone);
        formData.append("location", this.location);
        formData.append("description", this.description);
        formData.append("media_url", this.file);

        axios
          .post("/api/report", formData)
          .then(response => {
            console.log(response.data);
            this.caseSubmitted = true
          })
          .catch(err => {
            console.log(err);
          });
      }
      
    },
    validateDescription() {
      if (this.description == "") {
        this.descriptionError = "The description field is required";
      } else {
        this.descriptionError = "";
      }
    }
  }
};
</script>

<style>
</style>