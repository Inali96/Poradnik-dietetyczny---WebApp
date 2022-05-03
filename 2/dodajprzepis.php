 <?php

include("db.php");

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}
include("header.php");
include("menu.php");
?>

<section class="home-area ">
<br><br>
    <div class="col-lg-12" style=" float: left; ">
<span id="message"></span>
<form class="form-signin" method="post" id="dodajprzepis-form" action="dodajprzepis_2.php" enctype="multipart/form-data">
        <div class="col-sm-3 offset-lg-4 home-content" >
           <input type="text" class="form-control" placeholder="Nazwa przepisu" name="nazwa" style="text-align: center;" />
            <select name="przepis_nr" id="przepis_nr" style="color: black">
                <option value="1">Dieta 1200kcal</option>
                <option value="3">Dieta 1200kcal, bez mięsa</option>
                <option value="4">Dieta 1200kcal, bez laktozy </option>
                <option value="5">Dieta 1500kcal </option>
                <option value="6">Dieta 1500kcal, bez mięsa</option>
                <option value="7">Dieta 1500kcal, bez laktozy</option>
                <option value="8">Dieta 2000kcal </option>
                <option value="9">Dieta 2000kcal, bez mięsa </option>
                <option value="10">Dieta 2000kcal, bez laktozy</option>
                <option value="11">Dieta 2500kcal</option>
                <option value="12">Dieta 2500kcal, bez mięsa </option>
                <option value="13">Dieta 2500kcal, bez laktozy </option>
            </select>
         <br>
         
       </div>
              </div>
       <div class="col-lg-5" style=" float: left;  padding-left: 5%;">
       <br><br><br><br><br>
            <label for="kategoria_ogolna">Wybierz kategorię kaloryczną:</label>
                  <select name="kategoria_ogolna" id="kategoria_ogolna" style="color: black">
                    <option value="1200">1200kcal</option>
                     <option value="1500">1500kcal</option>
                     <option value="2000">2000kcal </option>
                    <option value="2500">2500kcal </option>
                 </select><br>
                 <label for="dzien">Wybierz dzień:</label>
                  <select name="dzien" id="dzien" style="color: black">
                    <option value="1">Dzień 1</option>
                     <option value="2">Dzień 2</option>
                     <option value="3">Dzień 3 </option>
                    <option value="4">Dzień 4</option>
                    <option value="5">Dzień 5</option>
                     <option value="6">Dzień 6</option>
                      <option value="7">Dzień 7</option>
                 </select><br>
                 
                 <label for="kategoria">Wybierz kategorię:</label>
                  <select name="kategoria" id="kategoria" style="color: black">
                    <option value="sniadanie">Śniadanie</option>
                    <option value="sniadanie2">Drugie śniadanie</option>
                    <option value="obiad">Obiad</option>
                    <option value="podwieczorek">Podwieczorek</option>
                    <option value="kolacja">Kolacja</option>
                 </select><br>
                  Dodaj zdjęcie: <input type="file" name="obrazek" style="color:white;" ><br>
                   <button type="submit" class="button" name="btn-save" id="btn-submit">
                  <span class="glyphicon glyphicon-log-in"></span> Utwórz przepis
                </button>
               
             
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
                  <th scope="col">Składniki oraz ilość</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><textarea type="text" class="form-control" placeholder="Składniki oraz ilość" name="skladniki"  rows="10" cols="33"></textarea></th>
          </tr>
          
      </tbody>
  </table>
</div>
<div id="menu1" class="tab-pane fade tab-content" style="padding-top: 20px; padding-left:20%;">
    <div class="col-sm-12" >
        <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok1" name="krok1"   />
    </div>
    <div class="col-sm-3" style="float:left;">
    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok2" name="krok2"  />
    </div>
    <div class="col-sm-3" style="float: left;">

    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok3" name="krok3"  />
    </div>
    <div class="col-sm-3" style="float: left;">

    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok4" name="krok4"   />
    </div>
    <div class="col-sm-3" style="float: left;">

    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
               <input type="text" class="form-control" placeholder="krok5" name="krok5"   />
    </div>
    <div class="col-sm-3" style="float: left;">

    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok6" name="krok6"   />
    </div>
    <div class="col-sm-3" style="float: left;">

    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok7" name="krok7"  />
    </div>
    <div class="col-sm-3" style="float: left;">

    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok8" name="krok8"  />
    </div>
    <div class="col-sm-3" style="float: left;">
    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok9" name="krok9"  />
    </div>
    <div class="col-sm-3" style="float: left;">
    </div>
</div>
<div class="col-sm-12" >
    <div class="col-sm-8" style="float: left;" >
        <input type="text" class="form-control" placeholder="krok10" name="krok10" />
    </div>
    <div class="col-sm-3" style="float: left;">
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
      <td><input type="text" class="form-control" placeholder="kj/kcal" name="energia" /></td>
      <td>-</td>
  </tr>
  <tr>
      <th scope="row">Tłuszcz</th>
      <td><input type="text" class="form-control" placeholder="g" name="tluszczg" /></td>
      <td><input type="text" class="form-control" placeholder="%" name="tluszcz" /></td>
  </tr>
  <tr>
      <th scope="row">w tym kwasy tłuszczowe nasycone</th>
      <td><input type="text" class="form-control" placeholder="g" name="kwasytg" /></td>
      <td><input type="text" class="form-control" placeholder="%" name="kwasyt" /></td>
  </tr>
  <tr>
      <th scope="row">Węglowodany</th>
       <td><input type="text" class="form-control" placeholder="g" name="weglowodanyg" /></td>
      <td><input type="text" class="form-control" placeholder="%" name="weglowodany" /></td>
  </tr>
  <tr>
      <th scope="row">w tym cukry</th>
      <td><input type="text" class="form-control" placeholder="g" name="cukryg" /></td>
      <td><input type="text" class="form-control" placeholder="%" name="cukry" /></td>
  </tr>
  <tr>
      <th scope="row">Błonnik</th>
      <td><input type="text" class="form-control" placeholder="g" name="blonnikg" /></td>
      <td><input type="text" class="form-control" placeholder="%" name="blonnik" /></td>
  </tr>
  <tr>
      <th scope="row">Białko</th>
       <td><input type="text" class="form-control" placeholder="g" name="bialkog" /></td>
      <td><input type="text" class="form-control" placeholder="%" name="bialko" /></td>
  </tr>
  <tr>
      <th scope="row">Sól</th>
      <td><input type="text" class="form-control" placeholder="g" name="solg" /></td>
      <td><input type="text" class="form-control" placeholder="%" name="sol" /></td>
  </tr>
</tbody>
</table>
</div>

</div>

</div>
</form>
</section>
<?php

include("footer.php");





mysqli_close($conn);
?>
