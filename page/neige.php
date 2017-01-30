<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

session_start();

$neige = isset($_POST['neige'])? $_POST['neige'] : '';
if ($neige =='yes') {
  $res4 = mysqli_query($cnx,"UPDATE neige SET neige='yes'");
}
else {
  $res4 = mysqli_query($cnx,"UPDATE neige SET neige='no'");
}

header("location:admin.php");
?>
