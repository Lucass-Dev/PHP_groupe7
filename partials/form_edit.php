<?php

require_once ('../partials/header.php');
require_once ('../partials/navbar_logged_admin.php');
require_once ('../partials/footer.php');

echo '<div class="add_product_container">
<form id="add_form" action="handle_edit.php" method="POST">
    <select name="products" id="users">';
include("gest_products_function.php");
echo '</select>
    <h3>Nom Produit:</h3>
    <input name="name" type="text"/>
    <h3>Prix Produit:</h3>
    <input name="price" type="number"/>
    <h3>Catégorie:</h3>
    <input name="categorie" type="text"/>
    <button type="submit"><i class="fas fa-recycle"></i>Mettre à jour le produit</button>
</form>
</div>';

?>

