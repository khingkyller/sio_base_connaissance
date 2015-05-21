<?php ob_start(); ?>

<ul>
	<li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/utilisateur/admin/gestionMembre/" class="autres">Gestion des membres</a></div></li><br/>
	<li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/espaceMembre/" class="autres">Espace membre</a></div></li>
</ul>
<?php $contenu = ob_get_clean();?>
