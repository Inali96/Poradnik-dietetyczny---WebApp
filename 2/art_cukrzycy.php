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
     <h1 style="font-size:50px;">Informacje dla cukrzyków</h1>
   </div>
   <div class="col-lg-4" style=" float: left;  padding-left: 5%;">
    <div class="col-sm-12" >

      <nav class="navbar">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent!important;">
              <li class="breadcrumb-item"><a href="index.php">Strona główna</a></li>
              <li class="breadcrumb-item"><a href="#">Informacje dla cukrzyków</a></li>
            </ol>
          </nav>
        </div>
      </nav>

      <img style=" padding-left: 7%;" src="zdjecia/cukrzycy.webp" class="img-responsive"  >
    </div>

    <div class="col-sm-12 offset-sm-4" >
      <a class="button" onclick="window.print()">Drukuj stronę</a>
    </div>


  </div>

  <div class="col-lg-7" style=" float:left; padding-left: 5%; margin-top: 6px; ">



    <div class="tab-content" style="padding-top: 20px; overflow-y: scroll; max-height: 500px;">
       <h5>Kto powinien stosować dietę cukrzycową?</h5>
       <p style="font-size:22px; text-align: left;">Dieta cukrzycowa powinna być nieodłącznym elementem leczenia wszystkich typów cukrzycy. <p style="font-size:22px; text-align: left;">Wyróżnia się dwie podstawowe odmiany tej choroby:</p>

        <p style="font-size:22px; text-align: left;">cukrzyca typu 1 – inaczej cukrzyca insulinozależna to choroba o podłożu autoimmunologicznym, polega na niszczeniu komórek trzustkowych produkujących insulinę. Rozpoczyna się u dzieci lub w wieku młodzieńczym;
        cukrzyca typu 2 – istotą choroby jest niewłaściwe działanie insuliny w tkankach, co prowadzi do podwyższenia poziomu cukru we krwi. Za jej rozwój odpowiedzialne są czynniki genetyczne i środowiskowe. Często wiąże się z otyłością i zazwyczaj występuje u osób dorosłych.
        </p><p style="font-size:22px; text-align: left;">Szacuje się, że spośród nawet 350 milionów chorych na cukrzycę z całego świata, aż 80-90% przypadków to cukrzyca typu 2.</p>
       <br>

      <h5> Dieta cukrzycowa - najważniejsze zasady</h5>
<p style="font-size:22px; text-align: left;">Dieta cukrzycowa w przebiegu cukrzycy typu 2 ma na celu przede wszystkim osiągnięcie i utrzymanie prawidłowego – czyli bliskiego normy – stężenia glukozy w surowicy krwi. Stosowanie diety cukrzycowej ma zapobiec wystąpieniu możliwych powikłań tej choroby, w tym stopy cukrzycowej, nefropatii oraz retinopatii. Odpowiednio skomponowana dieta pozwala ponadto na uzyskanie:</p>

<p style="font-size:22px; text-align: left;">optymalnego stężenia cholesterolu całkowitego, cholesterolu HDL i LDL oraz triglicerydów w surowicy krwi,
optymalnego ciśnienia tętniczego, co zmniejsza ryzyko rozwoju chorób sercowo-naczyniowych,
właściwej masy ciała.</p>
<p style="font-size:22px; text-align: left;">Obecnie rekomendowanym sposobem odżywiania dla osób chorujących na cukrzycę typu 2 jest dieta o niskim indeksie glikemicznym. Parametr ten, oznaczany literami IG, określa szybkość trawienia danego produktu i tempo wchłaniania cukru we krwi, a tym samym jego zdolność do podwyższania poziomu glukozy po jedzeniu. Produkty o wysokim indeksie glikemicznym szybciej ulegają strawieniu, czego efektem jest gwałtowny wzrost, a następnie spadek stężenia glukozy we krwi.</p>

<p style="font-size:22px; text-align: left;">Podstawę diety cukrzycowej stanowią zasady zdrowego żywienia, czyli regularne spożywanie posiłków, staranny dobór produktów, odpowiednie nawodnienie, a dodatkowo aktywność fizyczna. Większość jej zasad dobrze wpisuje się w założenia diety śródziemnomorskiej. Dieta przy cukrzycy polega bowiem na wykorzystywaniu w jadłospisie produktów o jak najniższym stopniu przetworzenia i niskim indeksie glikemicznym – chleba razowego, makaronu z pełnego ziarna, surowych warzyw i owoców, naturalnego nabiału i jego przetworów, a w umiarkowanej ilości także orzechów, pestek i tłuszczów roślinnych. Należy jednak wiedzieć, że indeks glikemiczny produktów spożywczych może zmienić się w czasie obróbki kulinarnej.</p>

<h5> Co jeść przy cukrzycy? Polecane produkty</h5>
<p style="font-size:22px; text-align: left;">Na liście produktów, które może jeść cukrzyk, znajdują się między innymi:</p>

<p style="font-size:22px; text-align: left;">naturalny nabiał i jego przetwory – jogurt, maślanka, kefir, zsiadłe mleko, sery;
warzywa – brokuły, kalafior, cukinia, cebula, pomidory, ogórki, kapusta, sałata zielona i inne, brukselka, czosnek, fasola biała i czerwona, fasolka szparagowa, groch, groszek zielony, kalarepa, kukurydza, papryka, marchewka, pietruszka, por, soczewica, rzepa, rzodkiewka. Warzywa najlepiej spożywać na surowo;</p>
<p style="font-size:22px; text-align: left;">produkty zbożowe, makarony, płatki – chleb żytni z pełnego ziarna, ryż brązowy, kasze bulgur, gryczana, jęczmienna, makaron z pełnego ziarna, kuskus razowy, komosa ryżowa, płatki owsiane (zwykłe i górskie), otręby żytnie, pszenne i owsiane;</p>
<p style="font-size:22px; text-align: left;">mięso i ryby – kurczak, indyk, chuda wołowina, chuda wieprzowina, cielęcina, dziczyzna, królik, wszystkie ryby.
W diecie cukrzycowej w umiarkowanych ilościach można również uwzględnić owoce – pomarańcze, grejpfruty, brzoskwinie, jabłka, morele, jagody, truskawki, maliny, jeżyny, porzeczki, winogrona, agrest, awokado, mało dojrzałe banany, cytrynę, wiśnie czy gruszki. Do słodzenia natomiast zaleca się używać słodzików, ksylitolu lub stewi.</p>

<h5>Dieta cukrzycowa– produkty przeciwwskazane</h5>
<p style="font-size:22px; text-align: left;">Wśród produktów, których cukrzycy powinni unikać, wymienia się przede wszystkim:</p>

<p style="font-size:22px; text-align: left;">słodzone smakowe jogurty i inne przetwory mleczne;
owoce – arbuz, dojrzałe banany, owoce z puszki, kandyzowane, owoce suszone słodzone;
gotowaną dynię, ziemniaki, bób;
cukier, miód, słodycze, słodzone gazowane napoje;
chleb pszenny, drożdżówki i inne wypieki cukiernicze;
kaszę jaglaną, kukurydzianą, ryż biały, płatki kukurydziane i inne śniadaniowe, płatki ryżowe i jaglane;
większość produktów zbożowych bezglutenowych;
tłustą wołowinę i wieprzowinę, baraninę, niskiej jakości wędliny i kiełbasy.</p>


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