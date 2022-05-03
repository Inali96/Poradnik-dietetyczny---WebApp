<?php


include('db.php');

if(isset($_POST['login']))
{
	
		$query = "
		UPDATE uzytkownicy2 SET 
			
			wzrost = '".$_POST["wzrost"]."', 
			dieta = '".$_POST["dieta"]."', 
			waga = '".$_POST["waga"]."',
			wiek = '".$_POST["wiek"]."',
			link = '".$_POST["link"]."',
			cel = '".$_POST["cel"]."',
			aktywnosc = '".$_POST["aktywnosc"]."',
			dieta = '".$_POST["dieta"]."'
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