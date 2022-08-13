<?php

    function get_membres($user_id){
        global $db;
        $req = $db->query(" SELECT *
                            FROM 
                                (SELECT id, name, email FROM users) t1
                            LEFT JOIN
                                (select id friend from users, friends where (user1 = id or user2 = id) and (user1 = ".$user_id." or user2 = ".$user_id.") and (id <> ".$user_id.")) t2
                            ON (t1.id = t2.friend)
                            LEFT JOIN
                                (select id invited from users, invitations where (sender = ".$user_id.") and (id = reciever)) t3
                            ON(t1.id = t3.invited)");
        $results = array();
        while($rows = $req->fetchObject()){
            $results[] = $rows;
        }
        return $results;
    }

    function get_user(){
        global $db;
        $req = $db->query("SELECT * FROM users WHERE email = '{$_SESSION['tchat']}'");
        $user = array();
        while($row = $req->fetchObject()){
            $user[] = $row;
        }
        return $user;
    }
