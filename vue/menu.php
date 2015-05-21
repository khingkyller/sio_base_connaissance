<?php
ob_start();
//ini_set("display_errors",0);error_reporting(0);
?>

        <?php if(isset($_SESSION['statut']))
        {
                if($_SESSION['statut'] == 'admin')
                {
        ?>
                <li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/utilisateur/admin/gestionMembre/" class="menu">Gestion des membres</a></div></li><br/>
                <li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/espaceMembre/" class="menu">Espace membre</a></div></li>
                <li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/modele/deconnexion.php" class="menu">Se déconnecter <?php echo $_SESSION['login'] ?></a></li></div>
        <?php
        }
        elseif($_SESSION['login'] != null && $_SESSION['statut'] != 'admin')
        {
        ?>
        <li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/espaceMembre/espaceMembre.php" class="menu">Espace membre</a></div></li>
        <li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/modele/deconnexion.php" class="menu">Se déconnecter <?php echo $_SESSION['login'] ?></a></li></div>
        <?php
        }

        }
        else
        {
        ?>
                <li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/inscription/" class="menu">Inscription</a></div></li>
                <li><div class="menu"><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/site/vue/connexion/" class="menu">Connexion</a></div></li>
        <?php
        }
        ?>
<?php $lien = ob_get_clean(); ?>
