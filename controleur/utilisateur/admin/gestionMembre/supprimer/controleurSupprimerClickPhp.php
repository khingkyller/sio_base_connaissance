<?php
/*
 * INTERFACE entre Monde objet et les clics
 * Le controleur va dispatcher les requetes
 * auprès des bons objets
 */

    require_once $_SERVER['DOCUMENT_ROOT'].'site/controleur/utilisateur/admin/GestionMembre/supprimer/controleurSupprimer.php';
    $ctrlAccueil = new ControleurAccueil();
    $ctrlAccueil->afficheAccueil();
?>
