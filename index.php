<?php
    $page = 'home';
    $pages = array('home','form_register','form_login','cart');

    if (isset($_GET['p'])) {
        if (in_array($_GET['p'], $pages)) {
            $page = $_GET['p'];
        }
    }

    require realpath("partials/header.php");
    require_once realpath("partials/navbar.php");
    require_once realpath("partials/" . $page . ".php");
    require_once realpath("partials/footer.php");
?>