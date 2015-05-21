<?php
	include  $_SERVER['DOCUMENT_ROOT']. 'site/modele/BDD.php';
if(isset($_POST) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login'])&& isset($_POST['email']) && isset($_POST['passe'])){

	if(get_magic_quotes_gpc()){
		$_POST['nom'] = stripslashes(trim($_POST['nom']));
		$_POST['prenom'] = stripslashes(trim($_POST['prenom']));
		$_POST['login'] = stripslashes(trim($_POST['login']));
		$_POST['passe'] = stripslashes(trim($_POST['passe']));
		$_POST['email'] = stripslashes(trim($_POST['email']));

	}

	//Si le formulaire est posté et les champs remplis
	//Traitement et insertion des données

}
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$login=$_POST['login'];
		$mot_passe=sha1($_POST['passe']);
		$email=$_POST['email'];


  $sql = "INSERT INTO sio_encyclopedie.utilisateur (nom, prenom,login, mot_passe, email, codeNiveauSecurite) VALUES ('$nom', '$prenom','$login', '$mot_passe', '$email', 1)";

    $resultat = getBdd()->query($sql);    // exécution directe
    echo 'bien joué';
	header('Refresh: 3; URL=/site/vue/utilisateur/admin/gestionMembre/ajout/')
?>
