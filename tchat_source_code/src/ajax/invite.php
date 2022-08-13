<?php

    include '../functions/main-functions.php';
    
    $i = array(
        'sender' => $_SESSION['tchat'],
        'reciever' => $_POST['reciever']
    );

    $sql = "INSERT INTO invitations(sender,reciever) 
            SELECT *
            FROM 
                (SELECT id AS 'sender' FROM users WHERE email = :sender) ts
            LEFT JOIN
                (SELECT id AS 'reciever' FROM users WHERE email = :reciever) tr
            ON (1=1)";
    $req = $db->prepare($sql);
    $req->execute($i);