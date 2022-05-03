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
     <h1 style="font-size:50px;">Informacje dla osób z zespołem jelita drażliwego</h1>
   </div>
   <div class="col-lg-4" style=" float: left;  padding-left: 5%;">
    <div class="col-sm-12" >

      <nav class="navbar">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: transparent!important;">
              <li class="breadcrumb-item"><a href="index.php">Strona główna</a></li>
              <li class="breadcrumb-item"><a href="#">Informacje dla osób z zespołem jelita drażliwego</a></li>
            </ol>
          </nav>
        </div>
      </nav>

      <img style=" padding-left: 7%;" src="zdjecia/ibs.webp" class="img-responsive"  >
    </div>

    <div class="col-sm-12 offset-sm-4" >
      <a class="button" onclick="window.print()">Drukuj stronę</a>
    </div>


  </div>

  <div class="col-lg-7" style=" float:left; padding-left: 5%; margin-top: 6px; ">


    <div class="tab-content" style="padding-top: 20px; overflow-y: scroll; max-height: 500px;">
    
<h5>Dieta FODMAP w zespole jelita drażliwego</h5>
<p style="font-size:22px; text-align: left;">Dieta FODMAP jest jedną z najskuteczniejszych i najlepiej przebadanych metod łagodzenia IBS. Jej podstawy naukowe zostały opracowane przez naukowców, biotechnologów, lekarzy i dietetyków zaangażowanych w zagadnienie dysfunkcji działania przewodu pokarmowego. Dieta FODMAP w połączeniu ze wsparciem farmakologicznym zaleconym przez lekarza prowadzącego może znacznie poprawić komfort i jakość życia osoby cierpiącej na IBS. Podstawą diety w Zespole Jelita Drażliwego powinna być jedna z odmian tzw. diety paleo. Dieta ta, poprzez wykluczenie najczęstszych przyczyn chorób jelit (np. alergia na gluten lub kazeinę), w większości przypadków przywraca prawidłową pracę układu pokarmowego. Nazwa FODMAP to skrót z języka angielskiego oznaczający Fermentujące Oligo-, Di- i Monosacharydy oraz Polialkohole (alkohole polihydroksylowe), czyli węglowodany i pochodne od nich alkohole, które są trudno przyswajalne przez jelito cienkie. Fermentują w dalszych częściach układu pokarmowego, gdzie są pokarmem dla niekorzystnych bakterii, które powodują przede wszystkim wzdęcia i nieprawidłową pracę jelit.</p>

<h5>Główne założenia FODMAP</h5>
<p style="font-size:22px; text-align: left;">Dieta FODMAP jest przede wszystkim oparta na małej zawartości fermentujących oligo-, di-i monosacharydów oraz polioli. Badania wykazały, że węglowodany łatwo fermentujące, słabo wchłaniane i o wysokim ciśnieniu osmotycznym, do których zalicza się fruktozę, laktozę, fruktany oraz alkohole polihydroksylowe (w tym sztuczne środki słodzące, takie jak sorbitol, mannitol, maltitol, ksylitol) mogą nasilać objawy IBS. Uznaje się więc, że dieta o małej zawartości FODMAP jest skuteczną formą leczenia dietetycznego tej choroby. Jak podkreślają naukowcy i twórcy diety FODMAP z Monash University, nie jest to dieta, którą należy stosować do końca życia. Składa się z 2 etapów. W pierwszej fazie eliminuje się na 6–8 tygodni produkty zawierające duże ilości FODMAP. Po tym czasie w miarę ustępowania objawów IBS przechodzi się do etapu drugiego, w którym dietę należy stopniowo rozszerzać o produkty zawierające więcej FODMAP (biorąc pod uwagę indywidualną tolerancję).</p>

<h5>Dlaczego produkty z dużą ilością FODMAP nasilają objawy IBS?</h5>
<p style="font-size:22px; text-align: left;">Produkty obfitujące w FODMAP przechodzą do jelita w postaci niezmienionej i poprzez swoje działanie osmotyczne powodują nagromadzenie płynów w jego świetle. W ten sposób dochodzi do przyspieszenia motoryki jelit. Po przejściu do jelita grubego podlegają one fermentacji bakteryjnej ze wzmożoną produkcją dwutlenku węgla i wodoru. Dalsze przemiany mogą prowadzić do wytworzenia siarkowodoru i metanu. Procesy te są odpowiedzialne za uczucie dyskomfortu w rejonie jamy brzusznej (ból oraz uczucie przelewania), biegunki lub zaparcia i wzdęcia.</p>

<p style="font-size:22px; text-align: left;">Jaka jest zawartość FODMAP w poszczególnych produktach? W tabeli podajemy przykłady produktów o małej i dużej zawartości FODMAP. Na pierwszym etapie diety należy całkowicie wyeliminować produkty zawierające większe ilości FODMAP. Nie jest to trudne, ponieważ dla produktów przeciwwskazanych istnieje alternatywa w postaci produktów dozwolonych (z małą zawartością FODMAP). Warto jednak stosować dietę pod okiem dietetyka.</p>
      
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