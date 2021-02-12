<?php

    require_once '../db.php';

if(!empty($_POST)){

    $product = $_POST['products'];
    $nom = $_POST['name'];
    $price = $_POST['price'];
    $categorie = $_POST['categorie'];


    $sql_query = 'UPDATE produit SET titre="'.$nom.'",prix='.$price.',categorie="'.$categorie.'" WHERE id='.$product;
    $db->exec($sql_query);
    header("Refresh:0");
}


?>