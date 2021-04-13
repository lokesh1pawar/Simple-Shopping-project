<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-shop Project</title>

  <!-- Bootstrap core CSS -->0
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


<div class="modal fade my-modal" id="login"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login To Your Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
             <div class="modal-body">
      <form class="form" method="POST" action="auth.php">
              <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="eml" aria-describedby="emailHelp">
       
      </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="pw">
        </div>
       
        <button type="submit" class="btn btn-primary">Login</button>
</form>
      </div>
      <div class="modal-footer justify-content-center">
        Not registered ? <a href="#"  data-toggle="modal" data-target="#register">Create an account</a>
      </div>
    </div>
  </div>
</div>
                         <!--  Login Modal END -->

    
                         <!-- Registration Modal -->


<div class="modal fade my-modal" id="register"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body pt-2">
      <form class="form" method="POST" action="signup.php" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="fname" class="form-label">First name</label>
        <input type="text" class="form-control" name="fname" >
      </div>
       
      <div class="mb-3">
        <label for="lname" class="form-label">Last name</label>
        <input type="text" class="form-control" name="lname" >
      </div>
       
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" >
      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" >
      </div>
      
      <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm password</label>
        <input type="password" class="form-control" name="cpassword" >
      </div>
       
       <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="number" class="form-control" name="phone" >
      </div>
       
            <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" name="address">
        </div>
            
           
            <div class="custom-file mb-3">
        <label class="custom-file-label" for="img">Choose profile photo</label>
        <input type="file" class="custom-file-input" name="pphoto" required="" accept="image/*"> 
            </div>
       
        <button type="submit" class="btn btn-primary">Register</button>
          </form>

      </div>
       <div class="modal-footer justify-content-center">
       
        Have already an account ? <a href="#" data-toggle="modal" data-target="#login">Login here</a>
      </div> 
        
    </div>
  </div>
</div>
                         <!-- Registration Modal END -->

       
                         <!-- Footer -->
 

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
