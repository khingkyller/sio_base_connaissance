<?php ob_start(); ?>

<ul>
	<li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/utilisateur/admin/gestionMembre/ajout/" class="autres">Ajout de membre</a></div></li></br>
	<li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/utilisateur/admin/gestionMembre/changer/" class="autres">Changer Carac Membre</a></div></li></br>
	<li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/utilisateur/admin/gestionMembre/supprimer/" class="autres">Supprimer Membre</a></div></li></br>
</ul>

<?php $contenu = ob_get_clean();?>
