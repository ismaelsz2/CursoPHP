<?php 

//Tipos simples de dados

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

///////////////////////////////////////

//Tipos compostos de dados

$frutas = array("abacaxi", "laranja", "manga");

//	echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

/////////////////////////////////////////////////////

//Tipos especiais de dados

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = NULL;
$vazio = " ";



?>
