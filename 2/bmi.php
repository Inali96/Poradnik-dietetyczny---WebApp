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
$wzrost = '';
$waga = '';
$bmi = '';
foreach($result as $row)
{
    $imie = $row['imie'];
    $wzrost = $row['wzrost'];
    $waga = $row['waga'];
    $bmi = $row['bmi'];

}
include("header.php");
include("menu.php");

?>
<html ng-app="bmiApp">
<section id="home" class="home-area hero-equal-height section-padding overflow-hidden d-flex align-items-center">
    <div data-ng-controller="bmiController " >
        <div class="row justify-content-center">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="text-center home-content z-index position-relative">
                            <div class="login-container">
                                <div class="container ">
                                    <h1 style="font-size: 40px;">Kalkulator BMI</h1>

                                    <div class="panel-body">
                                        <form method="post" id="edit_profile_form">
                                            <span id="message2" class="text-center "></span>
                                            <div class="form-group">
                                                <input type="hidden" name="login" id="login"  value="<?php echo $login; ?>" required />
                                            </div>
                                                    <div class="form-group">
                                                  <label><h5>Wzrost (cm)</h5></label>
                                                  <select ng-model="height_cm" 
                                                  id="height_cm" class="form-control" name="wzrost" style="text-align: center;"> </select>   
                                              </div>

                                                    <div class="form-group">
                                                  <label><h5>Waga (kg)</h5></label>
                                                  <select ng-model="weight_kg" 
                                                  id="weight_kg"  class="form-control" name="waga" style="text-align: center;"> </select>   
                                              </div>

                                                <div class="form-group">
                                                  <input type="hidden" class="label text-{{catClass}} form-control" name="bmi" style="text-align: center;" value="{{bmi | number:1}}" title="{{catTitle}}"/>
                                                   </div>

                                                    <div class="form-group">
                                                <input type="submit" name="edit_prfile" id="edit_prfile" value="Zapisz dane" class="button"/>
                                            </div>
                                                </div>

                                            <div class="col-md-12 text-center d-{{display2}}" ><br>
                        <h4 class="text-warning" style="font-size: 20px!important;">Informacje zapisane w profilu</h4>
                        <div class="col-md-12 text-center">
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

                    </div>
                    </div>

                                        </div>
                                        <div class=" text-center ">
                                              <h3 class="">{{opis}}</h3>
                                              <h2><span type="text" class="label text-{{catClass}} d-{{display}}" title="{{catTitle}}" name="bmi">{{bmi | number}}</span></h2>
                                              <h4 class="text-{{catClass}}">{{catTitle}}</h4>
                                          </div>
                                          </form>

                                <table class="table table-dark d-{{tabela}}">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">WARTOŚĆ BMI</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row" class="text-danger">WYGŁODZENIE</th>
                                        <td>mniej niż 16</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-danger">WYCHUDZENIE</th>
                                        <td>16 - 16.99</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-warning">NIEDOWAGA</th>
                                        <td>17 - 18.49</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-success">WARTOŚĆ PRAWIDŁOWA</th>
                                        <td>18.5 - 24.99</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-warning">NADWAGA</th>
                                        <td>25 - 29.99 </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-danger">I STOPIEŃ OTYŁOŚCI</th>
                                        <td>30 - 34.99</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-danger">II STOPIEŃ OTYŁOŚCI</th>
                                        <td>35 - 39.99</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-danger">OTYŁOŚĆ SKRAJNA</th>
                                        <td>powyżej 40</td>
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
    <?php if($waga==NULL || $wzrost==NULL) {  ?>
        <label class="text-warning">Możesz zapisać swoje dane w profilu po wypełnieniu</label><label class="text-warning"> formularza dobierania diety lub <a href="index.php#kalku">kalkulatorów </a>znajdujących się na stronie.</label>
    <?php }?>
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
                url:"bmi_zapiszdane.php",
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
        var height_cm = document.getElementById("height_cm");
        var contents;
        contents += "<option>" + "</option>";
        for (let i = 140; i <= 200; i++) {
            contents += "<option>" + i + "</option>";
        }

        height_cm.innerHTML = contents;
    });

    $(document).ready(function(){
        var weight_kg = document.getElementById("weight_kg");
        var contents;
        contents += "<option>" + "</option>";
        for (let i = 40; i <= 200; i++) {
            contents += "<option>" + i + "</option>";
        }

        weight_kg.innerHTML = contents;
    });



</script>


