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
                <h1 class="page-header">Repertory</h1>
                <ol class="breadcrumb">
                    <li><a class="titre" href="../index.php">Home</a>
                    </li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Friends Row -->
        <div class="row">

            <?php $res5 = mysqli_query($cnx,"SELECT * FROM contact WHERE valide=1 ORDER BY id DESC");

            while ($contact = mysqli_fetch_assoc($res5)) {
              echo '
              <div class="col-md-4 img-portfolio">

                  <div class="imgRepertory" style="background-image: url(../uploadFiles/'.$contact['image'].')"></div>
                  <h3>'.$contact['prenom'].'</h3>
                  <p>22 ans <span>('.$contact['date_naiss'].')</span></p>

                  <p>'.$contact['email'].'</p>
                  <h4>Game</h4>
                  <table class="table table-striped  table-hover">
                      <thead>
                          <tr>
                              <th>Game</td>
                              <th>Username</td>
                          </tr>
                      </thead>
                      <tr>
                          <td>'.$contact['jeux'].'</td>
                          <td>'.$contact['pseudo'].'</td>
                      </tr>
                  </table>
              </div>';
            } ?>

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
