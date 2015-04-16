<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Affiche tous les films</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/grid.css" type="text/css" media="screen">  
</head>
<body id="page1">
	<!--==============================header=================================-->
	<header>
		<div class="border-bot">
			<div class="main">
				<h1><a href="../index.html">CinéCafé</a></h1>
				<nav>
					<ul class="menu">
						<li><a class="active" href="../index.html">Accueil</a></li>
						<li><a href="../index-1.html">Films</a></li>
						<li><a href="../index-2.html">Information</a></li>
						<li><a href="../index-3.html">Reservation</a></li>
						<li><a href="../index-4.html">Contacts</a></li>
						<li><a href="../index-5.html">Authentification</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
<!--		<div class="row-bot">
			<div class="slider-wrapper">

				<div class="slider">
					<ul class="items">
						<li>
							<img src="../images/slider-img1.jpg" alt="" />
						</li>
						<li>
							<img src="../images/slider-img2.jpg" alt="" />
						</li>
						<li>
							<img src="../images/slider-img3.jpg" alt="" />
						</li>
					</ul>
				</div>
			</div>
		</div>
-->
	</header>
	<!--==============================content================================-->
	<section id="content">
		<div class="main">

	<!--==============================PHP================================-->


<?php

function check_input($value)
{
// enlever slashs
if (get_magic_quotes_gpc())
  {
  $value = stripslashes($value);
  }
// si non-numerique alors ajouter guillemets
if (!is_numeric($value))
  {
  $value =  mysql_real_escape_string($value) ;
  }
return $value;
}

if(isset($_POST["valider"]))
{

$con = mysql_connect("info.univ-lemans.fr","info201a_user","com72");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}

mysql_select_db("info201a", $con);
mysql_query('set names utf8');//uniquefier codage

// securite SQL
$nom = check_input($_POST['nom']);
$prenom = check_input($_POST['prenom']);
$phone = check_input($_POST['phone']);
$titre = check_input($_POST['titre']);

$salle = check_input($_POST['salle']);


$date = check_input($_POST['date']);
$horaire = check_input($_POST['horaire']);


$sql="SELECT * FROM `AL_WEI_Films` WHERE `Titre` LIKE '%$titre%' && `Scenariste` LIKE '%$scenariste%' && `Acteurs` LIKE '%$acteurs%' && `Cible` LIKE '%$cible%' && `Resume` LIKE '%$resume%' && `Salle` LIKE '%$salle%' && `AccesHandicapes` LIKE '%$acceshandicapes%' && `NbPlaces` LIKE '%$nbplaces%' && `Date` LIKE '%$date%' && `Horaire` LIKE '%$horaire%' ";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
<th>Titre Film</th>
<th>Salle</th>
<th>Jour</th>
<th>Horaire</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Nom'] . "</td>";
  echo "<td>" . $row['Prénom'] . "</td>";
  echo "<td>" . $row['Téléphon'] . "</td>";
  echo "<td>" . $row['Titre Film'] . "</td>";
  echo "<td>" . $row['Resume'] . "</td>";
  echo "<td>" . $row['Salle'] . "</td>";
  echo "<td>" ;
  echo "<td>" . $row['Jour'] . "</td>";
  echo "<td>" . $row['Horaire'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


	if (!mysql_query($sql,$con))
		{
		die('Error: ' . mysql_error());
		}
echo "<br/><br/>Correctement Trouvé";

mysql_close($con);
 
}

echo "<br/><br/>";
echo $showtime=date("d-m-Y H:i:s");
?>


	<!--==============================PHP-FIN================================-->

		</div>
	</section>
	<!--==============================footer=================================-->
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_3">
						<div class="spacer-1">
							<a href="../index.html"><img src="../images/footer-logo.png" alt=""></a>
						</div>
					</div>
					<div class="grid_5">
						<div class="indent-top2">
							Phone: +33 6 05 95 55 45 Email: <a href="#">info@univ-lemans.fr</a>
						</div>
					</div>
					<div class="grid_4">
						<ul class="list-services">
							<li><a class="item-1" href="#"></a></li>
							<li><a class="item-2" href="#"></a></li>
							<li><a class="item-3" href="#"></a></li>
							<li><a class="item-4" href="#"></a></li>
						</ul>
						<span class="footer-text">&copy; 2012 <a class="link color-2" href="#">Privacy Policy</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>
