
<?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
 <title>Liste des billets</title>
 <link href="style.css" rel="stylesheet" type="text/css" />
 <meta http-equiv="Content-Type" content="text/HTML; charset=iso-8859-1" />
</head>

<body>
<div id="topNav">
	<img src="images/Bisney.png" alt="Flash Web" width="379" height="200" />
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="infos.php">Informations pratiques</a></li>
			<li><a href="billets.php" class="hover">Liste des billets</a></li>
			<li><a href="description.php">Description des attractions</a></li>
			<li><a href="recherche.php">Recherche et reservation</a></li>
<li><a href="inscription.php">Inscription</a></li><li><a href="administration.php">Administration</a></li>		</ul>
<br />
</div>


<div id="body">

		<form method="post" action="trait_connexion.php" class="login" >
			<h2>Espace <span>membres</span></h2>
			<p>
			<label>Login</label><input name="login" /><br class="spacer" />
			<label>Mot de passe</label><input type="password" name="mdp" />
			<input type="submit" value="Connexion" name="connexion" />
			</p>
		</form>
	<div id="topShadow"></div>
	<div id="bodyPannel">

	<div id="midle">
 <h2> Liste des <span>billets :</span></h2><table><tr><th>Nom</th><th>Catégorie</th><th>prix (euros)</th><th>Durée</th><th>Type d'offre</th><th>Description</th></tr><tr><td> </td><td> Adulte </td><td> 6 </td><td>1</td><td> Offre standard</td><td> </td></tr><tr><td> </td><td> Adulte </td><td> 45 </td><td>7</td><td> Offre standard</td><td> </td></tr><tr><td> </td><td> Adulte </td><td> 456 </td><td>1</td><td> Offre standard</td><td> </td></tr></table>	</div>
	</div>
	<div id="bottomShadow"></div><br class="spacer" />	
	<br class="spacer" />	
</div>


</body>

</html>

