<?php
include("db.php");
include("header.php");
include("menu.php");
?>

<section class="home-area ">

    <div class="col-lg-12" style=" float: left; ">

        <div class="col-sm-12 home-content" >
           <h1 style="font-size:50px; padding-top: 40px;">Płatki owsiane na mleku z jabłkiem</h1> 
       </div>

       <div class="col-lg-5" style=" float: left;  padding-left: 5%;">
        <div class="col-sm-12" >

          <nav class="navbar">
            <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: transparent!important;">
                  <li class="breadcrumb-item"><a href="index.php">Strona główna</a></li>
                  <li class="breadcrumb-item"><a href="dieta1200.php">Dieta 1200kcal</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="1sniadanie1200.php">Śniadanie</a></li>
                </ol>
              </nav>
            </div>
          </nav>

            <img style=" padding-left: 7%;" src="zdjecia/dowymiany1.webp" class="img-responsive" alt="Image 1" >
        </div>

        <div class="col-sm-12" >
            <a class="button" onclick="window.print()">Drukuj przepis</a>
            <a href="pdf/1sniadanie1200.pdf" class="button" download>Pobierz PDF</a>
            <a class="button" onclick="openNav()"> Opinie użytkowników</a>
        </div>


    </div>

    <div class="col-lg-6" style=" float:left; padding-left: 5%; margin-top: 50px;">

        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home" style="font-size:30px; margin: 30px;">Składniki</a></li>
          <li><a data-toggle="tab" href="#menu1" style="font-size:30px; margin: 30px;">Przygotowanie krok po kroku</a></li>
          <li><a data-toggle="tab" href="#menu2" style="font-size:30px; margin: 30px;">Wartości odżywcze</a></li>
      </ul>

      <div class="tab-content" style="padding-top: 20px;">
          <div id="home" class="tab-pane active">
            <table class="table table-striped" style="color:white; font-size: 20px;">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Ilość</th>
                  <th scope="col">Składniki</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">40 gram</th>
              <td>płatki owsiane zwykłe</td>
          </tr>
          <tr>
              <th scope="row">125 ml</th>
              <td>mleko 1,5% tłuszczu</td>
          </tr>
          <tr>
              <th scope="row">1 sztuka</th>
              <td colspan="2">małe jabłko</td>
          </tr>
          <tr>
              <th scope="row">1 łyżeczka</th>
              <td colspan="2">cynamon</td>
          </tr>
      </tbody>
  </table>
</div>
<div id="menu1" class="tab-pane fade" style="padding-top: 20px;">
    <div class="col-sm-12" >
        <div class="col-sm-8" style="float: left;" >
        <h4 style="font-size: 30px;">Krok 1</h4>
        <p style="font-size: 20px;">Płatki zalać wrzącą wodą do poziomu powierzchni płatków i odczekać kilka minut, aż zmiękną.</p>
    </div>
    <div class="col-sm-3" style="float:left;">
        <img src="zdjecia/dowymiany16.webp" class="img-responsive" alt="Image 1" >
    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <h4 style="font-size: 30px;">Krok 2</h4>
        <p style="font-size: 20px;">Dodać mleko, pokrojone w kostkę kawałki jabłka, wymieszać i posypać cynamonem.</p>
    </div>
    <div class="col-sm-3" style="float: left;">
        <img src="zdjecia/dowymiany17.webp" class="img-responsive" alt="Image 1" >

    </div>
</div>
</div>
<div id="menu2" class="tab-pane fade" >
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
      <td>1075.3 kJ / 257 Kcal</td>
      <td>-</td>
  </tr>
  <tr>
      <th scope="row">Tłuszcz</th>
      <td>5.2 g</td>
      <td>7%</td>
  </tr>
  <tr>
      <th scope="row">w tym kwasy tłuszczowe nasycone</th>
      <td>1.8 g</td>
      <td>9%</td>
  </tr>
  <tr>
      <th scope="row">Węglowodany</th>
      <td>47.4 g</td>
      <td>18%</td>
  </tr>
  <tr>
      <th scope="row">w tym cukry</th>
      <td>10.2 g</td>
      <td>11%</td>
  </tr>
  <tr>
      <th scope="row">Błonnik</th>
      <td>4.9 g</td>
      <td>-</td>
  </tr>
  <tr>
      <th scope="row">Białko</th>
      <td>9.6 g</td>
      <td>19%</td>
  </tr>
  <tr>
      <th scope="row">Sól</th>
      <td>0.2 g</td>
      <td>3%</td>
  </tr>
</tbody>
</table>
</div>
</div>
</div>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="demo-container" style="color: black;">
    <form action=" " id="frmComment" method="post">
      <div class="row">
        <span id="name-info"></span><input class="form-field" id="name"
          type="hidden" name="user" value="<?php echo $imie?>" readonly > 
      </div>
      <div class="row">
       <h5>Podziel się z innymi swoją opinią na temat poradnika dietetycznego !</h5>
        <textarea class="form-field" id="message" name="message" rows="4" placeholder="Twój komentarz.."></textarea>
        
      </div>
      <div class="row">
        <input type="hidden" name="add" value="post" />
        <button type="submit" name="submit" id="submit" class="button">Dodaj komentarz</button>
        <img src="LoaderIcon.gif" id="loader" />
      </div>
    </form>
<?php


$sql_sel = "SELECT * FROM tbl_user_comments ORDER BY id DESC";
$result = $conn->query($sql_sel);
$count = $result->num_rows;

    if($count > 0) {
?>
        <div id="comment-count">
        <span id="count-number"><?php echo $count;?></span> Komentarz(y)
        </div>
<?php } ?>
    <div id="response">
<?php
while ($row = $result->fetch_array(MYSQLI_ASSOC)) // using prepared staement
{
?>
      <div id="comment-<?php echo $row["id"];?>" class="comment-row">
       <div class="comment-user text-success">Od: <?php echo $row["username"];?></div></a><div style="font-size:20px; color: grey"><?php echo $row["date"];?></div>
        <div class="comment-msg"style="font-size: 20px" id="msgdiv-<?php echo $row["id"];?>"><?php echo $row["message"];?></div>
        <div class="delete" name="delete"
          id="delete-<?php echo $row["id"];?>"
          onclick="deletecomment(<?php echo $row["id"];?>)">Usuń komentarz</div>
      </div>
<?php 
}
?>
    </div>
  </div>
</div>

</section>

 


<?php

include("footer.php");


//Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}



mysqli_close($conn);
?>