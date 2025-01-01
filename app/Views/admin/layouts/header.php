<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DPDP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('backend/assets/dp_fp/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/dp_fp/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/dp_fp/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/dp_fp/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/dp_fp/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/dp_fp/remixicon/remixicon.css'); ?>" rel="stylesheet">  
  <link href="<?php echo base_url('backend/assets/dp_fp/simple-datatables/style.css'); ?>" rel="stylesheet">
 <link href="<?php echo base_url('backend/assets/dp_fp/select2.min.css'); ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('backend/assets/css/style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/dp_fp/jquery.dataTables.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/dp_fp/buttons.dataTables.min.css'); ?>" rel="stylesheet">


</head>
 <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url('/admin'); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="">
        <span class="d-none d-lg-block">DPDP</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
<!-- End Search Bar -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">
        </li><!-- End Notification Nav -->

                <!-- </li>  -->
        <!-- End Messages Nav -->
<?php 
//echo "<pre>";print_r($_SESSION); die("RAMMM");

// $fullname = GetRowsbyId("users", "id", $_SESSION['userid'])->first_name.' '.GetRowsbyId("users", "id", $_SESSION['userid'])->middle_name.' '.GetRowsbyId("users", "id", $_SESSION['userid'])->last_name;
// //print_r($fullname);
// $profile_pic = GetRowsbyId("users", "id", $_SESSION['userid'])->profile_pic;
?>
        <li class="nav-item dropdown pe-3"> 

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php //echo base_url('uploads/warriors/'.$profile_pic.''); ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php //echo GetRowsbyId("users", "id", $_SESSION['userid'])->user_name; ?></span>
          </a><!-- End Profile Iamge Icon -->
          <?php //print_r($usersdata[0]); ?>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php //echo $fullname; ?></h6>
              <span>(<?php //echo GetRowsbyId("users", "id", $_SESSION['userid'])->designation; ?>)</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('admin/profile'); ?>">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('logout'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('/admin'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      
          <?php //if($_SESSION['userid'] == 1){
          ?>
          <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('admin/dpdp_form'); ?>">
              <i class="bi bi-circle"></i><span>DPDP Form</span>
            </a>
          </li>
          
        </ul>
        </li><!-- End Forms Nav -->
        <?php //}
        ?>
                 
      
      
    <?php // } ?>
    </ul>

  </aside><!-- End Sidebar-->

