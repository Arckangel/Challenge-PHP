<?php
error_reporting(E_ALL);
ini_set("display_errors",true);

include_once("connexion.php");
include_once("utils.php");

session_start();

if( isset($_SESSION['login'])) {
}
else {
  header("location:../index.php");
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
          <h1 class="page-header">Administration</h1>
          <ol class="breadcrumb">
          <li><a class="titre" href="../index.php">Home</a>
          </li>
          <li class="active">Login</li>
          <li class="active">Administration</li>
          </ol>
        </div>
      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-xs-12 col-sm-4 text-center">
          <br>
          <form action="police.php" method="post">
            <label for="police">Police des titres</label><br>
            <br>
            <select id="police" name="police">
              <option value = "Gloria Hallelujah">Gloria Hallelujah</option>
              <option value = "Josefin Sans">Josefin Sans</option>
              <option value = "Pacifico">Pacifico</option>
            </select><br><br>
            <input class="btn btn-default" type="submit" name="name" value="Modifier">
          </form>
        </div>

        <div class="col-xs-12 col-sm-4 text-center">
          <br>
          <form action="slider.php" method="post">
            <label for="slider">Afficher les fléches du slider</label><br>
            <br>
            <?php
            $res3 = mysqli_query($cnx,"SELECT * FROM slider");
            $slider = mysqli_fetch_assoc($res3);
            if($slider['slider']=="visible") {
              $checked = 'checked="checked"';
            }
            else {
              $checked = "";
            }
            ?>
      			<input type="checkbox" id="slider" name="slider" value="yes" <?php echo $checked; ?>><br><br>
            <input class="btn btn-default" type="submit" name="name" value="Modifier">
          </form>
          <br>
          <br>
          <form action="neige.php" method="post">
            <br>
            <label for="slider">Activer la neige sur le site</label><br>
            <br>
            <?php
            $res4 = mysqli_query($cnx,"SELECT * FROM neige");
            $slider = mysqli_fetch_assoc($res4);
            if($slider['neige']=="yes") {
              $checked = 'checked="checked"';
            }
            else {
              $checked = "";
            }
            ?>
      			<input type="checkbox" id="neige" name="neige" value="yes" <?php echo $checked; ?>><br><br>
            <input class="btn btn-default" type="submit" name="name" value="Modifier">
          </form>
        </div>

        <div class="col-xs-12 col-sm-4 text-center">
          <br>
          <form  action="color.php" method="post">
            <label>Couleurs du site</label>
            <br><br>
            <table class="center-table">
              <tr>
                <td class="ecart-cell"><label for="navColor">Navbar</label></td>
                <td class="ecart-cell"><label for="titColor">Titres</label></td>
                <td class="ecart-cell"><label for="urlColor">Liens</label></td>
                <td class="ecart-cell"><label for="btnColor">Boutons</label></td>
              </tr>
              <tr>
                <td class="ecart-cell"><input type="color" id="navColor" name="navColor" value="<?php echo $couleurs['navbar']; ?>"></td>
                <td class="ecart-cell"><input type="color" id="titColor" name="titColor" value="<?php echo $couleurs['titres']; ?>"></td>
                <td class="ecart-cell"><input type="color" id="urlColor" name="urlColor" value="<?php echo $couleurs['urls']; ?>"></td>
                <td class="ecart-cell"><input type="color" id="btnColor" name="btnColor" value="<?php echo $couleurs['boutons']; ?>"></td>
              </tr>
            </table>
            <br>
            <input class='btn btn-default' type="submit" name="modifier" value="Modifier"><br>
          </form>
          <br><br>
          <label>Historique des couleurs</label>
          <br><br>
          <?php include('historique.php'); ?>
        </div>
      </div>

      <hr>
      <div class="row">
        <div class="col-lg-12">
          <h2>Utilisateurs en attente de validation</h2>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 test text-center">
          <table class="center-table contacts">
            <tr>
              <th class="text-center">Pseudo</th>
              <th class="text-center">Prénom</th>
              <th class="text-center">Date de naissance</th>
              <th class="text-center">Email</th>
              <th class="text-center">Jeux</th>
              <th class="text-center">Image de profil</th>
              <th class="text-center">Options</th>
            </tr>
            <?php
            $res5 = mysqli_query($cnx,"SELECT * FROM contact WHERE valide=0 ORDER BY id DESC");
            while ($contact = mysqli_fetch_assoc($res5)) {
              echo "<tr>";
                echo "<td>".$contact['pseudo']."</td>";
                echo "<td>".$contact['prenom']."</td>";
                echo "<td>".$contact['date_naiss']."</td>";
                echo "<td>".$contact['email']."</td>";
                echo "<td>".$contact['jeux']."</td>";
                echo '<td><div class="imgAdmin" style="background-image: url(../uploadFiles/'.$contact['image'].')"></div></td>';
                echo "<td>";
                  echo "<div class='row'>";
                    echo '<div class="col-xs-3 col-xs-offset-1">
                      <form action="valid.php" method="post">
                        <input type="hidden" name="id" value="'.$contact['id'].'">
                        <input type="submit" class="options" id="v" name="name" value="V">
                      </form>
                    </div>';
                    echo '<div class="col-xs-3">
                      <form action="modif.php" method="post">
                        <input type="hidden" name="id" value="'.$contact['id'].'">
                        <input type="submit" class="options" id="m" name="name" value="M">
                      </form>
                    </div>';
                    echo '<div class="col-xs-3">
                      <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="'.$contact['id'].'">
                        <input type="hidden" name="img" value="'.$contact['image'].'">
                        <input type="submit" class="options" id="x" name="name" value="X">
                      </form>
                  </div>';
                echo "</td>";
              echo "</tr>";
            }
            ?>

          </table>
        </div>
      </div>
      <br>
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
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
    <?php if ($neige['neige']=='yes') {
      echo '<script type="text/javascript" src="../js/snow.js"></script>
    	<script type="text/javascript">window.onload = function(){snow.init(40);};</script>';
    }?>
</body>

</html>
