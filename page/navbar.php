<?php $page = basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>


<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Left -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php if ($page == 'index') {
              echo '<a class="navbar-brand" href="index.php">Start Bootstrap</a>';
            }
            else {
              echo'<a class="navbar-brand" href="../index.php">Start Bootstrap</a>';
            }
            ?>
        </div>
        <!-- Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <?php
              if ($page == 'index') {
                echo '<li><a href="index.php">Home</a></li>';
                echo '<li><a href="page/repertory.php">Repertory</a></li>';
                echo '<li><a href="page/about.php">About</a></li>';
                echo '<li><a href="page/contact.php">Contact</a></li>';
                if( isset($_SESSION['login'])) {
                  echo '<li><a href="page/admin.php">Administration</a></li>';
                  echo '<li><a href="page/logout.php"><i class="fa fa-power-off"></i></a></li>';
                }
                else {
                  echo '<li><a href="page/connect.php">Login</a></li>';
                }
              }
              else {
                echo '<li><a href="../index.php">Home</a></li>';
                echo '<li><a href="repertory.php">Repertory</a></li>';
                echo '<li><a href="about.php">About</a></li>';
                echo '<li><a href="contact.php">Contact</a></li>';
                if( isset($_SESSION['login'])) {
                  echo '<li><a href="admin.php">Administration</a></li>';
                  echo '<li><a href="logout.php"><i class="fa fa-power-off"></i></a></li>';
                }
                else {
                  echo '<li><a href="connect.php">Login</a></li>';
                }
              }
              ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
