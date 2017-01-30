<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

session_start();

$slider = isset($_POST['slider'])? $_POST['slider'] : '';
if ($slider=='yes') {
  $res = mysqli_query($cnx,"UPDATE slider SET slider='visible'");
}
else {
  $res = mysqli_query($cnx,"UPDATE slider SET slider='hidden'");
}

header("location:admin.php");
?>
