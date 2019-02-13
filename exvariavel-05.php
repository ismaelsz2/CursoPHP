<?php 

$nome = "Ismael";

function teste(){

	global $nome;
	echo $nome;
}



function teste2(){
	$nome = "joao";
	echo $nome . " "  ."Agora no teste2";

}

teste();
echo "<br>";
teste2();

 ?>