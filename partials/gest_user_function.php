<?php

    require_once '../db.php';

    $id;

    $query = $db->prepare("SELECT * FROM users");
    $query->execute();
    $users = $query->fetchAll();

    foreach($users as $user){
        if($user['role'] == '1'){
            $user['role'] = 'admin';
        } else {
            $user['role'] = 'user';
        }
        dispUsers($user['email'],$user['role'],$user['id']);
    }

    function dispUsers($email,$role,$id){
        $dom = new DOMDocument('1.0','UTF-8');
        $dom->loadHTML(
        '<option value='.$id.':'.$role.'>'.$email.' ('.$role.')</option>');
        echo $dom->saveHTML();
}


if(isset($_POST['submit'])) { 
    $arr = explode(':',$_POST['users']);
    if($_POST['action'] == 'remove'){
        $sql_query = 'DELETE FROM users WHERE id='.$arr[0];
        $db->exec($sql_query);
        header("Refresh:0");
    } else if($_POST['action'] == 'state'){
        if($arr[1] == 'user'){
            $sql_query = 'UPDATE users SET role=1 WHERE id='.$arr[0];
            $db->exec($sql_query);
            header("Refresh:0");
        }
        if($arr[1] == 'admin'){
            $sql_query = 'UPDATE users SET role=0 WHERE id='.$arr[0];
            $db->exec($sql_query);
            header("Refresh:0");
        }
    }
}
?>