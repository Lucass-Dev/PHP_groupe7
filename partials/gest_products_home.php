<?php

require_once ('../partials/header.php');
require_once ('../partials/navbar_logged_admin.php');

echo '<div class="user_pan_container">';
echo '<div class="user">';
echo '<form method="POST">';
echo '<select name="remove" id="users">';
include 'gest_products_function.php';
echo '</select>';
echo '<button id="del_btn" name="submit" type="submit">Supprimer Produit</button>';
echo '<a href="../partials/gestion_panel.php" id="del_btn">Retour</a>';
echo '</form>';
echo '</div>';
echo '</div>';

require_once ('../partials/footer.php');
?>
