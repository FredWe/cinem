<?php
if(isset($_POST["valider"]))
{
if(!empty($_POST["nom"])&&!empty($_POST["prenom"])&&!empty($_POST["mail"]))
  {
   $nom = $_POST["nom"];
   $prenom = $_POST["prenom"];
   $avis = $_POST["avis"];
     
   echo "Bonjour ".$prenom." ".$nom. " !<br/>" ;
   echo "Merci d'avoir visité notre site ! <br/>" ;
   if(strcmp($avis,"oui") == 0)
     echo "Nous serons contents de vous accueillir la prochaine fois";
   else
     echo "Nous regrettons de ne plus jamais vous revoir";   
  }
   else echo "Toutes les cases du formulaire ne sont pas remplies";  
}

echo "<br/>";
echo $showtime=date("d-m-Y H:i:s");
?>
