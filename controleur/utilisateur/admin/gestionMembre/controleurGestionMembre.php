<?php

class ControleurAccueil {


  public function afficheAccueil() {
  	session_start();
  	//$error=ini_set("display_errors",0);error_reporting(0);
    $titre = 'Gestion Membre';
    $h1="Encyclopédie/Gestion Membre";
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/utilisateur/admin/GestionMembre/vue_GestionMembre.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/gabarit.php';
  }

}

?>
