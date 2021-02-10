<?php
    require_once realpath("init.php");
    require_once realpath("partials/header.php");
    require_once realpath("partials/navbar.php");

    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        if($user['role'] == '1'){
            header('Location: admin/index.php');
        }
        if($user['role'] == '0'){
            header('Location: user/index.php');
        }
    }
    
    $page = 'home';
    $pages = array('home','form_register','form_login','cart','loggedin');
    if (isset($_GET['p'])) {
        if (in_array($_GET['p'], $pages)) {
            $page = $_GET['p'];
        }
    }
    
    require_once realpath("partials/" . $page . ".php");
    require_once realpath("partials/footer.php");

?>