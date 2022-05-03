<?php


include('db.php');

if(isset($_POST['imie']))
{
	if($_POST["user_new_password"] != '')
	{
		$query = "
		UPDATE uzytkownicy2 SET 
			imie = '".$_POST["imie"]."', 
			email = '".$_POST["email"]."', 
			haslo = '".password_hash($_POST["user_new_password"], PASSWORD_DEFAULT)."' 
			WHERE login = '".$_SESSION["login"]."'
		";
	}
	else
	{
		$query = "
		UPDATE uzytkownicy2 SET 
			imie = '".$_POST["imie"]."', 
			email = '".$_POST["email"]."'
			WHERE login = '".$_SESSION["login"]."'
		";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	if(isset($result))
	{
		echo '<div class="alert alert-success">Profile Edited</div>';
	}
}

?>