<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

session_start();

$police = isset($_POST['police'])? $_POST['police'] : '';
$res = mysqli_query($cnx,"UPDATE police SET police='$police'");

header("location:admin.php");
?>
