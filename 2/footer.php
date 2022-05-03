
<footer class="footer-area">
    <div class="container">

        
        <div class="row">
            <div class="col-md-6">
                <div>
                    <p>Państwowa Wyższa Szkoła Techniczno-Ekonomiczna w Jarosławiu</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-link">
                    <ul>
                        <li>Praca Inżynierska - Poradnik dietetyczny</li>
                        <li>Laura Madejowska</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top">
    <i class="fa fa-caret-up"></i><i class="fa fa-caret-up"></i>
</div>


<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/wow.min.js"></script>
<!--Site Main js-->
<script src="js/main.js"></script>
<script src="js/komentarze.js"></script>
<script src="js/bmi.js"></script>
<script src="js/tluszczu.js"></script>
<script src="js/gwiazdka.js"></script>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script data-require="angular.js@1.2.13" data-semver="1.2.13" src="http://code.angularjs.org/1.2.13/angular.js"></script>
      <script src="bmi.js"></script>
</body>


<html ng-app="bmiApp">
<div data-ng-controller="dietaController">
    <section id="calc">
        <div class="modal fade" id="DobieranieDiety" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title text-center" >Formularz dobierania diety</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="icofont-close"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="dieta_form" method="post" id="dobieranie">
                            <input type="hidden" name="login" id="login" class="form-control" value="<?php echo $login; ?>"  /> 
                            <div class="row">
                                <div class="col-xl-8">
                                   <span id="message" class="text-center"></span>
                                   <br><br>
                                   <div class="row">
                                    <div class="col-md-6 offset-lg-1" style="width:200px;">
                                      <h3 class="text-center text-success">Cel treningowy</h3>
                                      <select  ng-model="cel" value="cel" name="cel" class="custom-select">
                                          <option value="masa">Budowa masy</option>
                                          <option value="utrzymanie">Utrzymanie wagi</option>
                                          <option value="spadek">Spadek wagi</option>
                                      </select>

                                      <br><br>

                                      <h3 class="text-center text-success">Rodzaj aktywności</h3>

                                      <select  ng-model="aktywnosc" name="aktywnosc" class="custom-select text-center">
                                          <option value="lekka">Lekka:Praca siedząca, niska aktywność fizyczna</option>
                                          <option value="lekka2">Lekka2:Praca siedząca, trening 2 razy w tygodniu</option>
                                          <option value="srednia">Średnia:Lekka praca fizyczna, trening 3-4 razy w tygodniu</option>
                                          <option value="aktywna">Aktywna:Praca fizyczna, trening 5 razy w tygodniu</option>
                                          <option value="aktywna2">Aktywna2:Ciężka praca fizyczna, codzienny trening</option>
                                          <option value="b_aktywna">B_aktywna:Sport wyczynowy</option>
                                      </select>

                                  </div>

                                  <div class="col-md-4 offset-lg-1" style="padding-top: 50px;">
                                    <div class="radio" >
                                      <label class="container2">Kobieta
                                        <input type="radio" ng-model="units" value="kobieta" name="plec" >
                                        <span class="checkmark"></span> 
                                    </label>
                                    <br><br>
                                    <label class="container2">Mężczyzna
                                        <input type="radio" ng-model="units" value="mezczyzna" name="plec">
                                        <span class="checkmark"></span> 
                                    </label>
                                </div>
                            </div>
                        </div> 


                        <br><br>
                        <div id="personal" class="row">

                            <div class="col-md-4">
                                <h4 class="text-center text-success"> Wiek</h4>
                                <select ng-model="wiek" 
                                id="wiek"   class="form-control" name="wiek"  style="text-align: center;" >    </select>
                            </div>
                            <div class="col-md-4">
                                  <h4 class="text-center text-success"> Wzrost</h4>
                             <select  ng-model="wzrost" 
                             id="wzrost" class="form-control" name="wzrost" style="text-align: center;" > </select>
                         </div>
                         <div class="col-md-4">
                           <h4 class="text-center text-success"> Waga</h4>
                            <select  ng-model="waga" 
                            id="waga"  class="form-control" name="waga" style="text-align: center;" > </select> 
                        </div>
                    </div>
              
                        <br>
                    <div class="col-md-12">
                        <input type="hidden" class="label text-{{catClass}} form-control" name="dieta" value="{{ppm | number:1}}" title="{{catTitle}}" />

                        <h3 style="text-align: center;" class="d-{{display}}">{{opis2}}</h3>
                        <h2 class="label text-{{catClass}}" title="{{catTitle}}" style="text-align: center;">{{ppm||number}}</h2>
                        <h4 class="text-{{catClass}}" style="text-align: center;">{{catTitle}}</h4>
                    </div>
                </div>
                <div class="col-xl-4">

                    <br><br>
               
                    <div class="col-md-12 text-center d-{{display2}}" ><br>
                        <h4 class="text-warning" style="font-size: 20px!important;">Informacje zapisane w Twoim profilu</h4>
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
                 
                    <div class="form-group">
                        <h3 style="text-align: center;" class="d-{{display}}">{{opis}}</h3>
                        <div class="product-shop-item">
                            <div class="product-item-content">
                                <div class="item-image" style="background-color:#1b1b1b;">
                                    <a ng-href="{{value}}" class="product-item-image-link d-{{display}}"><img src="zdjecia/{{img}}" ></a>
                                </div>
                                <div class="product-item-details  bg-{{color}} " style="background-color:#1b1b1b;">
                                    <a ng-href="{{value}}" ><h3 class="text-{{text}}" >{{value2}}</h3></a>
                                    <input type="hidden" name="link" id="link" value="{{value}}">
                                </div>
                            </div>
                        </div>
                         <div class="col-md-1 offset-sm-3">
                        <input type="submit" name="zapiszdane" id="zapiszdane" value="Zapisz dane" class="button d-{{display}}" onclick="" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</section>
</div>
</html>


<script>

    $(document).ready(function(){
        $('#dobieranie').on('submit', function(event){

            $('#zapiszdane').attr('disabled', 'disabled');
            var form_data = $(this).serialize();
            $.ajax({
                url:"dobieranie_zapiszdane.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    $('#zapiszdane').attr('disabled', false);
                    
                    $('#message').html(data);
                }
            })
        });
    }); 
</script>

<script type="text/javascript">  

  

$(document).ready(function(){
 var wiek = document.getElementById("wiek");
        var contents;
        contents += "<option>" + "</option>";
        for (let i = 15; i <= 70; i++) {
          contents += "<option>" + i + "</option>";
        }

        wiek.innerHTML = contents;
 }); 

$(document).ready(function(){
        var wzrost = document.getElementById("wzrost");
        var contents;
         contents += "<option>" + "</option>";
        for (let i = 140; i <= 200; i++) {
          contents += "<option>" + i + "</option>";
        }

        wzrost.innerHTML = contents;
 });

$(document).ready(function(){
        var waga = document.getElementById("waga");
        var contents;
         contents += "<option>" + "</option>";    
        for (let i = 40; i <= 200; i++) {
          contents += "<option>" + i + "</option>";
        }

        waga.innerHTML = contents;
});

    </script>
