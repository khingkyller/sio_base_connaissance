<?php

class ControleurAccueil {


  public function afficheAccueil() {
  	session_start();
  	//$error=ini_set("display_errors",0);error_reporting(0);
    $titre = 'Accueil';
    $h1="Encyclopédie/Accueil";
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/accueil/vueAccueil.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/gabarit.php';
  }

}

?>
