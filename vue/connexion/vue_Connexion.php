<?php ob_start() ?>


<form action= "<?php $_SERVER['DOCUMENT_ROOT']?>/site/modele/login.php" method="post">
	<label for="login">Login</label>
	<input type="text" name="login" id="login" value=""/>
	<br></br>
	<label for="pwd">Mot de passe</label>
	<input type="password" name="pwd" id="pwd" value=""/>

	<input type="submit" name="Se connecter" value="Se connecter"/>
</form>

<?php $contenu = ob_get_clean() ?>
