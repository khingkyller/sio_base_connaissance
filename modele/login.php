<?php
	include  $_SERVER['DOCUMENT_ROOT']. 'site/modele/BDD.php';
// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) {
				$id=$_POST['login'];
$login_valide = getBdd()->prepare("SELECT COUNT(*) FROM sio_encyclopedie.utilisateur where login=?");
$login_valide ->execute(array($_POST['login']));
$bla = $login_valide ->fetch();

		if($bla[0] == 0){
			echo 'login incorrect';
			header ('Refresh:3 ; URL=/site/vue/connexion.php');
		}
		else 
		{
			$e = getBdd()->prepare("SELECT mot_passe FROM utilisateur WHERE login = ?");
			$e->execute(array($_POST['login']));
			$rep=$e->fetch();
			$pass = sha1($_POST['pwd']);

			if($pass == $rep['mot_passe']){

			$a = getBdd()->prepare("SELECT codeNiveauSecurite FROM utilisateur WHERE login = ?");
			$a->execute(array($_POST['login']));
			$b = $a->fetch();
			session_start();

	     	if($b['codeNiveauSecurite']==2){
	     		$_SESSION['statut'] = 'admin'; 
	     	} 

	     	else {
				$_SESSION['statut'] = 'membre';
	     		}

				$_SESSION['login'] = $_POST['login'];
				echo 'connecte';
				header( 'Refresh:3 ;URL= /site/index.php');
			}

			else {
				echo 'Mot de passe ou login incorrect.';
				header('Refresh:3 ; URL=/site/vue/connexion.php' );
				die();
				}

		}

}
?>