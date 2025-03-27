<?php
$currentPage = 'create-account';
?>

<!doctype html>
<html lang="en">
  
  <!-- Header include -->
  <?php $pageTitle = 'Super | Create Account'; ?>
  <?php include('../../includes/header.php'); ?>
  
  <body class="layout-fixed sidebar-expand-lg sidebar-mini sidebar-collapse bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      
      <!-- Navbar include -->
      <?php include('../../includes/navbar.php'); ?>

      <!-- Sidebar include -->
      <?php include('../../includes/sidebar.php'); ?>

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Create Account</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Account</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
              
              <!-- <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-6">
                  <div class="alert alert-success d-flex align-items-center" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <div>
                      An example success alert with an icon
                    </div>
                  </div>
                </div>
              </div> -->

              <div class="col-md-12 d-flex justify-content-center">
                <div class="col-md-6">
                  <div class="card card-primary card-outline mb-4">

                    <div class="card-header">
                        <div class="card-title">
                            Quick Example
                        </div>
                    </div>

                    <form>
                      <div class="card-body">
                          <!-- Email Field -->
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                          </div>

                          <!-- Password Field -->
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" />
                          </div>

                          <!-- File Upload -->
                          <div class="input-group mb-3">
                              <input type="file" class="form-control" id="inputGroupFile02" />
                              <label class="input-group-text" for="inputGroupFile02">Browse</label>
                          </div>

                      </div>

                      <!-- Submit Button -->
                      <div class="card-footer text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>

            </div>
            <!-- /.row -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

      <!-- Footer include -->
      <?php include('../../includes/footer.php'); ?>

    </div>
    <!--end::App Wrapper-->

    <!-- scripts include -->
    <?php include('../../includes/script.php'); ?>

  </body>
  <!--end::Body-->
</html>
