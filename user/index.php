<?php
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        header('Location: user/index.php');
    }
    
    $page = 'home';
    $pages = array('home','cart');
    if (isset($_GET['p'])) {
        if (in_array($_GET['p'], $pages)) {
            $page = $_GET['p'];
        }
    }
    require_once ('../partials/header.php');
    require_once ('../partials/navbar_logged_user.php');
    require_once ('../partials/' . $page . '.php');
    require_once ("../partials/footer.php");
?>