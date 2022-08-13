<?php
    if(isLogged() == 0){
        header("Location:index.php?page=signin");
    }
?>
<div class="user-div">
    <a><?= get_user()[0]->name ?></a>
</div>
<h2 class="header">Mes amis</h2>
<?php
    foreach(get_friends(get_user()[0]->id) as $amis){
        if($amis->email != $_SESSION['tchat']){
            ?>
                <div class="membre">
                    <strong><?= $amis->name ?></strong><br/>
                    <span><?= $amis->email ?></span><br/>
                    <a class="select" href="index.php?page=tchat&user=<?= $amis->email ?>"><span class="i-send"></span></a>
                </div>

            <?php
        }

    }
?>