<?php
require_once ('../partials/header.php');
require_once ('../partials/navbar_logged_admin.php');

echo '<div class="product_container">
<div class="button_prodconf">
    <a href="form_add.php" class="prod_btn">Ajouter un produit</a>
    <a href="#" class="prod_btn">Modifier un produit</a>
    <a href="gest_products_home.php" class="prod_btn">Supprimer un produit</a>
</div>
</div>';
require_once ('../partials/footer.php');
?>


