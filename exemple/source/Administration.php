
<?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  	
<head>
 <title> Reservation </title>
 <link href="style.css" rel="stylesheet" type="text/css" />
 <meta http-equiv="Content-Type" content="text/HTML; charset=iso-8859-1" />
</head>
 
<body>
<div id="topNav">
	<img src="images/Bisney.png" alt="Flash Web" width="379" height="200" />
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="infos.php">Informations pratiques</a></li>
			<li><a href="billets.php">Liste des billets</a></li>
			<li><a href="description.php">Description des attractions</a></li>
			<li><a href="recherche.php">Recherche et reservation</a></li>
			
<li><a href="inscription.php">Inscription</a></li><li><a href="administration.php" class="hover">Administration</a></li>		</ul>
	<br />
</div>			
			
			
<div id="body">
		<form method="post" action="trait_connexion_admin.php" class="login" >
			<h2>Espace <span>Administrateur</span></h2>
			<p>
			<label>Login</label><input name="loginAdmin" /><br class="spacer" />
			<label>Mot de passe</label><input type="password" name="mdpAdmin" />
			<input type="submit" value="Connexion" name="connexion" />
			</p>
		</form>
	<div id="topShadow"></div>
	<div id="bodyPannel">


	<div id="midle">

	<p>Bonjour cher admin, en vous connectant vous pourrez :<br /></p>
	<ul>
		<li>Ajouter ou supprimer des billets</li>
		<li>Supprimer des clients</li>
	</ul>
	</div>
	</div>
	<div id="bottomShadow"></div><br class="spacer" />	
	<br class="spacer" />	
</div>			


</body>

</html>
