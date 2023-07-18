
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<?php include "./header.php";?>
<!-- End Head -->
<body class="contact-us">
    
  <header>
    <div class="page-header min-vh-85">
      <div>
        <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" src="https://forgear.lk/assets/img/curved-images/curved14.jpg" alt="image">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="text-center">
                <h3 class="text-gradient text-primary">Let's Sign Up!</h3>
                <p class="mb-0">
                  Don't let your tasks get the best of you!
                </p>
              </div>
              <form action="msg-action" id="contact-form" method="post" autocomplete="off">
                <div class="card-body pb-2">
                  <div class="row">
                    <div class="col-md-6">
                      <label>Full Name</label>
                      <div class="input-group mb-3">
                        <input class="form-control" placeholder="Full Name" aria-label="Full Name" type="text" name="cname" required>
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-3">
                      <label>Email</label>
                      <div class="input-group mb-2">
                        <input type="email" class="form-control" placeholder="hello@yourmail.com" name="email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Password</label>
                      <div class="input-group mb-3">
                        <input class="form-control" placeholder="Enter your password" aria-label="password" type="password" name="password" required>
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-3">
                      <label>Confirm Password?</label>
                      <div class="input-group mb-2">
                        <input class="form-control" placeholder="Confirm your password" name="cpassword" type="password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" name="signup" class="btn bg-gradient-primary mt-3 mb-0">SIGN UP</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="text-center">
              <p class="mb-0 text-sm">
                Already have an account?
                <a href="./index" class="text-info text-gradient font-weight-bold">Sign in</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- -------   Footer    -------- -->
  <?php include "./footer.php";?>
  <!-- -------  End Footer    -------- -->
</body>

</html>