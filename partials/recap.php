<?php 

session_start();


add();


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
				
				echo 'Vous avez acheter '.$_SESSION[$title]." au prix de ".$_SESSION[$prix]."€";
				echo "<br>";
				$title = 'title'.$count;
				
				$prix = 'prix'.$count;
				
				
			}else{
				$title = 'title'.$count;
				$prix = 'prix'.$count;
				echo "Le total de votre commande est de: ".$total;
				$verif = false;
				
			}
		}
	}




 ?>