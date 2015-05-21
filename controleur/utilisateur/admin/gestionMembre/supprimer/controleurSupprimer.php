<?php

class ControleurAccueil {


  public function afficheAccueil() {
  	session_start();
  	//$error=ini_set("display_errors",0);error_reporting(0);
    $titre = 'Supprimer Membre';
    $h1="Encyclopédie/Gestion Membre/Supprimer Membre";
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/utilisateur/admin/GestionMembre/supprimer/vue_supprimer.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/gabarit.php';
  }

}

?>
