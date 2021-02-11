<?php

require_once ('../partials/header.php');
require_once ('../partials/navbar_logged_admin.php');

echo '<div class="user_pan_container">';
echo '<div class="user">';
echo '<form method="POST">';
echo '<select name="users" id="users">';
include 'gest_user_function.php';
echo '</select>';
echo '<select name="action" id="users">';
echo '<option value="remove">Supprimer utilisateur</option>';
echo '<option value="state">Changer le role</option>';
echo '</select>';
echo '<button id="del_btn" name="submit" type="submit">Appliquer changements</button>';
echo '<a href="../admin/index.php" id="del_btn">Retour</a>';
echo '</form>';
echo '</div>';
echo '</div>';

require_once ('../partials/footer.php');
?>


