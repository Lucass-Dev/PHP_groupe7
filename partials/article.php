
<?php
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */

try {
    $db = new PDO('mysql:host=127.0.0.1;port=3306;dbname=utilisateur', 'alban', 'alban');
}
catch (Exception $e) {
    die('Erreur MySQL, maintenance en cours.' . $e->getMessage());
}

	$query = $db->prepare("SELECT * FROM produit");
    $query->execute();
	$produit = $query->fetchAll();
	

    
for ($i=0; $i < count($produit); $i++) { 
	
	createArticle($produit[$i]['titre'],$produit[$i]['prix'],$produit[$i]['categorie']);
}

function createArticle($title, $price,$categorie){
    $dom = new DOMDocument('1.0','UTF-8');
    $dom->loadHTML(
    '<div class="art">
        <h1>'.$title.'</h1>
        <span>'.$price.'</span>

           <span><a href="partials/panier.php?title='.$title.'&amp;price='.$price.'"><button class="addToCart"><i id="plus" class="fas fa-plus"></i></button></a></span>

        <span>'.$categorie.'</span>

    </div>');
    echo $dom->saveHTML();
}



?>

