<?php

class ControleurAccueil {


  public function afficheAccueil() {
  	session_start();
  	//$error=ini_set("display_errors",0);error_reporting(0);
    $titre = "Changer Le Niveau De Securité D Un Membre";
    $h1="Encyclopédie/Gestion Membre/Changer Le Niveau De Securité D'Un Membre";
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/utilisateur/admin/GestionMembre/changer/niveauSecurite/vue_niveauSecurite.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/gabarit.php';
  }

}

?>
