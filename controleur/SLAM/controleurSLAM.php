<?php

class ControleurAccueil {


  public function afficheAccueil() {
  	session_start();
  	//$error=ini_set("display_errors",0);error_reporting(0);
    $titre = 'SLAM';
    $h1="Encyclopédie/SLAM";
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/SLAM/vue_SLAM.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/menu.php';
    require $_SERVER['DOCUMENT_ROOT'].'site/vue/gabarit.php';
  }

}

?>
