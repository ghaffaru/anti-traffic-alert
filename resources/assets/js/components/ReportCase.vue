<template>
          <section id="report-abuse">
          <h2 class="font-weight-bold text-center">Report Abuse</h2>
          <p class="text-center upload">upload successfully</p>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <form class="p-3 grey-text">
                <div class="md-form form-sm">
                  <i class="fas fa-user orange-text prefix"></i>
                  <input
                    type="text"
                    id="form3"
                    class="form-control form-control-sm"
                  />
                  <label for="form3">Name (optional)</label>
                </div>
                <div class="md-form form-sm">
                  <i class="fas fa-envelope orange-text prefix"></i>
                  <input
                    type="text"
                    id="form2"
                    class="form-control form-control-sm"
                  />
                  <label for="form2">Email (optional)</label>
                </div>
                <div class="md-form form-sm">
                  <i class="fas fa-phone orange-text prefix"></i>
                  <input
                    type="number"
                    id="form32"
                    class="form-control form-control-sm"
                  />
                  <label for="form34">Phone Number (optional)</label>
                </div>
                <div class="md-form form-sm">
                  <i class="fas fa-location-arrow orange-text prefix"></i>
                  <input
                    type="text"
                    id="form32"
                    class="form-control form-control-sm"
                  />
                  <label for="form34">Location (optional)</label>
                </div>
                <div class="md-form form-sm">
                  <i class="fas fa-pencil-alt orange-text prefix"></i>
                  <textarea
                    type="text"
                    id="form8"
                    class="md-textarea form-control form-control-sm"
                    rows="4"
                  ></textarea>
                  <label for="form8">Description</label>
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"
                      >Upload image/video</span
                    >
                  </div>
                  <div class="custom-file">
                    <input
                      type="file"
                      class="custom-file-input"
                      id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01"
                    />
                    <label class="custom-file-label" for="inputGroupFile01"
                      >Choose file</label
                    >
                  </div>
                </div>

                <div class="text-center mt-4">
                  <button class="btn btn-primary submitBtn">
                    Send <i class="far fa-paper-planeml-1"></i>
                  </button>
                </div>
              </form>
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