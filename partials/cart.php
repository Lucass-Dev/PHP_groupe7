<div id="flex">
	<table>
		<tr>
			<th>titre</th>
			<th>Quantite</th>
			<th>Prix</th>
		</tr>
	</table>
<button>Validé le panier</button>


<?php
session_start();

function add(){
		$verif = true;
		$count = 0;
		$titleCount = 'title0';
		$title = 'title0';
		$prix = 'prix0';
		$total = 0;
		while($verif == true){
			
			if(isset($_SESSION[$titleCount])){
				$count +=1;
				$titleCount = 'title'.$count;
				$total = $total + intval($_SESSION[$prix]);

				createArticle($_SESSION[$title],$_SESSION[$prix]);
				$title = 'title'.$count;
				
				$prix = 'prix'.$count;
				
				
			}else{
				$title = 'title'.$count;
				$prix = 'prix'.$count;
				echo $total;
				$verif = false;
				
			}
		}
	}
add();







function createArticle($title,$price){
	
    $dom = new DOMDocument('1.0','UTF-8');
    $dom->loadHTML(
    '
<div id="flex">
	<table>
		<tr>
			<th>'.$title.'</th>
			<th>1</th>
			<th>'.$price.'</th>
		</tr>
	</table>
</div>
    ');
    echo $dom->saveHTML();
}


?>

