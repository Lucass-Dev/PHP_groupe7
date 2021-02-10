<?php 

require_once '../db.php';

if(!empty($_POST)){
    $errors = 0;
    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $password  = $_POST['passw'];
    $confpass  = $_POST['conf_passw'];

    if(empty($name)){
        $errors++;
        header('Location: form_register.php');
    }
    if(empty($email)){
        $errors++;
        header('Location: form_register.php');
    }
    if(empty($password)){
        $errors++;
        header('Location: form_register.php');
    }
    if(empty($confpass)){
        $errors++;
        header('Location: form_register.php');
    }
    if($password != $confpass){
        $errors++;
        header('Location: form_register.php');
    }

    if($errors == 0){
        $query = $db->prepare("INSERT INTO users (email,password) VALUES (?,?)");
        $query->execute([$email,$password]);
        $_SESSION = $email;
        header('Location: ../index.php');
    }
} 
?>