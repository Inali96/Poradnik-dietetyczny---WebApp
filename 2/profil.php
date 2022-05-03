<?php

include('db.php');

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}

$query = "
SELECT * FROM uzytkownicy2 
WHERE login = '".$_SESSION["login"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
	$imie = $row['imie'];
	$email = $row['email'];
	$wiek = $row['wiek'];
	$wzrost = $row['wzrost'];
	$waga = $row['waga'];
	$obwod_talii = $row['obwod_talii'];
	$bmi = $row['bmi'];
	$kalorie = $row['kalorie'];
	$tluszcz = $row['tluszcz'];
	$dieta = $row['dieta'];
	$link = $row['link'];
	$cel = $row['cel'];
	$aktywnosc = $row['aktywnosc'];
}
include("header.php");
include("menu.php");

?>

<section id="home" class="home-area hero-equal-height section-padding overflow-hidden d-flex align-items-center">
	<div class="row justify-content-center">
		<div class="col-lg-5">
			<div class="container ">
				<div class="row align-items-center">
					<div class="text-center home-content z-index position-relative">
						<div class="login-container">
							<div class="container">
								<h1 style="font-size: 40px;">Edycja profilu</h1>
								<div class="panel-body">
									<br><br><br>
									<form method="post" id="edit_profile_form">
										<span id="message2" class="text-center"></span>
										<div class="form-group ">
											<label>Imię</label>
											<input type="text" name="imie" id="imie" class="form-control text-center" value="<?php echo $imie; ?>" required />
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" id="email" class="form-control text-center" required value="<?php echo $email; ?>" />
										</div>
										<hr />
										<label>Zostaw pola haseł puste, jeżeli nie chcesz zmieniać aktualnego hasła</label>
										<div class="form-group">
											<label>Nowe hasło</label>
											<input type="password" name="user_new_password" id="user_new_password" class="form-control text-center"  />
										</div>
										<div class="form-group">
											<label>Powtórz nowe hasło</label>
											<input type="password" name="user_re_enter_password" id="user_re_enter_password" class="form-control text-center" />
											<span id="error_password"></span>	
										</div>
										<div class="form-group">
											<input type="submit" name="edit_prfile" id="edit_prfile" value="Zmień dane" class="button" />
										</div>
							</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="container ">
				<div class="row align-items-center">
					<div class="text-center home-content z-index position-relative">
						<div class="login-container">
							<div class="container">
								<h1 style="font-size: 40px;">Dane zapisane przy użyciu<a href="index.php#kalku"> kalkulatorów</a></h1>
									<div class="col-lg-12 offset-md-1">
										<div class="row align-items-center">
									<div class="panel-body" >
										<div class="form-group">
											<label >Wiek</label>
											<input type="text"  class="form-control" style="background-color:grey; text-align:center; color: white;" value="<?php echo $wiek; ?>" readonly/>
										</div>
										<div class="form-group">
											<label>Wzrost</label>
											<input type="text"  class="form-control" style="background-color:grey; text-align:center; color: white;" value="<?php echo $wzrost; ?>" readonly/>
										</div>
										<div class="form-group">
											<label>Waga</label>
											<input type="text"   class="form-control" style="background-color:grey; text-align:center; color: white;" value="<?php echo $waga; ?>" readonly />
										</div>
										<div class="form-group">
											<label>Obwód talii</label>
											<input type="text"  id="obwod_talii" class="form-control" style="background-color:grey; text-align:center; color: white;"  value="<?php echo $obwod_talii; ?>" readonly/>
										</div>
										<div class="form-group">
											<label>BMI</label>
											<input type="text"  id="bmi" class="form-control" style="background-color:grey; text-align:center; color: white;"  value="<?php echo $bmi; ?>"  readonly/>
										</div>
									</div>
									<div class="col-lg-6 ">
									
										<div class="form-group">
											<label>% tłuszczu w ciele</label>
											<input type="text"  id="tluszcz" class="form-control" style="background-color:grey; text-align:center; color: white;"  value="<?php echo $tluszcz; ?>" readonly/>
										</div>
										<div class="form-group">
											<label>Zapotrzebowanie na kalorie</label>
											<input type="text"  id="kalorie" class="form-control" style="background-color:grey; text-align:center; color: white;"  value="<?php echo $kalorie; ?> /dzień"  readonly/>
										</div>
										<div class="form-group">
											<label>Cel treningowy</label>
											<input type="text" class="form-control" style="background-color:grey; text-align:center; color: white;"  value="<?php echo $cel; ?>"  readonly/>
										</div>
										<div class="form-group">
											<label>Aktywnosc fizyczna</label>
											<input type="text" class="form-control" style="background-color:grey; text-align:center; color: white;"  value="<?php echo $aktywnosc; ?>"  readonly/>
										</div>
										<div class="form-group">
											<label>Kaloryczność dobranej diety</label>
											<input type="text" class="form-control" style="background-color:grey; text-align:center; color: white;"  value="<?php echo $dieta; ?> kcal"   readonly/>
										</div>
										<div class="form-group">
											<a href="<?php echo $link?>"  class="button">Dobrana dieta</a>
										</div>
									</div>
									</div>
								</div>
							</div>

							<div class="col-md-6 text-center">
                           <?php if($wiek == NULL || $waga==NULL || $wzrost==NULL|| $obwod_talii==NULL || $bmi==NULL||$tluszcz==NULL||$kalorie==NULL||$dieta==NULL) {  ?>
                             <label class="text-warning">Możesz zapisać swoje dane w profilu po wypełnieniu formularza dobierania diety lub <a href="index.php#kalku">kalkulatorów </a>znajdujących się na stronie.</label>
                              <?php }?>
                 		   </div>  
                 		    
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
</div>
</div>
</section>

<?php
include("footer.php");
?>


<script>

	$(document).ready(function(){
		$('#edit_profile_form').on('submit', function(event){
			event.preventDefault();
			if($('#user_new_password').val() != '')
			{
				if($('#user_new_password').val() != $('#user_re_enter_password').val())
				{
					$('#error_password').html('<label class="text-danger">Hasła się nie zgadzają</label>');
					return false;
				}
				else
				{
					$('#error_password').html('');
				}
			}
			$('#edit_prfile').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$('#user_re_enter_password').attr('required',false);
			$.ajax({
				url:"edytuj_profil.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#edit_prfile').attr('disabled', false);
					$('#user_new_password').val('');
					$('#user_re_enter_password').val('');
					
					$('#message2').html(data);
				}
			})
		});
	});

	
</script>


