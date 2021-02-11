<?php

    require_once '../db.php';

    $id;

    $query = $db->prepare("SELECT * FROM produit");
    $query->execute();
    $products = $query->fetchAll();

    foreach($products as $product){
        dispProducts($product['titre'],$product['prix'],$product['categorie'],$product['id']);
    }

    function dispProducts($titre,$prix,$categorie,$id){
        $dom = new DOMDocument('1.0','UTF-8');
        $dom->loadHTML(
        '<option value='.$id.'>'.$titre.' ('.$categorie.')</option>');
        echo $dom->saveHTML();
}

if(isset($_POST['submit'])){
    $sql_query = 'DELETE FROM produit WHERE id='.$_POST['remove'];
    $db->exec($sql_query);
    header("Refresh:0");
}

?>