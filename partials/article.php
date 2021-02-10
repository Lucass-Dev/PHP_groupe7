
<?php

$db = new PDO('mysql:host=127.0.0.1;port=3306;dbname=utilisateur', 'alban', 'alban');
try{
	$query = $db->prepare("SELECT * FROM produit");
        $query->execute();
        echo $query;
    }catch{
    	echo "bah sa marche pas";
    }



function createArticle($title, $price){
    $dom = new DOMDocument('1.0','UTF-8');
    $dom->loadHTML(
    '<div class="art">
        <h1>'.$title.'</h1>
        <span>'.$price.'</span>
           <span><a href="partials/panier.php?info=id"><button class="addToCart"><i id="plus" class="fas fa-plus"></i></button></a></span>
    </div>');
    echo $dom->saveHTML();
}
createArticle('Chaise Massante','139.99');
createArticle('Un bureau gaming','350,50');
createArticle('Un stylo','1.99');


?>

