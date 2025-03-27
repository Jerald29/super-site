<!doctype html>
<html lang="en">
  
  <!-- Header include -->
  <?php $pageTitle = 'Super | Register'; ?>
  <?php include('../../includes/header.php'); ?>

  <!--begin::Body-->
  <body class="register-page bg-body-secondary">
    <div class="register-box">
      <div class="register-logo">
        <a href="#"><b>Admin</b>LTE</a>
      </div>
      <!-- /.register-logo -->

      <div class="card">
        <div class="card-body register-card-body">
          <p class="register-box-msg">Register a new membership</p>
          <form action="controllers/ctrl-register.php" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Username" name="username" required />
              <div class="input-group-text"><span class="bi bi-person"></span></div>
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email" required />
              <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="account_password" required />
              <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="terms"/>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
          <div class="social-auth-links text-center mb-3 d-grid gap-2">
            <p>- OR -</p>
            <a href="#" class="btn btn-primary">
              <i class="bi bi-facebook me-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-danger">
              <i class="bi bi-google me-2"></i> Sign in using Google+
            </a>
          </div>
          <!-- /.social-auth-links -->
          <p class="mb-0">
            <a href="./login.php" class="text-center"> I already have a membership </a>
          </p>
        </div>
        <!-- /.register-card-body -->
      </div>
      
    </div>
    <!-- /.register-box -->
    
    <!-- scripts include -->
    <?php include('../../includes/script.php'); ?>

  </body>
  <!--end::Body-->
</html>
