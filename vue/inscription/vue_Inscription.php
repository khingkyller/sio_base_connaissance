<?php ob_start() ?>

	<form method="post" action="<?php $_SERVER['DOCUMENT_ROOT']?>/site/modele/inscription_test.php">

		<label for="nom">Nom	</label>
		<input type="text" name="nom" id="nom" value=""/>
		<br><br>
		<label for="prenom">Prénom	</label>
		<input type="text" name="prenom" id="prenom" value=""/>
		<br><br>
		<label for="login">Login	</label>
		<input type="text" name="login" id="login" value=""/>
		<br><br>
		<label for="passe">Mot de passe	</label>
		<input type="password" name="passe" id="passe" value=""/>
		<br><br>
		<label for="email">Adresse email	</label>
		<input type="email" name="email" id="email" value=""/>
		<br><br>
		<input type="submit" name="envoi" value="Envoyer"/>

	</form>

<?php $contenu = ob_get_clean() ?>
