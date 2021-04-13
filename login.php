<?php
session_start();

    include_once 'class-user.php';

    $user = new User();

    if (isset($_REQUEST['submit'])) {

        extract($_REQUEST);

        $login = $user->check_login($lemail, $lpassword);
        if ($login) {
           // Login Success
           
           echo "<script> alert('Login Successful !!')</script>";
           header("location:index.php");
           
        } else {
            // Login Failed
           echo "<script> alert('Wrong username or password')</script>";
            
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
  
                                   <!-- Login Modal Box -->


 <div class="container col-5 mb-4 ">

        <h5 class="my-4" style="text-align:center; font-size:30px;">Login To Your Account</h5>
      

             <div class="modal-body mb-1">
    
       <form class="form container mb-5 " method="POST" action="" id="log_form">
              <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="lemail" class="form-control" id="form_lemail" required >
				

       
      </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="lpassword" class="form-control" id="pw">
        </div>
       
        <input type="submit" name="submit" name="login" class="btn btn-primary"></input>
        
</form>
      </div>
      <div class="modal-footer justify-content-center">
        Not registered ? <a href="register.php" >Create an account</a>
    
</div>
</div>
                       


       
                         <!-- Footer -->
                        
       <?php include('footer.php'); ?>
 
   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>  
</body>

</html>
