<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

session_start();

$pseudo = isset($_POST['pseudo'])? $_POST['pseudo'] : '';
$prenom = isset($_POST['prenom'])? $_POST['prenom'] : '';
$date_naiss = isset($_POST['date_naiss'])? $_POST['date_naiss'] : '';
$email = isset($_POST['email'])? $_POST['email'] : '';
$jeux = isset($_POST['jeux'])? $_POST['jeux'] : '';
$image = $_FILES['userfile']['name'];

$toverif = [preg_match("#^[^0-9].{1,29}#", $pseudo),
            preg_match("#^[^0-9]{2,30}$#", $prenom),
            preg_match("#^[0-9]{1,2}[/.,-][0-9]{1,2}[/.,-][0-9]{4}$#", $date_naiss),
            preg_match("#^[a-zA-Z0-9\._-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,5}$#", $email),
            preg_match("#(jpg|png|gif|jpeg)$#", $image)];

foreach ($toverif as $value) {
  if (!$value)
  {
    $match = false;
    break;
  }
  else {
    $match = true;
  }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include('style.php'); ?>
</head>

<body>

    <?php include('navbar.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a class="titre" href="../index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-xs-12 text-center">
            <br><br><br>
            <?php
            if ($match==true) {
              $res = move_uploaded_file($_FILES['userfile']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/Challenge/uploadFiles/".$_FILES['userfile']['name']);
              $res1 = mysqli_query($cnx,"INSERT INTO contact (pseudo,prenom,date_naiss,email,jeux,image,valide) VALUE('$pseudo','$prenom','$date_naiss','$email','$jeux','$image',0)");
              echo "Le formulaire a bien été envoyé correctement<br>Vous recevrez un email de confirmation en cas de validation<br>";
              echo '<br><a href="contact.php"><button class="btn btn-default" type="button" name="button">Retour</button></a>';
            }
            else {
              echo "Erreur lors de l'envoi du formulaire<br>Veuillez remplir les champs correctement<br>";
              echo '<br><a href="contact.php"><button class="btn btn-default" type="button" name="button">Retour</button></a>';
            }
            ?>
            <br><br><br><br>
          </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SimplonBSM 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <?php if ($neige['neige']=='yes') {
      echo '<script type="text/javascript" src="../js/snow.js"></script>
    	<script type="text/javascript">window.onload = function(){snow.init(40);};</script>';
    }?>
</body>

</html>
