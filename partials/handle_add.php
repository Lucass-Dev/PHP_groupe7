<?php 

    require_once '../db.php';   

    if (!empty($_POST)) {

        if(empty($_POST['title'])){
            header("Refresh:0");
        }
        if(empty($_POST['price'])){
            header("Refresh:0");
        }
        if(empty($_POST['category'])){
            header("Refresh:0");
        }

        $price = floatval($_POST['price']);
        $title =  $_POST['title'];
        $categorie = $_POST['category'];

        $query = $db->prepare("INSERT INTO produit (titre,prix,categorie) VALUES (?,?,?);");
        $query->execute([$title, $price, $categorie]);
        
    }
    header('location: ../index.php');
?>