<form>
	
	Nome: <input type="text" name="nome"><br><br>
	Cpf: <input type="text" name="cpf"><br><br>
	Nascimento: <input type="date" name="nascimento: "><br><br>
	<input type="submit" value="OK">


</form>


<?php 

if (isset($_GET)) {

	foreach ($_GET as $key => $value) {
	
	echo $key . "<br>";

	echo $value;

	echo "<hr>";
	
	}


}



 ?>