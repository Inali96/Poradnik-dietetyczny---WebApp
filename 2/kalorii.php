<?php

include('db.php');

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}


include("header.php");
include("menu.php");

?>
<html ng-app="bmiApp">
<section id="home" class="home-area hero-equal-height section-padding overflow-hidden d-flex align-items-center">
    <div data-ng-controller="kalorieController">
        <div class="row justify-content-center">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="text-center home-content z-index position-relative">
                            <div class="login-container">
                                <div class="container">
                                    <h1 style="font-size: 40px;">Kalkulator dziennego spożycia kalorii</h1>
                                    <div class="panel-body"><div class="col-lg-6 offset-lg-3">
                                        <form method="post" id="edit_profile_form">
                                            <span id="message2" class="text-center"></span>
                                            <div class="form-group">
                                            <input type="hidden" name="login" id="login" class="form-control" value="<?php echo $login; ?>"  /> </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="radio">
                                                <div class="container2">
                                                      <label>
                                                        <input type="radio" ng-model="units" value="kobieta" name="plec">
                                                        <span class="label label-danger">Kobieta</span> 
                                                          <span class="checkmark"></span> 
                                                      </label>
                                                  </div>
                                                     <div class="container2">
                                                      <label>
                                                        <input type="radio" ng-model="units" value="mezczyzna" name="plec">
                                                        <span class="label label-success">Mężczyzna</span>
                                                        <span class="checkmark"></span> 
                                                      </label>
                                                    </div>
                                                  </div>
                                              </div>
                                                
                                                <div class="form-group">
                                                  <label><h5>Wiek</h5></label>
                                                  <select ng-model="wiek" 
                                                  id="wiek1" class="form-control" name="wiek" maxlength="2"  style="text-align: center;"> </select>   
                                              </div>

                                                <div class="form-group">
                                                  <label><h5>Wzrost (cm)</h5></label>
                                                  <select ng-model="wzrost" 
                                                  id="wzrost1" class="form-control" name="wzrost" maxlength="3" style="text-align: center;"> </select>   
                                              </div>

                                                    <div class="form-group">
                                                  <label><h5>Waga (kg)</h5></label>
                                                  <select ng-model="waga" 
                                                  id="waga1"  class="form-control" name="waga" maxlength="3" style="text-align: center;"> </select>   
                                              </div>
                                                  

                                                <div class="form-group">
                                                  <input type="hidden" class="label text-{{catClass}} form-control" name="kalorie"  value="{{kalorie | number:1}}" title="{{catTitle}}"/>
                                                   </div>

                                                    <div class="form-group">
                                                <input type="submit" name="edit_prfile" id="edit_prfile" value="Zapisz dane" class="button"/>
                                            </div>
                                            <div class="col-md-12 text-center d-{{display2}}" ><br>
                        <h4 class="text-warning" style="font-size: 20px!important;">Informacje zapisane w profilu</h4>
                        <div class="col-md-12 text-center">
                            <?php if($wiek == NULL) {  ?>
                             <h4 style="font-size: 20px!important;">Wiek: <label class="text-danger">brak danych</h4> </label>
                          <?php }else{ ?>
                             <h4 style="font-size: 20px!important;">Wiek: <label class="text-warning"> <?php echo $wiek?></h4> </label>
                            <?php }?>
                              <?php if($wzrost == NULL) {  ?>
                                <h4 style="font-size: 20px!important;">Wzrost: <label class="text-danger">brak danych</h4> </label>
                                 <?php }else{ ?>
                              <h4 style="font-size: 20px!important;">Wzrost: <label class="text-warning"> <?php echo $wzrost?></h4> </label>
                                  <?php }?>
                                   <?php if($waga == NULL) {  ?>
                                    <h4 style="font-size: 20px!important;">Waga: <label class="text-danger">brak danych</h4>
                                     <?php }else{ ?>
                               <h4 style="font-size: 20px!important;">Waga: <label class="text-warning"> <?php echo $waga?></h4> 
                          <?php }?>
                           <?php if($wiek == NULL || $waga==NULL || $wzrost==NULL) {  ?>
                             <label class="text-warning">Możesz zapisać swoje dane w profilu po wypełnieniu formularza dobierania diety lub <a href="index.php#kalku">kalkulatorów </a>znajdujących się na stronie.</label>
                              <?php }?>
                    </div>
                    </div>     
                                                </div>
                                            
                         
                                        </div>
                                        <div class="well text-center form-group">
                                              <h3 class="">{{opis}} </h3>
                                              <h2><span type="text" class="label text-{{catClass}} d-{{display}}" title="{{catTitle}}" >{{kalorie | number}}</span></h2>
                                              <h4 class="text-{{catClass}}">{{catTitle}}</h4>



                                          </div>
                                          </form>
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
                url:"kalorie_zapiszdane.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    $('#edit_prfile').attr('disabled', false);
                    
                    $('#message2').html(data);
                }
            })
        });
    });  


      $(document).ready(function(){
  var wiek1 = document.getElementById("wiek1");
  var contents;
          contents += "<option>" + "</option>";
  for (let i = 15; i <= 99; i++) {
      contents += "<option>" + i + "</option>";
  }

  wiek1.innerHTML = contents;
    }); 

    $(document).ready(function(){
  var wzrost1 = document.getElementById("wzrost1");
  var contents;
        contents += "<option>" + "</option>";
  for (let i = 130; i <= 200; i++) {
      contents += "<option>" + i + "</option>";
  }

  wzrost1.innerHTML = contents;
    }); 

    $(document).ready(function(){
  var waga1 = document.getElementById("waga1");
  var contents;
        contents += "<option>" + "</option>";
  for (let i = 40; i <= 200; i++) {
      contents += "<option>" + i + "</option>";
  }

  waga1.innerHTML = contents;
    });  
</script>