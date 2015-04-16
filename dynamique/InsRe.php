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
  $value = "'" . mysql_real_escape_string($value) . "'";
  }
return $value;
}
//---------------------pour"affiche"------------------------------------

//-------------------------------------------------------------


if(isset($_POST["valider"]))
{
if(!($_POST["nom"]=="")&&($_POST["prenom"]!="")&&($_POST["phone"]!='')&&!empty($_POST["Titre"])&&!empty($_POST["Jour"])&&!empty($_POST["Horaire"])&&!empty($_POST["Salle"])&&!empty($_POST["NbPlacesReservees"]))
	{

$con = mysql_connect("info.univ-lemans.fr","info201a_user","com72");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}

mysql_select_db("info201a", $con);
mysql_query('set names utf8');//uniquefier codage

// securite SQL
$Nom = check_input($_POST['nom']);
$Prenom = check_input($_POST['prenom']);
$Telephone = check_input($_POST['phone']);
$TitreFilm = check_input($_POST['titre']);
$Jour = check_input($_POST['date']);
$Horaire = check_input($_POST['horaire']);
$Salle = check_input($_POST['salle']);
$NbplacesReservees = check_input($_POST['nbplaces']);

$sql="INSERT INTO `AL_WEI_Reservation` (Nom, Prenom, Telephone, TitreFilm, Jour, Horaire, Salle, NbPlaceReservees) 
VALUES
($Nom,$Prenom,$Telephone,$Titre,'Jour',$Horaire,$Salle,$NbPlaces";


	if (!mysql_query($sql,$con))
		{
		die('Error: ' . mysql_error());
		}
echo "1 record added";

mysql_close($con);

	}
   else echo "Toutes les cases du formulaire ne sont pas remplies";  
}

echo "<br/>";
echo $showtime=date("d-m-Y H:i:s");
?>



