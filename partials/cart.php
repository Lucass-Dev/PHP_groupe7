
<?php

function createArticle(){
    $dom = new DOMDocument('1.0','UTF-8');
    $dom->loadHTML(
    '
<div id="flex">
	<table>
		<tr>
			<th>Intitule</th>
			<th>Quantite</th>
			<th>Prix</th>
		</tr>
	</table>
</div>
    ');
    echo $dom->saveHTML();
}

createArticle();
?>

