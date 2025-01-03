<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>DPDP</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/app.min.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/bundles/jquery-selectric/selectric.css"); ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/components.css"); ?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css"); ?>">
  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url("assets/img/favicon.ico"); ?>' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Sign Up!</h4>
              </div>
              <div class="card-body">
                <?php if(@$_GET['s']==1) { ?>
                <div class="alert alert-success">
                      <div class="alert-title">Signup Successfully ! <a href="<?php echo base_url('/'); ?>">Click here </a> to login</div>
                      
                    </div> <?php } ?>
               <form action="http://20.219.12.136:81/index.php/signup_form" method="POST" id="admin" name="admin" class="needs-validation" accept-charset="utf-8">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name<code>*</code></label>
                      <input id="frist_name" type="text" class="form-control" name="name" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Gender <code>*</code></label>
                      <select class="form-control" required>
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Date Of Birth<code>*</code></label>
                      <input id="last_name" type="date" class="form-control" name="" >
                    </div>
                  </div>
                   <div class="row">
                  <div class="form-group col-6">
                    <label for="email">Email <code>*</code></label>
                    <input id="email" type="email" class="form-control" name="email" >
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="email">Phone No.</label>
                    <input id="email" type="text" class="form-control" name="mobile">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                </div>
                 <div class="row">
                  <div class="form-group col-6">
                    <label for="email">Department <code>*</code></label>
                    <input id="email" type="text" class="form-control" name="" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="email">Designation</label>
                    <input id="email" type="text" class="form-control" name="designation">
                    <input id="email" type="hidden" class="form-control" name="created_date" value="<?php echo date("Y-m-d"); ?>">
                                        <input id="email" type="hidden" class="form-control" name="logindate" value="<?php echo date("Y-m-d h:i:s"); ?>">

                    <div class="invalid-feedback">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="email">Address</label>
                    <textarea class="form-control" name=""></textarea>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password<code>*</code></label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password" required>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation<code>*</code></label>
                      <input id="password2" type="password" class="form-control" name="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" >
                      Sign Up!
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="/">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url("assets/js/app.min.js"); ?>"></script>
  <!-- JS Libraies -->
  <script src="<?php echo base_url("assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/bundles/jquery-selectric/jquery.selectric.min.js"); ?>"></script>
  <!-- Page Specific JS File -->
  <script src="<?php echo base_url("assets/js/page/auth-register.js"); ?>"></script>
  <!-- Template JS File -->
  <script src="<?php echo base_url("assets/js/scripts.js"); ?>"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
     <script src="<?php echo base_url("assets/bundles/sweetalert/sweetalert.min.js"); ?>"></script>
</body>

<script type="text/javascript"> $("#submit").click(function () {
  swal({
    title: 'Are you sure?',
    text: 'You want to sign up!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
        swal('Sign Up successfully!', {
          icon: 'success',
        });
      } 
    });
});
</script>
<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>