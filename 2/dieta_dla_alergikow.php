<?php
include("db.php");

if(!isset($_SESSION['rola']))
{
    header("location:logowanie.html");
}
include("header.php");
include("menu.php");
?>

<section id="home" class="przepisy-area hero-equal-height section-padding overflow-hidden d-flex align-items-center">

  <div class="col-lg-12" style=" float: left; ">

    <div class="col-sm-12 home-content" >
     <h1 style="font-size:50px;">Informacje dla alergików</h1>
   </div>
   <div class="col-lg-4" style=" float: left;  padding-left: 5%;">
    <div class="col-sm-12" >

      <nav class="navbar">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent!important;">
              <li class="breadcrumb-item"><a href="index.php">Strona główna</a></li>
              <li class="breadcrumb-item"><a href="#">Informacje dla alergików</a></li>
            </ol>
          </nav>
        </div>
      </nav>

      <img style=" padding-left: 7%;" src="zdjecia/alergicy.webp" class="img-responsive" alt="Image 1" >
    </div>

    <div class="col-sm-12 offset-sm-4" >
      <a class="button" onclick="window.print()">Drukuj stronę</a>
    </div>


  </div>

  <div class="col-lg-7" style=" float:left; padding-left: 5%; margin-top: 6px; ">



    <div class="tab-content" style="padding-top: 20px; overflow-y: scroll; max-height: 500px;">
     
     <h5>Dla kogo jest przeznaczona dieta eliminacyjna?</h5>
<p style="font-size:22px; text-align: left;">Dieta eliminacyjna jest przeznaczona przede wszystkim dla osób, u których pojawiły się objawy alergii pokarmowej. Jest również metodą leczenia już rozpoznanego procesu chorobowego. Stosuje się ją także u osób z alergią pokarmową w celu przywrócenie tolerancji na pokarm wywołujący alergię.</p>

<h5>Dieta eliminacyjna - rodzaje diet eliminacyjnych</h5>
<p style="font-size:22px; text-align: left;">Wyróżnia się trzy rodzaje diet eliminacyjnych: dietę polegającą na całkowitym wykluczeniu jednego lub kilku składników szkodliwych dla chorego, dietę elementarną i dietę oligoantygenową.</p>
<h5>Dieta eliminacyjna: całkowite wykluczenie jednego lub kilku składników</h5>
<p style="font-size:22px; text-align: left;">Pierwszy rodzaj diety eliminacyjnej polega na całkowitym wykluczeniu jednego lub kilku składników potencjalnie alergizujących na okres około dwóch tygodni. Produkty, które podejrzewa się o powodowanie reakcji alergicznej, powinny być wyłączane pojedynczo do momentu, gdy objawy alergii ustąpią. Wówczas wiadomo, który składnik uczula.</p>
<p style="font-size:22px; text-align: left;">Dieta eliminacyjna powinna być odpowiednio zbilansowana pod względem kalorycznym i odżywczym. Jednak całkowite wyeliminowanie danego produktu może wiązać się z niedoborami składników odżywczych w nim zawartych. Aby temu zapobiec, powinny być stosowane zamienniki - produkty o równoważnych wartościach odżywczych. Na przykład w przypadku diety bezmlecznej, należy zwrócić uwagę na skład dostępnych preparatów zastępczych, a szczególnie na zawartość wapnia oraz stosunek wapnia do fosforanów. Tego rodzaju dietę stosuje się najczęściej u niemowląt, które są uczulone na białka mleka krowiego (nie mylić z nietolerancją białka mleka krowiego). Pokarmy uzupełniające można wprowadzać po 5. miesiącu życia dziecka.</p>
<h5>Dieta eliminacyjna: dieta elementarna</h5>
<p style="font-size:22px; text-align: left;">Dietę elementarną stosuje się wtedy, gdy wyżej omawiany typ diety eliminacyjnej nie przyniósł odpowiedzi na pytanie, który składnik jest szkodliwy dla zdrowia. Jej cechą charakterystyczną jest wprowadzanie jedynie pojedynczych aminokwasów, które mogą być źródłem energii dla organizmu.</p>

<h5>Dieta eliminacyjna: dieta oligoantygenowa</h5>
<p style="font-size:22px; text-align: left;">Dieta oligoantygenowa jest stosowana w sytuacji, gdy objawy chorobowe pojawiają się po spożyciu wielu różnych pokarmów. Wówczas w skład takiej diety mogą wchodzić tylko tzw. bezpieczne pokarmy, które uczulają niezwykle rzadko, tj. mięso jagnięce, ryż, kukurydza, gotowane jabłka, brokuły, szparagi, szpinak, sałata, ziemniaki, sól, cukier, ocet winny i oliwa z oliwek. Należy pamiętać, że taka dieta możne być stosowana wyłącznie od jednego do czterech tygodni.</p>

<p style="font-size:22px; text-align: left;">Kiedy nie przynosi określonych efektów, należy powrócić do diety wcześniejszej. Jeśli zostaje zauważona poprawa, zaleca się przeprowadzić próbę prowokacji pokarmowej, która polega na wprowadzeniu szkodliwego pokarmu do diety.</p>
    
      <h5>Produkty alergizujące:</h5>
      <p style="font-size:22px; text-align: left;">-mleko krowie</p>
      <p style="font-size:22px; text-align: left;">-jaja</p>
      <p style="font-size:22px; text-align: left;">-ryby</p>
      <p style="font-size:22px; text-align: left;">-skorupiaki</p>
      <p style="font-size:22px; text-align: left;">-mięczaki</p>
      <p style="font-size:22px; text-align: left;">-orzechy arachidowe</p>
      <p style="font-size:22px; text-align: left;">-soja</p>
      <p style="font-size:22px; text-align: left;">-pszenica</p>

 <h5>Produkty o obniżonych właściwościach alergizujących</h5>
<p style="font-size:22px; text-align: left;">Owoce: jabłka, porzeczki, jagody, morele</p>
<p style="font-size:22px; text-align: left;">Warzywa: dynie, marchew, ziemniaki, buraki, por, cebula, kalarepa, brokuły, kalafior, fasolka, szparagowa, zielony groszek</p>

   </div> 
 </div>
</div>
</section>

<?php

include("footer.php");


?>