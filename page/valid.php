<?php
error_reporting(E_ALL);
ini_set("display_errors",true);
include_once("connexion.php");
include_once("utils.php");

$id = $_POST['id'];

$res1 = mysqli_query($cnx, "UPDATE contact SET valide=1 WHERE id=$id");

header('location:admin.php');
?>
