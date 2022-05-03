<?php
include "db.php";
if (isset($_POST['btn-save'])) {

	$img_name = $_FILES['obrazek']['name'];
	$img_size = $_FILES['obrazek']['size'];
	$tmp_name = $_FILES['obrazek']['tmp_name'];
	$error = $_FILES['obrazek']['error'];

	
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","webp"); 

			
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'zdjecia_dodane/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
		
	$nazwa = $_POST['nazwa'];
	$skladniki = $_POST['skladniki'];
	$krok1 = $_POST['krok1'];
	$krok2 = $_POST['krok2'];
	$krok3 = $_POST['krok3'];
	$krok4 = $_POST['krok4'];
	$krok5 = $_POST['krok5'];
	$krok6 = $_POST['krok6'];
	$krok7 = $_POST['krok7'];
	$krok8 = $_POST['krok8'];
	$krok9 = $_POST['krok9'];
	$krok10 = $_POST['krok10'];
	$kategoria = $_POST['kategoria'];
	$przepis_nr = $_POST['przepis_nr'];
	$kategoria_ogolna = $_POST['kategoria_ogolna'];
	$dzien = $_POST['dzien'];
	$energia = $_POST['energia'];
	$tluszczg = $_POST['tluszczg'];
	$kwasytg = $_POST['kwasytg'];
	$weglowodanyg = $_POST['weglowodanyg'];
	$cukryg = $_POST['cukryg'];
	$blonnikg = $_POST['blonnikg'];
	$solg = $_POST['solg'];
	$tluszcz = $_POST['tluszcz'];
	$kwasyt = $_POST['kwasyt'];
	$weglowodany = $_POST['weglowodany'];
	$cukry = $_POST['cukry'];
	$blonnik = $_POST['blonnik'];
	$sol = $_POST['sol'];
	$bialko = $_POST['bialko'];
    $bialkog = $_POST['bialkog'];
	$sql = "SELECT nazwa FROM przepisy2 WHERE nazwa='$nazwa'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);	

		
	$sql = "INSERT INTO przepisy2(`id`, `nazwa`,`obrazek`,`skladniki`, `krok1`, `krok2`, `krok3`, `krok4`, `krok5`, `krok6`, `krok7`, `krok8`, `krok9`, `krok10`,`kategoria`,`energia`,`tluszcz`,`kwasyt`,`weglowodany`,`cukry`,`blonnik`,`bialko`,`sol`,`tluszczg`,`kwasytg`,`weglowodanyg`,`blonnikg`,`bialkog`,`solg`,`cukryg`,`kategoria_ogolna`,`dzien`,`przepis_nr`) 
	VALUES (NULL, '$nazwa','$new_img_name','$skladniki','$krok1','$krok2','$krok3','$krok4','$krok5','$krok6','$krok7','$krok8','$krok9','$krok10','$kategoria','$energia','$tluszcz','$kwasyt','$weglowodany','$cukry','$blonnik','$bialko','$sol','$tluszczg','$kwasytg','$weglowodanyg','$blonnikg','$bialkog','$solg','$cukryg','$kategoria_ogolna','$dzien','$przepis_nr')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);
	header("Location: dodajprzepis.php");


	if(isset($row))
	{
		echo '<div class="alert alert-success">Utworzono przepis</div>';
	}
}
?>

