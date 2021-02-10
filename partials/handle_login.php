<?php 
    require_once '../init.php';
    require_once '../db.php';

    if(!empty($_POST)){
        $errors = 0;
        $email  = $_POST['email'];
        $password  = $_POST['passw'];

        if(empty($email)){
            $errors++;
            header('Location: form_login.php');
        }
        if(empty($password)){
            $errors++;
            header('Location: form_login.php');
        }

        if($errors == 0){
            $query = $db->prepare("SELECT * FROM users WHERE email = :email");
            $query->execute(['email' => $email]);
            $user = $query->fetch();

            if($user != null){
                if(hash('sha256',$password) == $user['password']){
                    $_SESSION['user'] = array('email' => $user['email'], 'role' => $user['role']);
                    header('Location: ../index.php');
                }
            }
        }
    }
?>