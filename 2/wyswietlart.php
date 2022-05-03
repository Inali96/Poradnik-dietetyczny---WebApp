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


$_SESSION['id'] = $_GET["c"];
$id=$_GET["c"];

$sql="SELECT * FROM przepisy2 WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {

        $nazwa = $row["nazwa"];
        $obrazek = $row["obrazek"];
        $skladniki = $row["skladniki"];

        $krok1=$row["krok1"];
        $krok2=$row["krok2"];
        $krok3=$row["krok3"];
        $krok4=$row["krok4"];
        $krok5=$row["krok5"];
        $krok6=$row["krok6"];
        $krok7=$row["krok7"];
        $krok8=$row["krok8"];
        $krok9=$row["krok9"];
        $krok10=$row["krok10"];
        $kategoria=$row["kategoria"];
        $energia=$row["energia"];
        $tluszczg = $row['tluszczg'];
        $kwasytg = $row['kwasytg'];
        $weglowodanyg = $row['weglowodanyg'];
        $cukryg = $row['cukryg'];
        $blonnikg = $row['blonnikg'];
        $solg = $row['solg'];
        $tluszcz = $row['tluszcz'];
        $kwasyt = $row['kwasyt'];
        $weglowodany = $row['weglowodany'];
        $cukry = $row['cukry'];
        $blonnik = $row['blonnik'];
        $bialko = $row['bialko'];
        $bialkog = $row['bialkog'];
        $sol = $row['sol'];
        $id=$row["id"];

?>


<section id="home" class="przepisy-area hero-equal-height section-padding overflow-hidden d-flex align-items-center ">

 <?php
        $sql = "SELECT * FROM przepisy2,ulubione WHERE ulubione.id_przepisu=$id AND ulubione.uzytkownik_login = '".$_SESSION["login"]."'";
        $result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 0) {?>
    <div class="click " id="dvContainer">
    <span class="fa fa-star-o"></span>
    <div class="ring"></div>
    <div class="ring2"></div>
    <p class="info">Dodano do ulubionych</p>
    </div>
    <?php
} else {?>
   <div class="click active active-2 active-3">
    <span class="fa fa-star"></span>
    <div class="ring"></div>
    <div class="ring2"></div>
    </div>
    <?php
}
?>  
    <div class="col-lg-12" style=" float: left; ">
        <div class="col-sm-12 home-content" >
           <h1 style="font-size:50px; padding-top: 40px;"><?php echo $nazwa; ?></h1> 
       </div>

       <div class="col-lg-5" style=" float: left;  padding-left: 5%;">
        <div class="col-sm-12" >
            <img style=" padding-left: 7%;" src="zdjecia_dodane/<?php echo $obrazek; ?>" class="img-responsive" alt="Image 1" >
        </div>

        <div class="col-sm-12 offset-sm-3 " >
            <a class="button" onclick="window.print()">Drukuj przepis</a>
            <a class="button" onclick="openNav()"> Opinie użytkowników</a>
        </div>


    </div>

    <div class="col-lg-6 home-content" style=" float:left; padding-left: 5%; margin-top: 50px;">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#skladniki" style="font-size:30px; margin: 30px;">Składniki</a></li>
          <li><a data-toggle="tab" href="#kroki" style="font-size:30px; margin: 30px;">Przygotowanie krok po kroku</a></li>
          <li><a data-toggle="tab" href="#wartosci" style="font-size:30px; margin: 30px;">Wartości odżywcze</a></li>
      </ul>

      <div class="tab-content" style="padding-top: 20px;" style="text-align:center;">
          <div id="skladniki" class="tab-pane active">
            <table class="table table-striped" style="color:white; font-size: 20px;">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Składniki i ilość</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><?php echo $skladniki; ?></th>
          </tr>
      </tbody>
  </table>
</div>
<div id="kroki" class="tab-pane fade" style="padding-top: 20px;">
    <div class="col-sm-12" >
        <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok1; ?></p>
    </div>
</div>
<br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok2; ?></p>
    </div>
</div>
<br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok3; ?></p>
    </div>
</div><br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok4; ?></p>
    </div>
</div><br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok5; ?></p>
    </div>
</div><br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok6; ?></p>
    </div>
</div><br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok7; ?></p>
    </div>
</div><br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok8; ?></p>
    </div>
</div><br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok9; ?></p>
    </div>
</div><br><br>
<div class="col-sm-12" >
    <div class="col-sm-12" style="float: left;" >
        <p style="font-size: 20px;"><?php echo $krok10; ?></p>
    </div>
</div>
</div>




<div id="wartosci" class="tab-pane fade" >
    <table class="table table-striped " style="color:white; font-size: 20px;">
       <thead class="thead-dark">
        <tr>
          <th scope="col"></th>
          <th scope="col">1 porcja</th>
          <th scope="col">% w porcji</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Energia</th>
      <td><?php echo $energia; ?></td>
      <td>-</td>
  </tr>
  <tr>
      <th scope="row">Tłuszcz</th>
      <td><?php echo $tluszczg ?> g</td>
      <td><?php echo $tluszcz ?> %</td>
  </tr>
  <tr>
      <th scope="row">w tym kwasy tłuszczowe nasycone</th>
      <td><?php echo $kwasytg ?> g</td>
      <td><?php echo $kwasyt ?> %</td>
  </tr>
  <tr>
      <th scope="row">Węglowodany</th>
     <td><?php echo $weglowodanyg ?> g</td>
      <td><?php echo $weglowodany ?> %</td>
  </tr>
  <tr>
      <th scope="row">w tym cukry</th>
      <td><?php echo $cukryg ?> g</td>
      <td><?php echo $cukry ?> %</td>
  </tr>
  <tr>
      <th scope="row">Błonnik</th>
      <td><?php echo $blonnikg ?> g</td>
      <td><?php echo $blonnik ?> %</td>
  </tr>
  <tr>
      <th scope="row">Białko</th>
      <td><?php echo $bialkog;?> g</td>
      <td><?php echo $bialko ?> %</td>
  </tr>
  <tr>
      <th scope="row">Sól</th>
      <td><?php echo $solg ?> g</td>
      <td><?php echo $sol ?> %</td>
  </tr>
</tbody>
</table>
</div>
</div>
</div>

<div id="mySidebar" class="sidebar text-center">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="demo-container" style="color: black;">
    <form action=" " id="frmComment" method="post">
      <input id="name" type="hidden" name="user" value="<?php echo $imie?>" readonly > 
     
      <div class="row">
       <h5><?php echo $nazwa?> - podziel się swoją opinią</h5>
        <textarea class="form-field" id="message" name="message" rows="4" placeholder="Twój komentarz.."></textarea>
        
      </div>
      <div class="row">
        <input type="hidden" name="add" value="post" />
        <button type="submit" name="submit" id="submit" class="button" >Dodaj komentarz</button>
         
        
        <img src="LoaderIcon.gif" id="loader" />
      </div>
    </form>
<?php

$id_przepisu = $_SESSION['id'];

$sql_sel = "SELECT * FROM komentarze WHERE komentarze.id_przepisu=$id_przepisu ORDER BY id_kom DESC";
$result = $conn->query($sql_sel);
$count = $result->num_rows;

    if($count > 0) {
?>
        <div id="comment-count"style="color: white">
        <span id="count-number" ><?php echo $count;?></span> Komentarz(y)
        </div>
<?php } ?>
    <div id="response">
<?php
while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
{
?>
      <div id="comment-<?php echo $row["id_kom"];?>" class="comment-row">
       <div class="comment-user text-success">Od: <?php echo $row["username"];?></div></a><div style="font-size:20px; color: grey"><?php echo $row["date"];?></div>
        <div class="comment-msg"style="font-size: 20px; color: white;" id="msgdiv-<?php echo $row["id_kom"];?>"><?php echo $row["message"];?></div>

 <?php 
 if(isset($_SESSION["rola"]) && $_SESSION["rola"]=='A')
 {
 ?>   
        <div class="delete" name="delete" id="delete-<?php echo $row["id_kom"];?>"
          onclick="deletecomment(<?php echo $row["id_kom"];?>)">Usuń komentarz</div>
      </div>
      <?php 
  }
      ?>
</div>
<?php 
}
?>
    </div>
  </div>
</div>

</section>

<?php
    }
}else

mysqli_close($conn);

include("footer.php");

?>

