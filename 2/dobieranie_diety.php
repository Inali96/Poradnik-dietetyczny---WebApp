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
<section id="przepisy" class="gallery-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h5></h5>
                    <h2>Dieta 1200 kcal</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-list">
                    <ul class="nav" id="gallery-flters">
                        <li class="filter filter-active" data-filter=".all">Wszystkie przepisy</li>
                        <li class="filter" data-filter=".1">Dzień 1</li>
                         <li class="filter" data-filter=".2">Dzień 2</li>
                         <li class="filter" data-filter=".3">Dzień 3</li>
                         <li class="filter" data-filter=".4">Dzień 4</li>
                         <li class="filter" data-filter=".5">Dzień 5</li>
                         <li class="filter" data-filter=".6">Dzień 6</li>
                         <li class="filter" data-filter=".7">Dzień 7</li>
                    </ul>
                </div>
            </div>
            <div class="gallery-container">
<?php
$sql ="SELECT * FROM przepisy2 WHERE  dzien='1' && kategoria_ogolna='1200'  ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
	while($row=mysqli_fetch_assoc($result))
	{
		$nazwa = $row["nazwa"];
		$obrazek = $row["obrazek"];
		$id=$row["id"];
        ?>
               <div class="col-lg-4 col-md-6 gallery-grid-item all 1">
                <div class="gallery-item">
                    <div>
                        <div style="text-align: center;">
                            <h5><a href="wyswietlart.php?c=<?php echo $id?>"><?php echo $nazwa?></a></h5>
                        </div>
                        <a>
                            <img src="zdjecia_dodane/<?php echo $obrazek?>" alt="" />
                        </a>
                    </div>
                    <div>
                    </div>
                </div>
      </div>

        <?php     
	}
}
?>
<?php
$sql ="SELECT * FROM przepisy2 WHERE  dzien='2' && kategoria_ogolna='1200' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
    while($row=mysqli_fetch_assoc($result))
    {
        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $id=$row["id"];
        ?>
               <div class="col-lg-4 col-md-6 gallery-grid-item all 2">
                <div class="gallery-item">
                    <div>
                        <div style="text-align: center;">
                            <h5><a href="wyswietlart.php?c=<?php echo $id?>"><?php echo $nazwa?></a></h5>
                        </div>
                        <a>
                            <img src="zdjecia_dodane/<?php echo $obrazek?>" alt="" />
                        </a>
                    </div>
                    <div>
                    </div>
                </div>
      </div>

         
        <?php     
    }
 ?>

      <?php

}

?>
<?php
$sql ="SELECT * FROM przepisy2 WHERE  dzien='3' && kategoria_ogolna='1200' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
    while($row=mysqli_fetch_assoc($result))
    {
        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $id=$row["id"];
        ?>
               <div class="col-lg-4 col-md-6 gallery-grid-item all 3">
                <div class="gallery-item">
                    <div>
                        <div style="text-align: center;">
                            <h5><a href="wyswietlart.php?c=<?php echo $id?>"><?php echo $nazwa?></a></h5>
                        </div>
                        <a>
                            <img src="zdjecia_dodane/<?php echo $obrazek?>" alt="" />
                        </a>
                    </div>
                    <div>
                    </div>
                </div>
      </div>

         
        <?php     
    }
 ?>

      <?php

}

?>

<?php
$sql ="SELECT * FROM przepisy2 WHERE  dzien='4' && kategoria_ogolna='1200' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
    while($row=mysqli_fetch_assoc($result))
    {
        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $id=$row["id"];
        ?>
               <div class="col-lg-4 col-md-6 gallery-grid-item all 4">
                <div class="gallery-item">
                    <div>
                        <div style="text-align: center;">
                            <h5><a href="wyswietlart.php?c=<?php echo $id?>"><?php echo $nazwa?></a></h5>
                        </div>
                        <a>
                            <img src="zdjecia_dodane/<?php echo $obrazek?>" alt="" />
                        </a>
                    </div>
                    <div>
                    </div>
                </div>
      </div>

         
        <?php     
    }
 ?>

      <?php

}

?>
<?php
$sql ="SELECT * FROM przepisy2 WHERE  dzien='5' && kategoria_ogolna='1200' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
    while($row=mysqli_fetch_assoc($result))
    {
        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $id=$row["id"];
        ?>
               <div class="col-lg-4 col-md-6 gallery-grid-item all 5">
                <div class="gallery-item">
                    <div>
                        <div style="text-align: center;">
                            <h5><a href="wyswietlart.php?c=<?php echo $id?>"><?php echo $nazwa?></a></h5>
                        </div>
                        <a>
                            <img src="zdjecia_dodane/<?php echo $obrazek?>" alt="" />
                        </a>
                    </div>
                    <div>
                    </div>
                </div>
      </div>

         
        <?php     
    }
 ?>

      <?php

}

?>
<?php
$sql ="SELECT * FROM przepisy2 WHERE dzien='6' && kategoria_ogolna='1200' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
    while($row=mysqli_fetch_assoc($result))
    {
        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $id=$row["id"];
        ?>
               <div class="col-lg-4 col-md-6 gallery-grid-item all 6">
                <div class="gallery-item">
                    <div>
                        <div style="text-align: center;">
                            <h5><a href="wyswietlart.php?c=<?php echo $id?>"><?php echo $nazwa?></a></h5>
                        </div>
                        <a>
                            <img src="zdjecia_dodane/<?php echo $obrazek?>" alt="" />
                        </a>
                    </div>
                    <div>
                    </div>
                </div>
      </div>

         
        <?php     
    }
 ?>

      <?php

}

?>
<?php
$sql ="SELECT * FROM przepisy2 WHERE dzien='7' && kategoria_ogolna='1200' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
    while($row=mysqli_fetch_assoc($result))
    {
        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $id=$row["id"];
        ?>
               <div class="col-lg-4 col-md-6 gallery-grid-item all 7">
                <div class="gallery-item">
                    <div>
                        <div style="text-align: center;">
                            <h5><a href="wyswietlart.php?c=<?php echo $id?>"><?php echo $nazwa?></a></h5>
                        </div>
                        <a>
                            <img src="zdjecia_dodane/<?php echo $obrazek?>" alt="" />
                        </a>
                    </div>
                    <div>
                    </div>
                </div>
      </div>

         
        <?php     
    }
 ?>

      <?php

}

?>
           
      <?php
mysqli_close($conn);
?>  
</section>
<?php
include("footer.php");

?>