<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DPDP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('backend/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('backend/assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('backend/assets/css/style.css'); ?>" rel="stylesheet">

</head>

 <body onload="generate()">

  <main>
    <div class="bgimage">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="row logo_m">
                <!--  <a href="<?php echo base_url('admin'); ?>" class="logo_m d-flex align-items-center w-auto"> -->
                 
                
              </div>
               
              <div class="card mb-3 mt-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-<?php echo @$MsgError; ?>" style="display: <?php echo (@$MsgError != "" ? "block" : "none"); ?>;">
                            <button class="close" data-close="alert"></button>
                            <?php echo (@$MsgError == "success" ? "Data has been saved successfully" : ""); ?>
                            <?php echo (@$MsgError == "error" ? "Login Details are not match!" : ""); ?>
                            <?php if (@$MsgError != "") { ?>
                            <script>
                                setTimeout(function () {
                                $('.alert-<?php echo @$MsgError; ?>').hide('slow');
                                //window.location = window.location.href;
                                }, 2000);
                            </script>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                  <?= form_open(base_url('admin'),array('method' => 'POST', 'id' => 'admin', 'name' => 'admin', 'class'=>'row g-3 needs-validation'));?>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12 ">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="row mb-3">                 
                    <div class="col-xl-12">
                      <div class="row">
                          <div class="col-xl-12 admin_text">
                            <div class="wrapper"></div>
                            <h6 id="status" style="color: #ee7e6a;"></h6>
                            <input type="text" readonly id="generated-captcha">
                             <input type="text" id="entered-captcha" placeholder="Enter the captcha..">
                          </div>
                          <br>
                          <div class="col-xl-12 admin_text" >
                            <button type="button" onclick="check()">
                                check Captcha
                            </button>
                            <button type="button" onclick="generate()" id="gen">
                                Generate New
                            </button>
                          </div>                                 
                      </div> 
                    </div>
                  </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100 " id="loginbutton" type="submit" disabled>Login</button>
                    </div>
                    
                  <?= form_close();?>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="#">NeGD </a>

              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('backend/assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
  <script src="<?php echo base_url('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('backend/assets/vendor/chart.js/chart.min.js'); ?>"></script>
  <script src="<?php echo base_url('backend/assets/vendor/echarts/echarts.min.js'); ?>"></script>
  <script src="<?php echo base_url('backend/assets/vendor/quill/quill.min.js'); ?>"></script>
  <script src="<?php echo base_url('backend/assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
  <script src="<?php echo base_url('backend/assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
  <script src="<?php echo base_url('backend/assets/vendor/php-email-form/validate.js'); ?>"></script> <script src="<?php echo base_url('backend/assets/js/jquery-3.6.1.js'); ?>"></script> 
  <script src="<?php echo base_url('backend/assets/js/main.js'); ?>"></script>
</body>

</html>
<script type="text/javascript">
  let captcha;
let alphabets = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";

let status = document.getElementById('status');
status.innerText = "Captcha Generator";

 generate = () => { 
// console.log(status)
let first = alphabets[Math.floor(Math.random() * alphabets.length)];
let second = Math.floor(Math.random() * 10);
let third = Math.floor(Math.random() * 10);
let fourth = alphabets[Math.floor(Math.random() * alphabets.length)];
let fifth = alphabets[Math.floor(Math.random() * alphabets.length)];
let sixth = Math.floor(Math.random() * 10);
captcha = first.toString()+second.toString()+third.toString()+fourth.toString()+fifth.toString()+sixth.toString();
document.getElementById('generated-captcha').value = captcha;
document.getElementById("entered-captcha").value = '';
status.innerText = "Captcha Generator"
}

 check = () => {
// console.log(status)
let userValue = document.getElementById("entered-captcha").value;
console.log(captcha);
console.log(userValue);
if(userValue == captcha){
   document.getElementById("loginbutton").disabled = false;
    status.innerText = "Correct!!";
    
}else{
    status.innerText = "Try Again!!"
    document.getElementById("entered-captcha").value = '';
    document.getElementById("loginbutton").disabled = true;
}
}


</script>