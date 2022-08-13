<?php

    include '../functions/main-functions.php';
    
    $i = array(
        'reciever' => $_SESSION['tchat'],
        'sender' => $_POST['sender']
    );

    $sql = "DELETE FROM invitations 
            WHERE 
            sender IN (SELECT id FROM users WHERE email = :sender)
            AND 
            reciever IN (SELECT id FROM users WHERE email = :reciever)";
    $req = $db->prepare($sql);
    $req->execute($i);