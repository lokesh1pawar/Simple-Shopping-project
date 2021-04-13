<?php

require_once 'class-user.php';

if(isset($_SESSION['login'])){

    $_SESSION = [];     // assigning an empty array to $_session variable //  

    // forcefully expiring cokkies
    setcookie(session_name(), session_id(), time()-1000, "/");

    session_destroy();
    header('location: index.php');
}
else{
    header('location: index.php?error=please loggin to your account');
}