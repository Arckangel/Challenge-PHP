<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

session_start();

$navColor = isset($_POST['navColor'])? $_POST['navColor'] : '';
$titColor = isset($_POST['titColor'])? $_POST['titColor'] : '';
$urlColor = isset($_POST['urlColor'])? $_POST['urlColor'] : '';
$btnColor = isset($_POST['btnColor'])? $_POST['btnColor'] : '';

// echo "nav : ".$navColor;
// br();
// echo "tit : ".$titColor;
// br();
// echo "url : ".$urlColor;
// br();
// echo "btn : ".$btnColor;

// $res = mysqli_query($cnx,"UPDATE couleurs SET titres='$titColor', urls='$urlColor', navbar='$navColor', boutons='$btnColor'");

$res = mysqli_query($cnx,"INSERT INTO couleurs (titres,urls,navbar,boutons) VALUE('$titColor','$urlColor','$navColor','$btnColor')");

header("location:admin.php");
?>
