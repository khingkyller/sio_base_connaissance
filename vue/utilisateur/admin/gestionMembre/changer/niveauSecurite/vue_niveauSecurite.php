<?php ob_start(); ?>

<?php
	include  $_SERVER['DOCUMENT_ROOT']. 'site/modele/BDD.php';

$i=1;
$login = getBdd()->prepare("SELECT login FROM utilisateur WHERE codeUtilisateur = $i");
$max = getBdd()->query("SELECT codeUtilisateur FROM utilisateur order by codeUtilisateur desc");
do{
?>
<select name="liste">

<option value="$i"><?php $login->execute(array($i)); ?></option>

<?php
$i++;
?>
</select>
<?php
}while($max==true);

 $contenu = ob_get_clean();?>
