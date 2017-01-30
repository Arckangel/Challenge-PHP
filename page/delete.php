<?php
error_reporting(E_ALL);
ini_set("display_errors",true);
include_once("connexion.php");
include_once("utils.php");

$id = $_POST['id'];
$image = $_POST['img'];

// echo "id = ".$id;
// echo 'image = '.$image;

$res1 = mysqli_query($cnx, "DELETE FROM contact WHERE id=$id");

unlink("../uploadFiles/$image");

header('location:admin.php');
?>
