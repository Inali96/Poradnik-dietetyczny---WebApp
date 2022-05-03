<?php

include('db.php');

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}

$query = "
SELECT * FROM uzytkownicy2 
WHERE login = '".$_SESSION["login"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$imie = '';
$obwod_talii = '';
$waga = '';
foreach($result as $row)
{
    $imie = $row['imie'];
    $obwod_talii = $row['obwod_talii'];
    $waga = $row['waga'];

}
include("header.php");
include("menu.php");

?><html ng-app="bmiApp">
<section id="home" class="home-area hero-equal-height section-padding overflow-hidden d-flex align-items-center">
    <div data-ng-controller="tluszczController" class="col-md-3">

        <div class="row justify-content-center">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="text-center home-content z-index position-relative">
                        <div class="login-container" >
                            <div class="container">
                                <h1 style="font-size: 40px;">Kalkulator % tłuszczu w ciele</h1>
                                <div class="panel-body col-md-10 offset-md-1">
                                    <form method="post" id="edit_profile_form">
                                        <span id="message2" class="text-center"></span>
                                        <div class="form-group">
                                            <input type="hidden" name="login" id="login" class="form-control" value="<?php echo $login; ?>"  /> </div>

                                            <div class="radio">
                                                <div class="container2">
                                                  <label>
                                                    <input type="radio" ng-model="units" value="kobieta" >
                                                    <span class="label label-danger">Kobieta</span> 
                                                    <span class="checkmark"></span> 
                                                </label>
                                            </div> 
                                            <div class="container2">
                                              <label>
                                                <input type="radio" ng-model="units" value="mezczyzna">
                                                <span class="label label-success">Mężczyzna</span>
                                                <span class="checkmark"></span> 
                                            </label>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                         
                                           <label><h5>Obwód talii (cm)</h5></label>
                                           <select ng-model="obwod_talii" id="obwod_talii" class="form-control" name="obwod_talii"  style="text-align: center;"> </select>   
                                       </div>
                                       <div class="form-group">
                                          <label><h5>Waga (kg)</h5></label>
                                          <select ng-model="waga" 
                                          id="waga2"  class="form-control" name="waga" style="text-align: center;">  </select>     
                                      </div>


                          <div class="form-group" >
                              <input type="hidden" class="label text-{{catClass}} form-control" name="tluszcz" style="text-align: center;" value="{{tluszcz | number:1}}" title="{{catTitle}}"/>
                          </div>

                          <div class="form-group">
                            <input type="submit" name="edit_prfile" id="edit_prfile" value="Zapisz dane" class="button"/>
                        </div>

                    <div class="col-md-12 text-center d-{{display2}}" ><br>
                        <h4 class="text-warning" style="font-size: 20px!important;">Informacje zapisane w profilu</h4>
                        <div class="col-md-12 text-center">
                            
                              <?php if($obwod_talii == NULL) {  ?>
                                <h4 style="font-size: 20px!important;">Obwód talii: <label class="text-danger">brak danych</h4> </label>
                                 <?php }else{ ?>
                              <h4 style="font-size: 20px!important;">Obwód talii: <label class="text-warning"> <?php echo $obwod_talii?></h4> </label>
                                  <?php }?>
                                   <?php if($waga == NULL) {  ?>
                                    <h4 style="font-size: 20px!important;">Waga: <label class="text-danger">brak danych</h4>
                                     <?php }else{ ?>
                               <h4 style="font-size: 20px!important;">Waga: <label class="text-warning"> <?php echo $waga?></h4> 
                          <?php }?>
                           <?php if($waga==NULL || $obwod_talii==NULL) {  ?>
                             <label class="text-warning">Możesz zapisać swoje dane w profilu po wypełnieniu formularza dobierania diety lub <a href="index.php#kalku">kalkulatorów </a>znajdujących się na stronie.</label>
                              <?php }?>
                    </div>
                    </div>     
                 
                    </div>
                    <div class="well text-center form-group">
                      <h3 class="">{{opis}}</h3>
                      <h2><span type="text" class="label text-{{catClass}} d-{{display}}" title="{{catTitle}}" >{{tluszcz | number}}</span></h2>
                      <h4 class="text-{{catClass}}">{{catTitle}}</h4>

                  </div>
              </form>

                                <table class="table table-dark d-{{tabela}}">
                                    <thead>
                                    <tr>
                                        <th scope="col">KLASYFIKACJA</th>
                                        <th scope="col">KOBIETY</th>
                                        <th scope="col">MĘŻCZYŹNI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">NIEZBĘDNA TKANKA TŁUSZCZOWA	</th>
                                        <td>10-12 %</td>
                                        <td>2-4 %</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ATLETYCZNA</th>
                                        <td>14-20 %	</td>
                                        <td>6-13 %</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">FITNESS</th>
                                        <td>21-24 %</td>
                                        <td>14-17 %</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">AKCEPTOWALNA</th>
                                        <td>25-31 %</td>
                                        <td>18-25 %</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">OTYŁOŚĆ</th>
                                        <td>32 %</td>
                                        <td>25 %</td>
                                    </tr>
                                    </tbody>
                                </table>
          </div>
      </div>
  </div>
</div>
</div>
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

<script>
    $(document).ready(function(){
        $('#edit_profile_form').on('submit', function(event){

            $('#edit_prfile').attr('disabled', 'disabled');
            var form_data = $(this).serialize();
            $('#user_re_enter_password').attr('required',false);
            $.ajax({
                url:"tluszcz_zapiszdane.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    $('#edit_prfile').attr('disabled', false);
                    $('#user_new_password').val('');
                    $('#user_re_enter_password').val('');
                    
                    $('#message2').html(data);
                }
            })
        });
    });    

 $(document).ready(function(){
  var obwod_talii = document.getElementById("obwod_talii");
    var contents;
     contents += "<option>" + "</option>";
    for (let i = 53; i <= 120; i++) {
      contents += "<option>" + i + "</option>";
  }

  obwod_talii.innerHTML = contents;
    });  
$(document).ready(function(){
  var waga2 = document.getElementById("waga2");
  var contents;
    contents += "<option>" + "</option>";
  for (let i = 50; i <= 200; i++) {
      contents += "<option>" + i + "</option>";
  }

  waga2.innerHTML = contents;
    });  
 
</script>