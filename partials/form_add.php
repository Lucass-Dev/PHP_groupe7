<?php

require_once ('../partials/header.php');
require_once ('../partials/navbar_logged_admin.php');
require_once ('../partials/footer.php');
?>



<div class="formulaire_container">

    <div id="formulaire">
    <form action="handle_add.php" method="POST">
    <h1 style="color:white;">Ajout Article</h1>
        <br>
        <br>
        <h3>Title :</h3>
        <input type="text" name="title" id="title">
        <h3>Price :</h3>
        <input type="text" name="price" id="price">
        <h3>Category :</h3>
        <input type="text" name="category" id="category">
        <br>
        <br>
        <input type="submit" value="Ajouter un Article"> 
           
        </form>
    </div>
    
</div>