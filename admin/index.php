<?php
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        header('Location: admin/index.php');
    }
    
    $page = 'home';
    $pages = array('home','cart','gestion_panel','gestion_product','gest_product_home','panier');
    if (isset($_GET['p'])) {
        if (in_array($_GET['p'], $pages)) {
            $page = $_GET['p'];
        }
    }
    require_once ('../partials/header.php');
    require_once ('../partials/navbar_logged_admin.php');
    require_once ('../partials/' . $page . '.php');
    require_once ("../partials/footer.php");
?>