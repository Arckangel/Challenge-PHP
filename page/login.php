<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

session_start();
$_SESSION = array();

$username = isset($_POST['username'])? $_POST['username'] : '';
$password = isset($_POST['password'])? $_POST['password'] : '';

$res = mysqli_query($cnx,"SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1");
$data = mysqli_fetch_assoc($res);

if( mysqli_num_rows($res) ){
  $_SESSION['login'] = "yes";
  header("location:admin.php");
}else{
  header("location:connect.php");
}


?>
