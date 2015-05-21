<?php
  function getBdd() {	//connection a la base de donnée
      // Création de la connexion
      $bdd = new PDO('mysql:host=localhost;dbname=sio_encyclopedie;charset=utf8',
        'root', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
  }
?>