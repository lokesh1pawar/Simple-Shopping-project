<?php
session_start();

include_once 'class-user.php';

$user = new User(); $id = $_SESSION['id'];

if (!$user->get_session()){

 header("location:index.php");

}


if (isset($_GET['q'])){

 $user->user_logout();

 header("location:index.php");
}

?>