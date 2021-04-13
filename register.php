<?php
include_once 'class-user.php'; 
 
$user = new User();

// Checking for user logged in or not

 if (isset($_REQUEST['submit'])){

 extract($_REQUEST);

 $register = $user->reg_user($fname, $lname, $email, $password, $phone, $address);

 if ($register) {

 // Registration Success

 echo "<script> alert('Registration Successful !!')</script>";
 header("location:login.php");


 } else {
 // Registration Failed
 echo 'Registration failed. Email or Username already exits please try again';
 }
 }
 ?> 

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-shop Project</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->

  <?php
  include('header.php');
  ?>
  
  
                         <!-- Registration Modal -->

        <div class="container col-7">

        <h5 class="my-4" style="text-align:center; font-size:30px;"><b>Register Here</b></h5>
        

      <div class="modal-body pt-2">
      <form class="form container" novalidate method="POST" action="" enctype="multipart/form-data" id="reg_form" >
      <div class="mb-3">
        <label for="fname" class="form-label">First name</label>
        <input type="text" class="form-control" name="fname" id="form_fname" required>
				<span class="error_form" id="fname_error_message"></span>

        
		
      </div>
       
      <div class="mb-3">
        <label for="lname" class="form-label">Last name</label>
        <input type="text" class="form-control" name="lname" id="form_lname" required>
				<span class="error_form" id="lname_error_message"></span>

		
      </div>
       
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="form_email" required>
				<span class="error_form" id="email_error_message"></span>

		

      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="form_password"  required>
				<span class="error_form" id="password_error_message"></span>

		

      </div>
      
      <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm password</label>
        <input type="password" class="form-control" name="cpassword" id="form_con_password" required>
				<span class="error_form" id="con_password_error_message"></span>


      </div>
       
       <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="number" class="form-control" name="phone" id="form_phone"  required>
				<span class="error_form" id="phone_error_message"></span>

		

      </div>
       
            <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" name="address" id="form_address" required>
  				<span class="error_form" id="address_error_message"></span>
        </div>

            
           
            <div class="mb-3">
            <label class="form-label" for="customFile">Upload your Profile picture</label>
            <input type="file" name="photo" class="form-control" id="customFile" />
            </div>
            
      
        
            <input type="submit" name="submit" value="register" class="btn btn-primary"></input>
          </form>

      </div>
       <div class="modal-footer justify-content-center">
       
        Have already an account ? <a href="login.php" >Login here</a>
      </div> 
        
        </div>
                         <!-- Registration Modal END -->

       
                         <!-- Footer -->
                       
        <?php include('footer.php'); ?>
 
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>  

</body>

</html>
