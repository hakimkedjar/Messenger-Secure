<?php

    include '../functions/main-functions.php';
    include '../functions/encryption.php';
    
    $user = $_SESSION['user'];
    $membre = $_SESSION['tchat'];

    $req = $db->query("SELECT * FROM messages WHERE (sender='$membre' AND receiver='$user') OR (receiver='$membre' AND sender='$user')");
    $results = array();

    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }   

    foreach($results as $message){      
        ?>
            <div class="message <?php echo ($message->sender == $membre) ? 'message-membre' : 'message-user' ?>">
                <?=  decryptthis($message->message, $key) ;?>

            </div>
            <br/><br/>

        <?php



            
            
    }