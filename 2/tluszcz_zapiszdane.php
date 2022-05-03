<?php


include('db.php');

if(isset($_POST['login']))
{
	
		$query = "
		UPDATE uzytkownicy2 SET 
			
			obwod_talii = '".$_POST["obwod_talii"]."', 
			tluszcz = '".$_POST["tluszcz"]."', 
			waga = '".$_POST["waga"]."'
			WHERE login = '".$_SESSION["login"]."'
		";
	
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	if(isset($result))
	{
		echo '<div class="alert alert-success">Zapisano dane w profilu</div>';
	}
}

?>