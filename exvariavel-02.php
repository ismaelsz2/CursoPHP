<?php 

/*
$anoNascimento = 1990;

$nomeCompleto = "";
*/

//Na linha de baixo temos uma variável com número no nome.

$nome1 = "Ismael";

$sobrenome = "de Souza"; 

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

echo "<br>";

//echo $nome1;

echo "<br>";

unset($nome1);

if (isset($nome1)) {
	echo $nome1; 	
}



 ?>