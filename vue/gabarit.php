<!DOCTYPE html>

<html>
	<head>
		<link type="text/css" rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/stylesheet.css"/>
		<title> <?= $titre ?> </title>
	</head>
	<body>
		<h1><?= $h1 ?></h1>
		<div class="menu">
		<ul>
		<li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/" class="menu">Accueil</a></li>
        <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/SLAM/" class="menu">SLAM</a></li>
        <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/SISR/" class="menu">SISR</a></li>
        <li><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/Autres/" class="menu">Autres</a></li>
        <?= $lien ?>
		</ul>
		</div>
		<?= $contenu ?>
	</body>

</html>
