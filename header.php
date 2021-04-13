<?php



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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.css">
   <!-- Google font -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">

   <script src="https://use.fontawesome.com/b5c3449615.js"></script>
</head>

<body>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="images/logo-ts.png"  width="70" height="45" class="d-inline-block align-top"  alt="logo">
    &nbsp E-shop</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav ml-auto">

      <?php
      if(isset($_SESSION['login'])){?>
        <li>
        <a class="nav-link" href="my-order.php">My Order</a>
      </li>

        <!-- <li>
        <a class="nav-link" href="#">Cart</a>
      </li>
        -->
    <li> 
      <a class="nav-link" href="home.php?q=logout">Log out &nbsp &nbsp</a>
    </li>
     
      <?php  }else { ?>
         <li>
         <a class="nav-link" href="login.php">Log In</a>
       </li>
        
     <li> 
       <a class="nav-link" href="register.php">Sign Up &nbsp &nbsp</a>
     </li>
     <?php }
      ?>
          </ul>
     <div>
     <?php
     $count = 0;
     if(isset($_SESSION['dog']))
     {
       $count = count($_SESSION['dog']);
     }
     ?>
     <a href="cart.php" class="btn btn-outline-success ">
     <img src="images/cart-36-32.png" width="20" height="20" alt="">
      Cart (<?php echo $count; ?>)</a>
     </div>
      
    </div>
  </div>
</nav>
</div>

   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>  


</body>

</html>
