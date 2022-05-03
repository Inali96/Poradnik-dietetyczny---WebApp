<?php
include("db.php");

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}



include("header.php");
include("menu.php");
?>
<section id="gotowe" class="shop-area section-padding">
    <div class="container">
        <div class="section-title"><br><br>
            <h2>Diety 7-dniowe: 1200kcal</h2>
        </div>

           <nav class="navbar">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent!important;">
              <li class="breadcrumb-item"><a href="index.php#gotowe">Strona główna</a></li>
              <li class="breadcrumb-item"><a href="#">Diety 7-dniowe: 1200kcal</a></li>
            </ol>
          </nav>
        </div>
      </nav>
        <div class="row">
            <div class="col-md-12">
                <div id="product-shop-slide" class="owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="product-shop-item">
                        <div class="product-item-content">
                            <div class="item-image">
                                <a href="dieta1200p1.php" class="product-item-image-link"><img src="zdjecia/dieta1200.webp" alt="shop-image"></a>
                            </div>
                            <div class="product-item-details">
                                <h3>Dieta 1200kcal</h3>
                                <a href="dieta1200p1.php" class="button filter filter-active" data-filter=".all"><i class="fa fa-bars"></i>Otwórz</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="product-shop-item">
                        <div class="product-item-content">
                            <div class="item-image">
                                <a href="dieta1200p3.php" class="product-item-image-link"><img src="zdjecia/dieta1200_4.jpg" alt="shop-image"></a>
                            </div>
                            <div class="product-item-details">
                                <h3>Dieta 1200kcal, bez mięsa</h3>
                                <a href="dieta1200p3.php" class="button"><i class="fa fa-bars"></i>Otwórz</a><!--logowanie aby zobaczyc-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-shop-item">
                        <div class="product-item-content">
                            <div class="item-image">
                                <a href="dieta1200p4.php" class="product-item-image-link"><img src="zdjecia/dieta1200_3.jpg" alt="shop-image"></a>
                            </div>
                            <div class="product-item-details">
                                <h3>Dieta 1200kcal, bez laktozy</h3>
                                <a href="dieta1200p4.php" class="button"><i class="fa fa-bars"></i>Otwórz</a><!--logowanie aby zobaczyc-->
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