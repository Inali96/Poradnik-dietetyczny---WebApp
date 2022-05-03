<?php

include('db.php');

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}


include("header.php");
include("menu.php");

?>

<section id="gotowe" class="shop-area section-padding">
	<div class="container">
		<div class="section-title">
			<br><br>
			<h2>Ulubione przepisy</h2>
		</div>
		<div class="row">
			

									<?php

									$sql ="SELECT * FROM ulubione,przepisy2 WHERE przepisy2.id = ulubione.id_przepisu AND ulubione.uzytkownik_login = '".$_SESSION["login"]."'";

									$result=mysqli_query($conn,$sql);
									if(mysqli_num_rows($result)>0 )
									{	
										while($row=mysqli_fetch_assoc($result))
										{
											$nazwa = $row["nazwa"];
											$obrazek = $row["obrazek"];
											$id=$row["id"];
												
											?>
											<div class="col-lg-4 col-md-6 blog-item wow fadeInLeft" data-wow-delay="0.2s">
						<div class="product-shop-item">
							<div class="item-image">
								<a href="wyswietlart.php?c=<?php echo $id?>" class="product-item-image-link"><img src="zdjecia_dodane/<?php echo $obrazek?>" alt="dodac-zdjecie"></a>
							</div>
							<div class="product-item-details">
								<h3><?php echo $nazwa?></h3>
								<a href="wyswietlart.php?c=<?php echo $id?>" class="button filter" >Otwórz</a>
							</div>
						</div>
					</div>
											<?php     
										}
										?>
										<?php
									}

									?>

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

