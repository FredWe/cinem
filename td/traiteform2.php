<?php
if(isset($_POST["valider2"]))
{
if(!empty($_POST["nom"]))
  {
   $nom = $_POST["nom"];
   $choix = $_POST["choix"];
   $taux = 6.55957;
 /* attention on ne teste pas que l'utilisateur a bien donné un nombre */
   if(strcmp($choix,"FtoE") == 0)
     echo "la valeur en euros est : ". $nom/$taux;
   else
     echo "la valeur en francs est : ". $nom*$taux;   
  }
   else echo "Toutes les cases du formulaire ne sont pas remplies";  
  
}
echo "<br />"
echo date("d-m-Y H:i:s");
?>
