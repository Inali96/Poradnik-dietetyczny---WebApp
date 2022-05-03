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
			<h2>Ulubione diety</h2>
		</div>
		<div class="row">
			


			<?php

			$sql ="SELECT * FROM ulubione_diety,dieta WHERE dieta.id_diety = ulubione_diety.dieta_id AND ulubione_diety.login = '".$_SESSION["login"]."'";

			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0 )
			{
				while($row=mysqli_fetch_assoc($result))
				{ 
					$id_diety = $row["id_diety"];
					$nazwa_diety=$row["nazwa_diety"];
					$kalorycznosc=$row["kalorycznosc"];
					$zdjecie=$row["zdjecie"];

					?>
					
					<div class="col-lg-4 col-md-6 blog-item wow fadeInLeft" data-wow-delay="0.2s">
						<div class="product-shop-item">
							<div class="item-image">
								<a href="dieta<?php echo $kalorycznosc?>p<?php echo $id_diety?>.php" class="product-item-image-link"><img src="zdjecia/<?php echo $zdjecie?>" ></a>
							</div>
							<div class="product-item-details">
								<h3> <?php echo $nazwa_diety?></h3>
								<a href="dieta<?php echo $kalorycznosc?>p<?php echo $id_diety?>.php" class="button filter" >Otwórz</a>
							</div>
						</div>
					</div>
					<?php     
				}
				?>
				<?php
			}

			?>



		</section>


		<?php
		include("footer.php");
		?>





