<?php 

$pessoas = array();

array_push($pessoas, array(

	'Nome:' => 'Joao',
	'Idade:' => 20

));

array_push($pessoas, array(

	'Nome:' => 'Glaucio',
	'Idade:' => 25

));

echo json_encode($pessoas);

 ?>