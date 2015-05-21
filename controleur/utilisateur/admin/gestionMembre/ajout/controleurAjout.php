<?php

class ControleurAccueil {


  public function afficheAccueil() {
  	session_start();
  	//$error=ini_set("display_errors",0);error_reporting(0);
    $titre = 'Ajout Membre';
    $h1="Encyclopédie/Gestion Membre/Ajout Membre";
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/utilisateur/admin/GestionMembre/ajout/vue_ajout.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/gabarit.php';
  }

}

?>
