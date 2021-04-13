<?php
session_start();
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
  
                        <!-- Login and Register Modal Box -->
                          


                 <!-- Home Page Content   -->

      <div class="col-lg-9 mt-5">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/IMG_20181127_124843.jpg" alt="First slide" style="height: 350px; width:2000px;">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/Forever-21.jpg" alt="Second slide"  style="height: 350px; width: 2000px;">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/Watch-shops-in-Dubai-A-19-04-1024x640.jpg" alt="Third slide" style="height: 350px; width: 2000px;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
                                              
                                           <hr>
                                           
  
                                           <!-- Products -->



        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
          <form action="manage_cart.php" method="POST">

            <div class="card h-100">
              <a href="#"><img class="card-img-top img-thumbnail " src="images/1.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Printed Men Round Neck Black T-Shirt</a>
                </h4>
                <h5>₹299</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer text-center">
              <button type="submit" name="addToCart" class="btn btn-info">Add to cart</button>
              <input type="hidden" name="item_name" value="Tshirt-1">
              <input type="hidden" name="price" value="299">
              
              </div>
            </div>
            </form>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <form action="manage_cart.php" method="POST">

            <div class="card h-100">
              <a href="#"><img class="card-img-top img-thumbnail"  src="images/2.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Printed Men Round Neck Maroon T-Shirt</a>
                </h4>
                <h5>₹341</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer text-center">
              <button type="submit" name="addToCart" class="btn btn-info">Add to cart</button>
              <input type="hidden" name="item_name" value="Tshirt-2">
              <input type="hidden" name="price" value="341">

              </div>
            </div>
            </form>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <form action="manage_cart.php" method="POST">

            <div class="card h-100">
              <a href="#"><img class="card-img-top img-thumbnail" src="images/3.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Printed Men Round Neck Grey T-Shirt</a>
                </h4>
                <h5>₹399</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer text-center">
              <button type="submit" name="addToCart" class="btn btn-info">Add to cart</button>
              <input type="hidden" name="item_name" value="Tshirt-3">
              <input type="hidden" name="price" value="399">
              
              </div>
            </div>
            </form>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <form action="manage_cart.php" method="POST">
          
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-thumbnail" src="images/4.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Printed Men Round Neck Black T-Shirt</a>
                </h4>
                <h5>₹359</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer text-center">
              <button type="submit" name="addToCart" class="btn btn-info">Add to cart</button>
              <input type="hidden" name="item_name" value="Tshirt-4">
              <input type="hidden" name="price" value="359">
              
              </div>
            </div>
            </form>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <form action="manage_cart.php" method="POST">
          
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-thumbnail" src="images/56.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Superhero Men Round or Crew White T-Shirt</a>
                </h4>
                <h5>₹499</h5>
                <p class="card-text"> </p>
              </div>
              <div class="card-footer text-center">
              <button type="submit" name="addToCart" class="btn btn-info">Add to cart</button>
              <input type="hidden" name="item_name" value="Tshirt-5">
              <input type="hidden" name="price" value="499">
              
              </div>
            </div>
            </form>

          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <form action="manage_cart.php" method="POST">
          
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-thumbnail" src="images/1111.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Superhero Men Round Neck Multicolor T-Shirt</a>
                </h4>
                <h5>₹379</h5>
                <p class="card-text"></p>
              </div>
              <div class="card-footer text-center">
              <button type="submit" name="addToCart" class="btn btn-info">Add to cart</button>
              <input type="hidden" name="item_name" value="Tshirt-6">
              <input type="hidden" name="price" value="379">
              
              </div>
            </div>
            </form>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
 <?php include('footer.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>  

</body>

</html>
