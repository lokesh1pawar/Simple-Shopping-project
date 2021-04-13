<?php
session_start();
// session_destroy();
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    
<div class="container">
<div class="row">
<div class="col-lg-12 text-center border rounded bg-light my-5">
<h1>MY CART</h1>
</div>
<div class="col-lg-8">
<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No. </th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['dog']))
    {
    foreach($_SESSION['dog'] as $key => $value)
    {
      $total = $total+$value['price'];
      echo"
      <tr>
      <td>1</td>
      <td>$value[item_name]</td>
      <td>$value[price]</td>
      <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10' </td>

     <form action='manage_cart.php' method='POST'> 
      <td>
      <button name='remove_item' class='btn btn-sm btn-outline-danger'>Remove
      
      </button>
      
      
      
      </form>
      </td>
      </tr>
      ";
    }
  }

    ?>
    
    
      </tbody>
      </table>

</div>
<br>
    <div class="col-lg-4">
    <div class="border bg-dark rounded p-4 text-white">
    <h4>Total :</h4>
    <h5 class="text-right"><?php echo $total ?></h5>
    <br>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1">
            Cash On Delivery
    </label>
</div>
    <br>
    <!-- <form action=""> -->
    <a href="https://test.instamojo.com/@lokesh1pawar/05e97a392b0b4b4b84f0fc3b24ef865a" target="_blank" class="btn btn-primary btn-block">Buy now</a>
    <!-- </form> -->
    </div>
    </div>
</div>

</div>


</body>
</html>

