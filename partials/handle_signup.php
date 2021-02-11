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
        header("Refresh:0");
    }
    if(empty($email)){
        $errors++;
        header("Refresh:0");
    }
    if(empty($password)){
        $errors++;
        header("Refresh:0");
    }
    if(empty($confpass)){
        $errors++;
        header("Refresh:0");
    }
    if($password != $confpass){
        $errors++;
        header("Refresh:0");
    }

    if($errors == 0){
        $query = $db->prepare("INSERT INTO users (email,password) VALUES (?,?)");
        $password = hash('sha256',$_POST['passw']);
        $query->execute([$email,$password]);
        $_SESSION = $email;
        header('Location: ../index.php');
    }
    header("Location:../index.php");
} 
?>