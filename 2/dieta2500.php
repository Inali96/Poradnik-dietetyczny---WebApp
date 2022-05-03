<?php
include("db.php");

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}
include("header.php");
include("menu.php");
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
<nav class="navbar">
  <div class="container-fluid">
    
  </div>
</nav>
<section id="gotowe" class="shop-area section-padding">
    <div class="container">
        <div class="section-title"><br><br>
            <h2>Diety 7-dniowe: 2500kcal</h2>
        </div>

        <nav class="navbar">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent!important;">
              <li class="breadcrumb-item"><a href="index.php#gotowe">Strona główna</a></li>
              <li class="breadcrumb-item"><a href="#">Diety 7-dniowe: 2500kcal</a></li>
            </ol>
          </nav>
        </div>
      </nav>

        <div class="row">
            <div class="col-md-12">
                <div id="product-shop-slide" class="owl-carousel owl-theme owl-loaded owl-drag">
                    <!-- shop item -->
                    <div class="product-shop-item">
                        <div class="product-item-content">
                            <div class="item-image">
                                <a href="dieta2500p11.php" class="product-item-image-link"><img src="zdjecia/dieta2500.jpg" alt="shop-image"></a>
                            </div>
                            <div class="product-item-details">
                                <h3>Dieta 2500kcal</h3>
                                <a href="dieta2500p11.php" class="button filter filter-active" data-filter=".all"><i class="fa fa-bars"></i>Otwórz</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-shop-item">
                        <div class="product-item-content">
                            <div class="item-image">
                                <a href="dieta2500p12.php" class="product-item-image-link"><img src="zdjecia/dieta2500_2.jpg" alt="shop-image"></a>
                            </div>
                            <div class="product-item-details">
                                <h3>Dieta 2500kcal bez mięsa</h3>
                                <a href="dieta2500p12.php" class="button"><i class="fa fa-bars"></i>Otwórz</a><!--logowanie aby zobaczyc-->
                            </div>
                        </div>
                    </div>
                  
                    <div class="product-shop-item">
                        <div class="product-item-content">
                            <div class="item-image">
                                <a href="dieta2500p13.php" class="product-item-image-link"><img src="zdjecia/dieta2500_3.jpg" alt="shop-image"></a>
                            </div>
                            <div class="product-item-details">
                                <h3>Dieta 2500kcal bez laktozy</h3>
                                <a href="dieta2500p13.php" class="button"><i class="fa fa-bars"></i>Otwórz</a><!--logowanie aby zobaczyc-->
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