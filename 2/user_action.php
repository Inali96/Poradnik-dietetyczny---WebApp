<?php

include('db.php');

if(isset($_POST['btn_action']))
{
	if($_POST['btn_action'] == 'Add')
	{
		$query = "
		INSERT INTO uzytkownicy2 (email, imie, haslo, login, rola, status) 
		VALUES (:email, :imie, :haslo, :login, :rola, :status)
		";	
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':email'	=>	$_POST["email"],
				':haslo'	=>	md5($_POST["haslo"]),#password_hash($_POST["haslo"], PASSWORD_DEFAULT),
				':login'	=>	$_POST["login"],
				':imie'		=>	$_POST["imie"],
				':rola'		=>	'U',
				':status'	=>	'Aktywny'
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'Nowy użytkownik został dodany';
		}
	}
	if($_POST['btn_action'] == 'fetch_single')
	{
		$query = "
		SELECT * FROM uzytkownicy2 WHERE id = :id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':id'	=>	$_POST["id"]
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
		#wrzuca do tabeli informacje z bazy
			$output['imie'] = $row['imie'];
			$output['email'] = $row['email'];
			$output['login'] = $row['login'];
			$output['haslo'] = $row['haslo'];
		}
		echo json_encode($output);
	}
	if($_POST['btn_action'] == 'Edit')
	{
		if($_POST['haslo'] != '')
		{
			$query = "
			UPDATE uzytkownicy2 SET 
				imie = '".$_POST["imie"]."', 
				email = '".$_POST["email"]."',
				login = '".$_POST["login"]."',
				haslo = '".md5($_POST["haslo"])."' 
				WHERE id = '".$_POST["id"]."'
			";
		}
		else
		{
			$query = "
			UPDATE uzytkownicy2 SET 
				imie = '".$_POST["imie"]."', 
				email = '".$_POST["email"]."',
				login = '".$_POST["login"]."',
				WHERE id = '".$_POST["id"]."'
			";
		}
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'Edytowano dane';
		}
	}
	
	if($_POST['btn_action'] == 'delete')
	{
		$status = 'Aktywny';
		if($_POST['status'] == 'Aktywny')
		{
			$status = 'Nieaktywny';
		}
		$query = "
		UPDATE uzytkownicy2 
		SET status = :status 
		WHERE id = :id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':status'	=>	$status,
				':id'		=>	$_POST["id"]
			)
		);	
		$result = $statement->fetchAll();	
		if(isset($result))
		{
			echo 'Zmieniono status użytkownika na ' . $status;
		}
	}

	if($_POST['btn_action'] == 'rola')
	{
		$rola = 'U';
		if($_POST['rola'] == 'U')
		{
			$rola = 'A';
		}
		$query = "
		UPDATE uzytkownicy2 
		SET rola = :rola 
		WHERE id = :id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':rola'	=>	$rola,
				':id'		=>	$_POST["id"]
			)
		);	
		$result = $statement->fetchAll();	
		if(isset($result))
		{
			echo 'Zmieniono rolę na ' . $rola;
		}
	}


	if($_POST['btn_action'] == 'delete2')
	{
		$id=$_POST['id'];
	$sql = "DELETE FROM `uzytkownicy2` WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		echo 'Konto zostało usunięte';
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	}

		

}

?>