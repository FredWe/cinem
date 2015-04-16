function verif_formulaire()
{
  if(document.getElementById('form').hidden.value == "Modifier"  || document.getElementById('form').hidden.value == "Valider")
  {
	//vérification que tous les champs sont remplis
	if(document.getElementById('form').nom.value == "" || document.getElementById('form').prenom.value == "" || document.getElementById('form').mail.value == "" || document.getElementById('form').adresse.value == "" || document.getElementById('form').tel.value == "" || document.getElementById('form').login.value == "" || document.getElementById('form').mdp.value == "" || document.getElementById('form').mdp2.value == "") {
		alert("Tous les champs ne sont pas remplis!");
		return false;
	}
  
	//vérification que l'adresse mail est valide  
	var mail = /^[\w\-]+(\.[\w\-]+)*@[\w\-]+(\.[\w\-]+)*\.[\w\-]{2,}$/;

    reponse=mail.test(document.getElementById('form').mail.value)
    if (!reponse) {
		alert(" Email non valide !");
		return false;
	}

	//vérification que les 2 mots de passe sont les memes
	var mdp=document.getElementById('form').mdp.value;
	var mdp2=document.getElementById('form').mdp2.value;
	if (mdp != mdp2)
	{	
		alert(" Les 2 mots de passe sont differents !");
		return false;	
	}
	
  }

}











