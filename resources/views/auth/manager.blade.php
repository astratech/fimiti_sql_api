@extends("layouts/auth")

<!-- ========== MAIN CONTENT ========== -->
      <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero" style="height: 32rem; background-image: url(assets/svg/components/abstract-bg-4.svg);">
          <!-- SVG Bottom Shape -->
          <figure class="position-absolute right-0 bottom-0 left-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
              <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
            </svg>
          </figure>
          <!-- End SVG Bottom Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
          <a class="d-flex justify-content-center mb-5" href="index.html">
            <img class="z-index-2" src="assets/svg/logos/logo.svg" alt="Image Description" style="width: 8rem;">
          </a>

          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
              <!-- Card -->
              <div class="card card-lg mb-5">
                <div class="card-body">
                  <!-- Form -->
                  <form class="js-validate" action="" method="POST">
                  	{{csrf_field()}}
                    <div class="text-center">
                      <div class="mb-5">
                        <h1 class="display-4">Manager Sign in</h1>
                        
                      </div>

                    </div>

                    <div class="form-group">
						@include("layouts.flash")
					</div>

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label class="input-label" for="signinSrEmail">Your email</label>
                      <input type="email" class="form-control form-control-lg" name="email" tabindex="1" required data-msg="Please enter a valid email address.">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                      <label class="input-label" for="signupSrPassword" tabindex="0">
                        <span class="d-flex justify-content-between align-items-center">
                          Password
                          <a class="input-label-secondary" href="#">Forgot Password?</a>
                        </span>
                      </label>

                      <div class="input-group input-group-merge">
                        <input type="password" class="js-toggle-password form-control form-control-lg" name="password" required
                               >
                        
                      </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Checkbox -->
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                        <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                      </div>
                    </div>
                    <!-- End Checkbox -->

                    <button type="submit" name="login" class="btn btn-lg btn-block btn-primary">Sign in</button>
                  </form>
                  <!-- End Form -->
                </div>
              </div>
              <!-- End Card -->

              <!-- Footer -->
              
              <!-- End Footer -->
            </div>
          </div>
        </div>
        <!-- End Content -->
      </main>
      <!-- ========== END MAIN CONTENT ========== -->