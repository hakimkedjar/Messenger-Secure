<?php
    if(isLogged() == 0){
        header("Location:index.php?page=signin");
    }
?>
<div class="user-div">
    <a><?= get_user()[0]->name ?></a>
</div>
<h2 class="header">Mes invitations</h2>
<?php
    foreach(get_invitations(get_user()[0]->id) as $invitation){
        if($invitation->email != $_SESSION['tchat']){
            ?>
                <div class="membre">
                    <div class="mbr">
                    <strong><?= $invitation->name ?></strong><br/>
                    <span><?= $invitation->email ?></span><br/>
                    </div>
                    <div class = actions>
                    <a class="example_ab accept" href="index.php?page=tchat&user=<?= $invitation->email ?>"><span>Accepter</span></a>
                    <a class="example_a refuse" href="index.php?page=tchat&user=<?= $invitation->email ?>"><span>Refuser</span></a>
                    </div>
                </div>

            <?php
        }

    }
?>