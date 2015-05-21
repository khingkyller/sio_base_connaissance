<?php

class ControleurAccueil {


  public function afficheAccueil() {
  	session_start();
  	//$error=ini_set("display_errors",0);error_reporting(0);
    $titre = 'Connexion';
    $h1="Encyclopédie/Connexion";
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/connexion/vue_Connexion.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/gabarit.php';
  }

}

?>
