<?php
include("db.php");

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}
include("header.php");
include("menu.php");

$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
        
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql ="SELECT * FROM dieta,przepisy2 WHERE  przepisy2.przepis_nr = dieta.id_diety AND przepisy2.kategoria_ogolna=dieta.kalorycznosc && przepis_nr='10'";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
    while($row=mysqli_fetch_assoc($result))
    {
        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $id_diety=$row["id_diety"];
        $nazwa_diety = $row["nazwa_diety"];

}
$_SESSION['id_diety'] = $id_diety;
}

        ?>

<section id="przepisy" class="gallery-area section-padding">
  <?php
  $sql ="SELECT * FROM ulubione_diety WHERE ulubione_diety.dieta_id=$id_diety AND ulubione_diety.login = '".$_SESSION["login"]."'";
  $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 0) {?>
    <div class="click2">
    <span class="fa fa-star-o"></span>
    <div class="ring"></div>
    <div class="ring2"></div>
    <p class="info">Dodano do ulubionych</p>
    </div>
    <?php
} else {?>
   <div class="click2 active active-2 active-3">
    <span class="fa fa-star"></span>
    <div class="ring"></div>
    <div class="ring2"></div>
    </div>
    <?php
}
?>
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <h1 style="font-family: 'Kaushan Script';"><?php echo $nazwa_diety?></h1>
                </div>
            </div><nav class="navbar">
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="background-color: transparent!important;">
                            <li class="breadcrumb-item"><a href="index.php#gotowe">Strona główna</a></li>
                            <li class="breadcrumb-item"><a href="dieta2000.php">Diety 7-dniowe: 2000kcal</a></li>
                        </ol>
                    </nav>
                </div>
            </nav>
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


$sql ="SELECT * FROM dieta,przepisy2 WHERE  przepisy2.przepis_nr = dieta.id_diety AND przepisy2.kategoria_ogolna=dieta.kalorycznosc && przepis_nr='10' && dzien='1' ";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0 )
{
    while($row=mysqli_fetch_assoc($result))
    {
        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $id=$row["id"];
        $id_diety=$row["id_diety"];
        $nazwa_diety = $row["nazwa_diety"];
        $kategoria = $row["kategoria"]
        ?>
               <div class="col-lg-4 col-md-6 gallery-grid-item all 1">
                <div class="gallery-item">
                        <div class="zdjecie" style="background-image: url(zdjecia_dodane/<?php echo $obrazek?>); a hr ">
                          <a href="wyswietlart.php?c=<?php echo $id?>"><h7 class="nazwa text-center"><?php echo $nazwa?></h7></a>
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
$sql ="SELECT * FROM dieta,przepisy2 WHERE  przepisy2.przepis_nr = dieta.id_diety AND przepisy2.kategoria_ogolna=dieta.kalorycznosc && przepis_nr='10'  && dzien='2' ";
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
                        <div class="zdjecie" style="background-image: url(zdjecia_dodane/<?php echo $obrazek?>); a hr ">
                          <a href="wyswietlart.php?c=<?php echo $id?>"><h7 class="nazwa text-center"><?php echo $nazwa?></h7></a>
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
$sql ="SELECT * FROM dieta,przepisy2 WHERE  przepisy2.przepis_nr = dieta.id_diety AND przepisy2.kategoria_ogolna=dieta.kalorycznosc&& przepis_nr='10' && dzien='3' ";
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
                        <div class="zdjecie" style="background-image: url(zdjecia_dodane/<?php echo $obrazek?>); a hr ">
                          <a href="wyswietlart.php?c=<?php echo $id?>"><h7 class="nazwa text-center"><?php echo $nazwa?></h7></a>
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
$sql ="SELECT * FROM dieta,przepisy2 WHERE  przepisy2.przepis_nr = dieta.id_diety AND przepisy2.kategoria_ogolna=dieta.kalorycznosc && przepis_nr='10' && dzien='4' ";
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
                        <div class="zdjecie" style="background-image: url(zdjecia_dodane/<?php echo $obrazek?>); a hr ">
                          <a href="wyswietlart.php?c=<?php echo $id?>"><h7 class="nazwa text-center"><?php echo $nazwa?></h7></a>
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
$sql ="SELECT * FROM dieta,przepisy2 WHERE  przepisy2.przepis_nr = dieta.id_diety AND przepisy2.kategoria_ogolna=dieta.kalorycznosc && przepis_nr='10' && dzien='5' ";
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
                        <div class="zdjecie" style="background-image: url(zdjecia_dodane/<?php echo $obrazek?>); a hr ">
                          <a href="wyswietlart.php?c=<?php echo $id?>"><h7 class="nazwa text-center"><?php echo $nazwa?></h7></a>
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
$sql ="SELECT * FROM dieta,przepisy2 WHERE  przepisy2.przepis_nr = dieta.id_diety AND przepisy2.kategoria_ogolna=dieta.kalorycznosc && przepis_nr='10' && dzien='6' ";
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
                        <div class="zdjecie" style="background-image: url(zdjecia_dodane/<?php echo $obrazek?>); a hr ">
                          <a href="wyswietlart.php?c=<?php echo $id?>"><h7 class="nazwa text-center"><?php echo $nazwa?></h7></a>
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
$sql ="SELECT * FROM dieta,przepisy2 WHERE  przepisy2.przepis_nr = dieta.id_diety AND przepisy2.kategoria_ogolna=dieta.kalorycznosc && przepis_nr='10' && dzien='7' ";
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
                        <div class="zdjecie" style="background-image: url(zdjecia_dodane/<?php echo $obrazek?>); a hr ">
                          <a href="wyswietlart.php?c=<?php echo $id?>"><h7 class="nazwa text-center"><?php echo $nazwa?></h7></a>
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
