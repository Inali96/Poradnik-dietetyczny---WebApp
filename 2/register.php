<?php
include_once("db.php");
if(isset($_POST['btn-submit'])) {
	$imie = $_POST['imie'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	#$haslo = $_POST['haslo'];	
	$haslo=$_POST['haslo'];
	$haslo = md5($haslo);	
	#$haslo = password_hash($_POST["haslo"], PASSWORD_DEFAULT),

	$sql = "SELECT email,login FROM uzytkownicy2 WHERE email='$email' or login='$login'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);		
	if(!$row['email'] || !$row['login']){	
		$sql = "INSERT INTO uzytkownicy2(`id`, `imie`, `email`, `login`, `haslo`,  `rola`,`status`) 
VALUES (NULL, '$imie','$email','$login','$haslo','U','Aktywny')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."".$sql);			
	
	} else {				
		echo "1";	 
	}
}

?>