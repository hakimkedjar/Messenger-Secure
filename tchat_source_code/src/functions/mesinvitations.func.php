<?php

    function get_invitations($user_id){
        global $db;
        $req = $db->query("select * from users, invitations where (id = sender) and (reciever = ".$user_id.")" );
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
