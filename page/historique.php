<?php
//Valeurs de tri
$page = isset($_GET['page'])? $_GET['page'] : "1";

$res1 = mysqli_query($cnx,"SELECT COUNT(*) FROM couleurs");
$count = mysqli_fetch_array($res1)[0];
?>
<?php

//Conditions de tri : LIMIT
$nb = 1;
$previous = 'visible';
$next = 'visible';
$nbPage = ceil($count);
if ($page==1) {
  $previous = 'invisible';
}
elseif ($page==($nbPage-1)) {
  $next = 'invisible';
}

$limit = 'LIMIT '.($page).','.$nb;


//Requete auprés de la BDD
$res = mysqli_query($cnx,"SELECT navbar, titres, urls,	boutons	 FROM couleurs ORDER BY id DESC $limit");

//Tableau des résultats
$header = true;
echo "<table class='center-table'>";
while ($data = mysqli_fetch_assoc($res) ) {
  if ($header) {
    echo "<tr>";
    foreach ($data as $key=>$value) {
      echo "<th class='ecart-cell histo'>".$key."</th>";
    }
    echo "</tr>";
  }
  $header=false;
  echo "<tr>";
  foreach ($data as $key=>$value) {
    echo "<td class='ecart-cell histo'>".$value."</td>";
  }
  echo "</tr>";
  echo "<tr>";
  foreach ($data as $key=>$value) {
    echo "<td class='ecart-cell histo'><div class='preview' style='background-color:".$value."'></div></td>";
  }
  echo "</tr>";
}
echo "</table>";
br();
echo '<table class="center-table"><tr>';
echo '<td class="ecart-cell"><a href="./admin.php?page=1"><button class="btn btn-default" type="button">First</button></a></td>';
echo '<td class="ecart-cell"><a class="'.$previous.'" href="./admin.php?page='.($page-1).'"><button class="btn btn-default" type="button">Previous</button></a></td>';
echo '<td class="ecart-cell"><a class="'.$next.'" href="./admin.php?page='.($page+1).'"><button class="btn btn-default" type="button">Next</button></a></td>';
echo '<td class="ecart-cell"><a href="./admin.php?page='.($nbPage-1).'"><button class="btn btn-default" type="button">Last</button></a></td>';
echo '</tr></table><br>';
?>
