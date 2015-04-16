
<?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  	
<head>
 <title> Recherche et reservation </title>
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
			<li><a href="recherche.php" class="hover">Recherche et reservation</a></li>
	<li><a href="inscription.php">Inscription</a></li>		</ul>
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



			<div id="billet">
				<span class="ctop"></span>
					<form method="post" action="recherche.php" class="billet">
					<h2 class="text3">Rechercher <span>billet</span></h2>
					<p>
					Catégorie:
					<select name="Categories">
						<option value ="tout">Toute</option>
						<option value ="Adulte">Adulte</option>
						<option value ="Enfant">Enfant</option>
						<option value ="Famille">Famille</option>
					</select>
					<br class="spacer" />
					<br class="spacer" />
					Prix:
					<select name="Prix">
						<option value ="tout">Tous</option>
						<option value ="50">jusqu'à 50 euros</option>
						<option value ="100">de 50 à 100 euros</option>
						<option value ="1000">plus de 100 euros</option>
					</select>
					<br class="spacer" />
					<br class="spacer" />
					Durée:
					<select name="Validite">
						<option value ="tout">Toute</option>
						<option value ="1">1 jour</option>
						<option value ="2">2 jours</option>
						<option value ="3">3 jours</option>
						<option value ="7">7 jours</option>
						<option value ="365">365 jours</option>
					</select>
					<br class="spacer" />
					<br class="spacer" />
					Offre:
					<select name="Offre">
						<option value ="tout">Toute</option>
						<option value ="Offre standard">Standard</option>
						<option value ="Offre spéciale">Spéciale</option>
					</select>
					<br class="spacer" />
					<br class="spacer" />
					<input type="submit" value="Rechercher" name="Rechercher" /> <!--Attention, value=rechercher pour que le bouton écrive "rechercher"-->					
					</p>
					</form><br class="spacer" />		
				<span class="cbottom"></span>
			</div>

 <div id="billet"><span class="ctop"></span><script type="text/javascript" src="formOK.js"></script><form id="form" method="post" action="trait_reservation.php" onsubmit="return verif_formulaire()" class="billet" ><h2 class="text4">Reservation : </h2> <p><label>Nom :</label> <input name="nom" /> <br class="spacer" /> <label>Prenom :</label> <input name="prenom" /> <br class="spacer" /><label>Email :</label><input name="mail" /> <br class="spacer" /><label>Billet : (pour réduire la liste faites une recherche ci-dessus)</label> <br /><select name="nom_billet"><option value ="toto" >toto</option><option value ="titi" >titi</option><option value ="mimi" >mimi</option></select><br class="spacer"/><br/><label>Commentaire :</label></p><p><br/><br/><textarea name="commentaire" cols="35" rows="3"></textarea><br/><input type="hidden" name="hidden" value="" /><input type="submit" value="Réserver" name="reserver" onclick="document.getElementById('form').hidden.value=document.getElementById('form').reserver.value" /></p></form><br class="spacer" /><span class="cbottom"></span></div><br class="spacer">		</div>
	<div id="bottomShadow"></div><br class="spacer" />	
	<br class="spacer" />	
	</div>
</div>

</body>

</html>
