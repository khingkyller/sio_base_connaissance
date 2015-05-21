<!DOCTYPE html>

<html>
	<head>
		<title>page</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	</head>

	<body>
		<h1>Encyclopédie\Accueil</h1>
		<?php
		  include $_SERVER['DOCUMENT_ROOT']. 'site/modele/login.php';
		  //ini_set("display_errors",0);error_reporting(0);
		  session_start();
		  if($_SESSION['login'] != null )
		  {
			include  $_SERVER['DOCUMENT_ROOT']. 'site/vue/menu/menu.php';
		}
		else
		{
		?>

		  <div class="menu"><ul>
		<li>
                <a href="vue/inscription/Inscription.php" class="menu">Inscription</a>
        </li>

		<li>
                <a href="vue/connexion/Connexion.php" class="menu">Connexion</a>
        </li>
		</ul>
</div>
     <?php } ?>
	</body>

</html>
