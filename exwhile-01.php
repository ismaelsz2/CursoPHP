<?php 

$condicao = true;

while ($condicao) {
	
	$numero = rand(1, 6);

	if ($numero === 3) {
		
		echo "Tres!!!";
		$condicao = false;
		
	}

	echo $numero . " ";

}


 ?>