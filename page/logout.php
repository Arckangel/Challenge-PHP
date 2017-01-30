<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

session_start();

session_destroy();

header("location:../index.php");
?>
