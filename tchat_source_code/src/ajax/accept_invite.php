<?php

    include '../functions/main-functions.php';
    
    $i = array(
        'reciever' => $_SESSION['tchat'],
        'sender' => $_POST['sender']
    );

    $sql = "INSERT INTO friends(user1,user2) 
            SELECT *
            FROM 
                (SELECT id AS 'user1' FROM users WHERE email = :sender) ts
            LEFT JOIN
                (SELECT id AS 'user2' FROM users WHERE email = :reciever) tr
            ON (1=1)";
    $req = $db->prepare($sql);
    $req->execute($i);

    $sql = "DELETE FROM invitations 
            WHERE 
            sender IN (SELECT id FROM users WHERE email = :sender)
            AND 
            reciever IN (SELECT id FROM users WHERE email = :reciever)";
    $req = $db->prepare($sql);
    $req->execute($i);