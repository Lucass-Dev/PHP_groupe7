<?php 
	
	
	require_once '../init.php';
	//session_unset()
	//session_destroy();
	
	add();
	


	function add(){
		$verif = true;
		$count = 0;
		$titleCount = 'title0';
		$title = '';
		$price = '';
		while($verif == true){
			if(isset($_SESSION[$titleCount])){
				$count +=1;
				$titleCount = 'title'.$count;
			}else{
				$title = 'title'.$count;
				$price = 'prix'.$count;
				$verif = false;
				
			}
		}
		$newArtTitle = $_GET['title'];
		$newArtPrix = $_GET['price'];
		//echo $title;
		echo $newArtTitle." a bien été ajouté au panier";
		echo '<br>';
		echo "Vous pouvez retourner dans le shop";
		$_SESSION[$title] = $newArtTitle ;
	 	$_SESSION[$price] = $newArtPrix ;

	 		//test
	 	
	}
	 
?>

