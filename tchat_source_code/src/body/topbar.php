<div class="topbar">
    <a class="app-name" href="index.php">
    <IMG src="css/img/img6.png" height="35" width="38">
    Tchat
    </a>
    <span class="menu">
        <?php
            if(isLogged() == 1){
                ?>
                    <a href="index.php?page=membres" class="<?php echo ($page=='membres') ? 'active' : '' ?>">Membres</a>
                    <a href="index.php?page=mesamis" class="<?php echo ($page=='mesamis') ? 'active' : '' ?>">Mes amis</a>
                    <a href="index.php?page=mesinvitations" class="<?php echo ($page=='mesinvitations') ? 'active' : '' ?>">Mes invitations</a>
                    <a href="index.php?page=logout">Déconnexion</a>
                <?php
            }else{
                ?>
                    <a href="index.php?page=register" class="<?php echo ($page=='register') ? 'active' : '' ?>">S'inscrire</a>
                    <a href="index.php?page=signin" class="<?php echo ($page=='signin') ? 'active' : '' ?>">Se connecter</a>
                <?php
            }
        ?>
    </span>
</div>