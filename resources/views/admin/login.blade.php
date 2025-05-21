<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    });
    $(function() {
      $("#btnlog").click(function() {
        var username = $("#usertxt").val().trim();
        var pass = $("#passtxt").val().trim();
        let error = 0;

        if (username === "") {
          error = 1;
          $("#userError").html("Please enter a username");
        } else {
          $("#userError").html("");
        }

        if (pass === "") {
          error = 1;
          $("#passError").html("Please enter a password");
        } else {
          $("#passError").html("");
        }

        if (error === 0) {
          // Proceed with form submission
          $("form").submit();
        }
      });
    });
  </script>
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="../../images/logo.svg" alt="logo"> -->
                <div style="font-size: 40px; color: burlywood;"><i class="bi bi-car-front"></i></div>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" action="/loginSubmit">
                @csrf
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="usertxt" placeholder="Username">
                  <p id="userError" style="color: red;"></p>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="passtxt" placeholder="Password">
                  <p id="passError" style="color: red;"></p>
                  @if (Session::has('Message'))
                    <p style="color: red;">{{ Session::get('Message') }}</p>
                  @endif
                </div>
                <div class="mt-3">
                  <a href="#" id="btnlog" class="btn btn-primary">Login</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="/register" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>
