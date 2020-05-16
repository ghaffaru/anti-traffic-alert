<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Anti Traffik Alert</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }} />
    <link rel="stylesheet" href={{ asset("css/mdb.min.css") }} />
    <link rel="stylesheet" href={{ asset("css/style.css") }} />
  </head>
  <body>
    <header>
      <nav
        class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar"
      >
        <div class="container">
          <a class="navbar-brand" href="#">
            <img
              src="./img/logo.png"
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
    <main class="mt-5">
      <div class="container">
        <section id="report-abuse">
          <h2 class="font-weight-bold text-center">Report Abuse</h2>
          <p class="text-center upload">upload successfully</p>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <form class="p-3 grey-text" action="/" method="POST" enctype="multipart/form-data">
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

        <hr class="my-5" />

        <section id="education" class="text-center">
          <h2 class="mb-3 font-weight-bold text-center">Education</h2>
          <div class="row row d-flex justify-content-center mb-4">
            <div class="col-md-8">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi
                voluptate hic provident nulla repellat facere esse molestiae
                ipsa labore porro minima quam quaerat rem, natus repudiandae
                debitis est sit pariatur.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-1">
              <i class="fas fa-camera-retro fa-4x orange-text"></i>
              <h4 class="my-4">Background</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Reprehenderit maiores nam, aperiam minima assumenda deleniti
                hic.
              </p>
            </div>
            <div class="col-md-6 mb-1">
              <i class="fas fa-camera-retro fa-4x orange-text"></i>
              <h4 class="my-4">Background</h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Reprehenderit maiores nam, aperiam minima assumenda deleniti
                hic.
              </p>
            </div>
          </div>
        </section>
        <hr class="my-5" />

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
      </div>
    </main>

    <footer class="page-footer font-small pt-4">
      <div class="container">
        <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
              <i class="fab fa-facebook-f"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="fab fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
              <i class="fab fa-google-plus-g"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
              <i class="fab fa-dribbble"> </i>
            </a>
          </li>
        </ul>
      </div>
      <div class="footer-copyright text-center py-3">
        © 2020 Copyright:
        <a href=""> antiTraffikAlert.com</a>
        >
      </div>
    </footer>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>
