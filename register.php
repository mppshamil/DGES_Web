
<?php
$msg = '';




if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	$name= $_POST['name'];
	$email = $_POST['email'];
	$nic = $_POST['nic'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];


	$conn = mysqli_connect('localhost', 'root', '', 'dges') or die('Unable To connect');
	$sql = "insert into tbl_career_login (name,email,nic,phone,password)values('$name','$email','$nic','$phone','$password')";


  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

?>
	<script>
			location.replace("login.php");
		</script>
<?php

  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  

}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DGES Register</title>
    <!-- plugins:css -->
    <!-- <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css"> -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.login.css"> 
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/img/dges_img/logoFooter.png" />
  </head>
  <body> 
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="assets/img/dges_img/logoFooter.png">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>

                <form role="form" action="" method="post" class="pt-3" enctype="multipart/form-data">

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="name" id="exampleInputUsername1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="nic" id="exampleInputEmail1" placeholder="NIC Number">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control form-control-lg" name="phone" id="exampleInputEmail1" placeholder="Contact Number">
                  </div>
                  <!-- <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                      <option>Gender</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div> -->
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <!-- <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div> -->
                  <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-warning btn-primary  btn-lg font-weight-medium auth-form-btn"> Sign Up</button>

                  <!--  <a class="btn btn-block btn-warning btn-primary  btn-lg font-weight-medium auth-form-btn" href="login.php">SIGN UP</a>-->
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-warning fw-bold">Login</a>
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
    <!-- plugins:js -->
    <!-- <script src="../../vendors/js/vendor.bundle.base.js"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="../../js/off-canvas.js"></script> -->
    <!-- <script src="../../js/misc.js"></script> -->
    <!-- endinject -->
  </body>
</html>