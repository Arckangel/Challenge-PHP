<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

$res1 = mysqli_query($cnx,"SELECT * FROM couleurs ORDER BY id DESC");
$couleurs = mysqli_fetch_assoc($res1);

$res2 = mysqli_query($cnx,"SELECT * FROM police");
$police = mysqli_fetch_assoc($res2);

$res3 = mysqli_query($cnx,"SELECT * FROM slider");
$slider = mysqli_fetch_assoc($res3);

$res4 = mysqli_query($cnx,"SELECT * FROM neige");
$neige = mysqli_fetch_assoc($res4);
?>

<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

<!-- Gloria Hallelujah -->
<!-- Josefin Sans -->
<!-- Pacifico -->

<style media="screen">
  h1, h2, h3, h4, h5{
    color: <?php echo $couleurs['titres']; ?>!important;
    font-family: '<?php echo $police['police']; ?>';
  }
  .titre{
    color: <?php echo $couleurs['titres']; ?>!important;
  }
  .btn{
    background-color: <?php echo $couleurs['boutons']; ?>;
    color: <?php echo $couleurs['urls']; ?>;
  }
  .btn:hover{
    background-color: <?php echo $couleurs['boutons']; ?>;
    color: lightgrey;
  }
  .navbar{
    background-color: <?php echo $couleurs['navbar']; ?>;
    border: none;
  }
  a{
    color: <?php echo $couleurs['urls']; ?>!important;
  }
  a:hover{
    color: lightgrey!important;
  }
  .icon-prev, .icon-next{
    visibility: <?php echo $slider['slider']; ?>;
  }
  .center-table
  {
    margin: 0 auto !important;
    float: none !important;
  }
  .ecart-cell{
    width: 80px;
  }
  .histo{
    width: 80px;
    text-align: center;
  }
  .preview{
    width: 48px;
    height: 15px;
    border: 1px solid grey;
    margin: auto;
    margin-top: 8px;
  }
  .test{
    background-color: #f5f5f5;
    border-radius: 4px;
  }
  .contacts th{
    width: 14%;
    height: 50px;
  }
  .contacts td{
    border-top: 1px solid lightgrey;
    width: 14%;
    height: 50px;
  }
  .options{
    width: 32px;
    color: white;
    border: 2px solid white;
    border-radius: 6px;
  }
  #v{
    background-color: rgb(0, 207, 89);
  }
  #m{
    background-color: rgb(108, 128, 230);
  }
  #x{
    background-color: rgb(241, 43, 43);
  }
  .options:hover{
    color: lightgrey;
  }
  .imgRepertory{
    width: 360px;
    height: 260px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin-bottom: 30px;
  }
  .imgRepertory:hover {
      opacity: 0.8;
  }
  .imgAdmin{
    width: 100px;
    height: 50px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: auto;
  }
</style>
