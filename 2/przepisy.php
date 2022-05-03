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

?>
<section id="przepisy" class="gallery-area section-padding">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12"><br><br>
                <div class="section-title">
                    <h5></h5>
                    <h2>Wszystkie przepisy</h2>
                </div>
                <nav class="navbar">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent!important;">
              <li class="breadcrumb-item"><a href="index.php#przepisy">Strona główna</a></li>
              <li class="breadcrumb-item"><a href="#">Wszystkie przepisy</a></li>
            </ol>
          </nav>
        </div>
      </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-list">
                    <ul class="nav" id="gallery-flters">
                        <li class="filter filter-active" data-filter=".all">Wszystkie przepisy</li>
                        <li class="filter" data-filter=".s1">Śniadanie</li>
                        <li class="filter" data-filter=".s2">Drugie śniadanie</li>
                        <li class="filter" data-filter=".obiad">Obiad</li>
                        <li class="filter" data-filter=".podwieczorek">Podwieczorek</li>
                        <li class="filter" data-filter=".kolacja">Kolacja</li>
                    </ul>
                </div>
            </div>
            <div class="gallery-container">

                <?php
                $sql ="SELECT * FROM przepisy2 WHERE kategoria='sniadanie'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0 )
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $nazwa = $row["nazwa"];
                        $obrazek = $row["obrazek"];
                        $id=$row["id"];
                        ?>
                        <div class="col-lg-4 col-md-6 gallery-grid-item all s1 ">
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
                $sql ="SELECT * FROM przepisy2 WHERE kategoria='sniadanie2'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0 )
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $nazwa = $row["nazwa"];
                        $obrazek = $row["obrazek"];
                        $id=$row["id"];
                        ?>
                        <div class="col-lg-4 col-md-6 gallery-grid-item all s2 ">
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
                $sql ="SELECT * FROM przepisy2 WHERE kategoria='obiad' ";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0 )
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $nazwa = $row["nazwa"];
                        $obrazek = $row["obrazek"];
                        $id=$row["id"];
                        ?>
                        <div class="col-lg-4 col-md-6 gallery-grid-item all obiad">
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
                $sql ="SELECT * FROM przepisy2 WHERE  kategoria='podwieczorek'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0 )
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $nazwa = $row["nazwa"];
                        $obrazek = $row["obrazek"];
                        $id=$row["id"];
                        ?>
                        <div class="col-lg-4 col-md-6 gallery-grid-item all podwieczorek">
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
                $sql ="SELECT * FROM przepisy2 WHERE  kategoria='kolacja'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0 )
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $nazwa = $row["nazwa"];
                        $obrazek = $row["obrazek"];
                        $id=$row["id"];
                        ?>
                        <div class="col-lg-4 col-md-6 gallery-grid-item all kolacja">
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
                }
                ?>

            </div>
        </div>
    </section>
    <?php
include("footer.php");

?>
