
<?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  	
<head>
 <title> Inscription </title>
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
	<li><a href="inscription.php" class="hover">Inscription</a></li>			</ul>
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
	



	
	
		<div id="inscription">
		<span class="nltop"></span>
<script type="text/javascript" src="formOK.js"></script><form id="form" method="post" action="inscription.php" onsubmit="return verif_formulaire()" class="inscription" ><h2 class="text2">Inscrivez-<span>vous</span></h2><label>Nom :</label> <input name="nom" value=''/> <br class="spacer" /> <label>Prenom :</label> <input name="prenom" value=''/> <br class="spacer" /><label>Email :</label><input name="mail" value='' /> <br class="spacer" /><label>Adresse :</label><input name="adresse" value='' /> <br class="spacer" /><label>Téléphone :</label><script type="text/javascript" src="nombre.js"></script><input name="tel" value='' onkeyup="verif_nombre(this)" /> <br class="spacer" /><label>Login :</label><input name="login" value='' /> <br class="spacer" /> <label>Mot de passe :</label><input type="password" name="mdp" value='' /> <br class="spacer" /> <label>Confirmez :</label><input type="password" name="mdp2" value=''/> <br class="spacer" /> <input type="hidden" name="hidden" value="" /><input type="submit" value="Valider" name="valider" onclick="document.getElementById('form').hidden.value=document.getElementById('form').valider.value" /><input type="reset" value="Tout effacer" /> <br class="spacer" /> </form>	
		<br class="spacer" />
		<span class="nlbottom"></span>
		</div>
	</div>
	<div id="bottomShadow"></div><br class="spacer" />	
	<br class="spacer" />	
</div>
</body>

</html>

