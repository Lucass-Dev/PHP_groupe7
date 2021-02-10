<?php
function createArticle($title, $price){
    $dom = new DOMDocument('1.0','UTF-8');
    $dom->loadHTML(
    '<div class="art">
        <h1>'.$title.'</h1>
        <span>'.$price.'</span>
           <span><i id="plus" class="fas fa-plus"></i></span>
    </div>');
    echo $dom->saveHTML();
}
createArticle('Chaise Massante','139.99');
createArticle('Un bureau gaming','350,50');
createArticle('Un stylo','1.99');
?>