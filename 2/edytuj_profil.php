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
			haslo = '".md5($_POST["user_new_password"])."' 
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
		echo '<div class="alert alert-success">Profil zaktualizowany</div>';
	}
}

?>