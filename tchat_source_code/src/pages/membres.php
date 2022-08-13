<?php
    if(isLogged() == 0){
        header("Location:index.php?page=signin");
    }
?>
<div class="user-div">
    <a><?= get_user()[0]->name ?></a>
</div>
<h2 class="header">Tous les membres</h2>
<?php
    foreach(get_membres(get_user()[0]->id) as $membre){
        if($membre->email != $_SESSION['tchat']){
            ?>
                <div class="membre">
                    <strong><?= $membre->name ?></strong><br/>
                    <span><?= $membre->email ?></span><br/>
                    <?php
                        $invited = $membre->invited ? "invited" : "";
                        if ($membre->friend) {
                            echo '<a class="select" href="index.php?page=tchat&user='.$membre->email.'"><span class="i-send"></span></a>';
                        }
                        else {
                            echo '<a class="select no-friend '.$invited.'" href="index.php?page=tchat&user='.$membre->email.'"><span class="i-user"></span></a>';
                        }
                    ?> 
                </div>

            <?php
        }

    }
?>