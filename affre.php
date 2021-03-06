<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Affiche toutes les reservations</title>
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
$con = mysql_connect("info.univ-lemans.fr","info201a_user","com72");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("info201a", $con);

$result = mysql_query("SELECT * FROM `AL_WEI_Reservation` LIMIT 0, 30 ");

echo "<table border='1'>
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Telephone</th>
<th>TitreFilm</th>
<th>Jour</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Nom'] . "</td>";
  echo "<td>" . $row['Prenom'] . "</td>";
  echo "<td>" . $row['Telephone'] . "</td>";
  echo "<td>" . $row['TitreFilm'] . "</td>";
  echo "<td>" . $row['Jour'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
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
