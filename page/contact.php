<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

session_start();
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
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-12">
                <!-- Contact form -->
                <form name="sentMessage" id="contactForm" action="register.php" method="post" enctype="multipart/form-data">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Form Column -->
                        <div class="col-md-6">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Pseudo:</label>
                                    <input type="text" class="form-control" name="pseudo" id="pseudo" required data-validation-required-message="Please enter your pseudo.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Prénom:</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Date de naissance:</label>
                                    <input type="text" class="form-control" name="date_naiss" id="naissance" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                        </div>
                        <!-- Form Column -->
                        <div class="col-md-6">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Jeux:</label>
                                    <input type="text" class="form-control" name="jeux" id="jeux" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Img de profil:</label>
                                    <input type="file" name="userfile" id="userfile" required data-validation-required-message="Please enter your profil image.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cil-md-12 text-center">
                        <div id="success"></div>
                        <br>
                        <button type="submit" class="btn btn-default">Register</button>
                        <br><br>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->

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
