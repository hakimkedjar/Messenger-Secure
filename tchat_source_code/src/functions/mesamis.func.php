<?php

    function get_friends($user_id){
        global $db;
        $req = $db->query("select * from users, friends where (user1 = id or user2 = id) and (user1 = ".$user_id." or user2 = ".$user_id.") and (id <> ".$user_id.")" );
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
