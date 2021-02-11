<?php
require_once ('../partials/header.php');
require_once ('../partials/navbar_logged_admin.php');
require_once ('../partials/footer.php');
?>

<div class="panel_container">
    <div class="panel">
        <h1>Panel de Gestion</h1>
        <div class="panel_tools">
            <a href="../partials/gest_user_home.php">
                <span><i class="fas fa-users"></i></span>
                <span>Gestion Utilisateurs</span>
            </a>
            <a href="../partials/gestion_product.php">
                <span><i class="fas fa-dolly"></i></span>
                <span>Gestion Produits</span>
            </a>
            <a href="#">
                <span><i class="fas fa-chart-line"></i></span>
                <span>Analytics</span>
            </a>
        </div>
    </div>
</div>