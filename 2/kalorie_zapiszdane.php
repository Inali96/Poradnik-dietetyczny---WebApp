<?php


include('db.php');

if(isset($_POST['login']))
{
	
		$query = "
		UPDATE uzytkownicy2 SET 
			
			wzrost = '".$_POST["wzrost"]."', 
			kalorie = '".$_POST["kalorie"]."', 
			waga = '".$_POST["waga"]."',
			wiek = '".$_POST["wiek"]."'
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