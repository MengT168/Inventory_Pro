<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ADMIN</title>
  <!-- base:css -->
  <!-- <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css"> -->
  <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
    <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="../../images/favicon.png" /> -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li>
          <!-- <img class="img-fluid" src="/upload/User.png" alt="Alternate Text" style="height: 50px; width: 50px; "  /> -->
        </li>
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('dashboard')?'active':'' }} " href="/dashboard">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Manage</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Manage Category</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('new_category')?'active':'' }} " > <a class="nav-link" href="/admin/new_category">New Category</a></li>
              <li class="nav-item {{ request()->is('list_category')?'active':'' }} "> <a class="nav-link" href="/admin/list_category">List Category</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basi" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Manage Brand</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basi">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('new_brand')?'active':'' }} " > <a class="nav-link" href="/admin/new_brand">New Brand</a></li>
              <li class="nav-item {{ request()->is('list_brand')?'active':'' }} "> <a class="nav-link" href="/admin/list_brand">List Brand</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-bas" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Manage Model</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-bas">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('new_model')?'active':'' }} " > <a class="nav-link" href="/admin/new_model">New Model</a></li>
              <li class="nav-item {{ request()->is('list_model')?'active':'' }} "> <a class="nav-link" href="/admin/list_model">List Model</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#car" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Manage Colors</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="car">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('new_color')?'active':'' }} " > <a class="nav-link" href="/admin/new_color">New Color</a></li>
              <li class="nav-item {{ request()->is('list_color')?'active':'' }} "> <a class="nav-link" href="/admin/list_color">List Color</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-ba" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Create Car Stock</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-ba">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('new_car')?'active':'' }} " > <a class="nav-link" href="/admin/new_car">New Car</a></li>
              <li class="nav-item {{ request()->is('list_car')?'active':'' }} "> <a class="nav-link" href="/admin/list_car">List Car</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-b" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Import Car Price</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-b">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('import_car')?'active':'' }} " > <a class="nav-link" href="/admin/import_car">Import Car Price</a></li>
              <li class="nav-item {{ request()->is('list_import')?'active':'' }} "> <a class="nav-link" href="/admin/list_import">List Import</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Set Sale Price</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('set_sale_price')?'active':'' }} " > <a class="nav-link" href="/admin/set_sale_price">Set Sale</a></li>
              <li class="nav-item {{ request()->is('list_set')?'active':'' }} "> <a class="nav-link" href="/admin/list_set">List Import</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#sale" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Sale</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="sale">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('new_sale')?'active':'' }} " > <a class="nav-link" href="/admin/new_sale">New Sale</a></li>
              <li class="nav-item {{ request()->is('list_sale')?'active':'' }} "> <a class="nav-link" href="/admin/list_sale">List Sale</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#custome" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Customer</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="custome">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('new_customer')?'active':'' }} " > <a class="nav-link" href="/admin/new_customer">New Customer</a></li>
              <li class="nav-item {{ request()->is('list_customer')?'active':'' }} "> <a class="nav-link" href="/admin/list_customer">List Customer</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#income" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Income</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="income">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('list_income')?'active':'' }} "> <a class="nav-link" href="/admin/list_income">List Sale Income</a></li>
            </ul>
          </div>
        </li>


        
        <li class="nav-item sidebar-category">
          <p>Users</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">User Pages</span>
           
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item {{ request()->is('manage_users')?'active':'' }} "> <a class="nav-link" href="/admin/manage_users"> Manage Users Request </a></li>
              <li class="nav-item {{ request()->is('list_users')?'active':'' }} "> <a class="nav-link" href="/admin/list_users"> List Users</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-category">
          <p>Apps</p>
          <span></span>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">

        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
          </div>
          <h4 class="font-weight-bold mb-0 mx-4 d-none d-md-block mt-1">Welcome back</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <!-- <h4 class="mb-0 font-weight-bold d-none d-xl-block"></h4> -->
              <h4 id="current-date-time" class="mb-0 d-none d-xl-block"></h4>
            </li>
            <li class="nav-item dropdown mr-1">
              
            </li>
            <li class="nav-item dropdown mr-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="fa-solid fa-right-from-bracket"></i>
              </a>
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item" href="/logout" >
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        
      </nav>
      <script>
    function updateDateTime() {
      const now = new Date();
      const options = {
        timeZone: 'Asia/Phnom_Penh',
        year: 'numeric', 
        month: 'short', 
        day: 'numeric', 
        hour: '2-digit', 
        minute: '2-digit', 
        second: '2-digit'
      };
      const formattedDateTime = now.toLocaleDateString('en-US', options) ;
      document.getElementById('current-date-time').textContent = formattedDateTime;
    }

    setInterval(updateDateTime, 1000); // Update every second
    updateDateTime(); // Initial call to set the date and time immediately
  </script>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          @yield('Content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <!-- <script src="../../vendors/js/vendor.bundle.base.js"></script> -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- <script src="../../vendors/chart.js/Chart.min.js"></script> -->
  <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <!-- <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script> -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- <script src="../../js/dashboard.js"></script> -->
  <script src="{{ asset('js/dashboard.js') }}"></script>

  <!-- End custom js for this page-->
</body>

</html>