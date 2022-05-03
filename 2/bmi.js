
var app = angular.module('bmiApp', []);

app.controller('bmiController', function ($scope) {
    
    $scope.catClass = "default";
    $scope.catTitle = "";
    $scope.bmi = "";
    $scope.display="none";
    
    
    $scope.$watch('weight_kg', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.bmi = newVal;

        scope.bmi = (!!scope.height_cm) ? ((newVal * 10000)/(scope.height_cm * scope.height_cm)) : 0.0;
      } else {
        scope.bmi = 0;
      }
    });
    
    $scope.$watch('height_cm', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.bmi = newVal;
        scope.bmi = (!!newVal) ? ((scope.weight_kg * 10000) / (newVal * newVal)) : 0.0;
      } else {
        scope.bmi = 0;
      }
    });
    
    
    $scope.$watch('bmi', function (newVal, oldVal, scope) {
      if(newVal) {
         if((newVal < 17)) {
          scope.catClass = "danger";
          scope.catTitle = "Wychudzenie";
          scope.opis="Twoje BMI wynosi";
          $scope.display="";
          $scope.display2="none";
             $scope.tabela="";
        } else if((newVal < 18.5) && (newVal >= 17)) {
            scope.catClass = "danger";
            scope.catTitle = "Niedowaga";
            scope.opis="Twoje BMI wynosi";
            $scope.display="";
            $scope.display2="none";
             $scope.tabela="";
        } else if((newVal < 25) && (newVal >= 18.5)) {
            scope.catClass = "success";
            scope.catTitle = "Wartość prawidłowa";
            scope.opis="Twoje BMI wynosi";
            $scope.display="";
            $scope.display2="none";
             $scope.tabela="";
        } else if((newVal < 30) && (newVal >= 25)) {
            scope.catClass = "danger";
            scope.catTitle = "Nadwaga";
            scope.opis="Twoje BMI wynosi";
            $scope.display="";
            $scope.display2="none";
             $scope.tabela="";
      } else if((newVal < 35) && (newVal >= 30)) {
          scope.catClass = "danger";
          scope.catTitle = "I stopień otyłości";
          scope.opis="Twoje BMI wynosi";
          $scope.display="";
          $scope.display2="none";
             $scope.tabela="";
      } else if((newVal < 40) && (newVal >= 35)) {
          scope.catClass = "danger";
          scope.catTitle = "II stopień otyłości";
          scope.opis="Twoje BMI wynosi";
          $scope.display="";
          $scope.display2="none";
             $scope.tabela="";
      } else if((newVal >= 40)) {
          scope.catClass = "danger";
          scope.catTitle = "Otyłość skrajna";
          scope.opis="Twoje BMI wynosi";
          $scope.display="";
          $scope.display2="none";
             $scope.tabela="";
        } else {
          scope.catClass = "default";
          scope.catTitle = "";
           scope.bmi="";
           scope.opis="";
           $scope.display="none";
              $scope.display2="";
             $scope.tabela="none";
        }
      } else {
        scope.catClass = "default";
        scope.catTitle = "";
        scope.bmi="";
        scope.opis="";
        $scope.display="none";
           $scope.display2="";
          $scope.tabela="none";
      }
    });
    
    
});

app.controller('tluszczController', function ($scope) {

    $scope.catClass = "default";
    $scope.catTitle = "";
    $scope.tluszcz = "";
    $scope.units = 'kobieta';
    $scope.opis="";
    $scope.display="none";

     $scope.$watch('waga', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.tluszcz = newVal;

      if ($scope.units === "kobieta") {

      var talia = (scope.obwod_talii/2.54);
      var waga = (newVal/0.453592);

      var x1 = ((4.15*talia)-76.76);
      var x2 = (0.082*waga);
      var wynik = ((100*(x1-x2))/waga);

      }else{

      var talia = (scope.obwod_talii/2.54);
      var waga = (newVal/0.453592);

      var x1 = ((4.15*talia)-98.42);
      var x2 = (0.082*waga);
      var wynik = ((100*(x1-x2))/waga);
    }
        scope.tluszcz = (!!newVal) ? (wynik) : 0.0;
      } else {
        scope.tluszcz = 0;
      }
    });
    
    $scope.$watch('obwod_talii', function (newVal, oldVal, scope) {
      if(newVal) { 
      scope.tluszcz = newVal;
        
      if ($scope.units === "kobieta") {

      var talia = (newVal/2.54);
      var waga = (scope.waga/0.453592);

      var x1 = ((4.15*talia)-76.76);
      var x2 = (0.082*waga);
      var wynik = ((100*(x1-x2))/waga);

      }else{

      var talia = (newVal/2.54);
      var waga = (scope.waga/0.453592);

      var x1 = ((4.15*talia)-98.42);
      var x2 = (0.082*waga);
      var wynik = ((100*(x1-x2))/waga);
    }
        scope.tluszcz = (!!newVal) ? (wynik) : 0.0;
      } else {
        scope.tluszcz = 0;
      }
    });

    $scope.$watch('units', function (newVal, oldVal, scope) {
      if(newVal) { 
      scope.tluszcz = newVal;
        
      if ($scope.units === "kobieta") {

      var talia = (scope.obwod_talii/2.54);
      var waga = (scope.waga/0.453592);

      var x1 = ((4.15*talia)-76.76);
      var x2 = (0.082*waga);
      var wynik = ((100*(x1-x2))/waga);

      }else{

      var talia = (scope.obwod_talii/2.54);
      var waga = (scope.waga/0.453592);

      var x1 = ((4.15*talia)-98.42);
      var x2 = (0.082*waga);
      var wynik = ((100*(x1-x2))/waga);
    }
        scope.tluszcz = (!!newVal) ? (wynik) : 0.0;
      } else {
        scope.tluszcz = 0;
      }
    });

    $scope.$watch('tluszcz', function (newVal, oldVal, scope) {
      if(newVal) { 
        if((newVal >= 1) && (newVal <= 8)) {
          scope.catClass = "success";
          scope.catTitle = "Bardzo mało % tłuszczu w ciele";
          scope.opis="Zawartość tkanki tłuszczowej";
          $scope.display="";
          $scope.display2="none";
            $scope.tabela="";
        } else if((newVal > 8) && (newVal <= 20)) {
          scope.catClass = "success";
          scope.catTitle = "% tłuszczu w ciele w normie";
           scope.opis="Zawartość tkanki tłuszczowej";
           $scope.display="";
           $scope.display2="none";
           $scope.tabela="";
        } else if((newVal > 20) && (newVal <= 25)) {
          scope.catClass = "success";
          scope.catTitle = "% tłuszczu w ciele lekko powyżej normy";
           scope.opis="Zawartość tkanki tłuszczowej";
           $scope.display="";
           $scope.display2="none";
            $scope.tabela="";
        } else if((newVal > 25) && (newVal <= 30)) {
          scope.catClass = "danger";
          scope.catTitle = "Dużo % tłuszczu w ciele";
           scope.opis="Zawartość tkanki tłuszczowej";
           $scope.display="";
           $scope.display2="none";
            $scope.tabela="";
        } else if(newVal > 30) {
          scope.catClass = "danger";
          scope.catTitle = "Bardzo dużo % tłuszczu w ciele, skonsultuj się z dietetykiem";
           scope.opis="Zawartość tkanki tłuszczowej";
           $scope.display="";
           $scope.display2="none";
            $scope.tabela="";
        } else {
          scope.catClass = "default";
          scope.catTitle = "Podaj poprawne wymiary";
          scope.opis="";
          $scope.display="none";
          $scope.display2="";
            $scope.tabela="none";
        }
      } else {
        scope.catClass = "default";
        scope.catTitle = "";
        scope.opis="";
        $scope.display="none";
        $scope.display2="";
        $scope.tabela="none";
      }
    });
    
    
});



app.controller('kalorieController', function ($scope) {

    $scope.catClass = "default";
    $scope.catTitle = "";
    $scope.kalorie = '';
    $scope.units = 'kobieta';
    $scope.opis='';
    $scope.display="none";

     $scope.$watch('waga', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.kalorie = newVal;
        if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * newVal) + (1.84 * scope.wzrost) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * newVal) + (5 * scope.wzrost) - (6.75 * scope.wiek));
      }
        scope.kalorie = (!!newVal) ? (wynik) : 0.0;
      } else {
        scope.kalorie = 0;
      }
    });
    
    $scope.$watch('wzrost', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.kalorie = newVal;
         if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * newVal) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * newVal) - (6.75 * scope.wiek));
      }

        scope.kalorie = (!!newVal) ? (wynik) : 0.0;
      } else {
        scope.kalorie = 0;
      }
    });

     $scope.$watch('wiek', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.kalorie = newVal;

      if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * scope.wzrost) - (4.67 * newVal));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * scope.wzrost) - (6.75 * newVal));
      }
       scope.kalorie = (!!newVal) ? (wynik) : 0.0;
      } else {
        scope.kalorie = 0;
      }
    });

     $scope.$watch('units', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.kalorie = newVal;

      if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * scope.wzrost) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * scope.wzrost) - (6.75 * scope.wiek));
      }
       scope.kalorie = (!!newVal) ? (wynik) : 0.0;
      } else {
        scope.kalorie = 0;
      }
    });


    $scope.$watch('kalorie', function (newVal, oldVal, scope) {
      if(newVal) { 
        if((newVal >= 400) && (newVal <= 3500)) {
          scope.catClass = "success";
          scope.catTitle = "kalorii dziennie";
          scope.opis="Twój bazowy metabolizm wynosi";
          $scope.display="";
          $scope.display2="none";
        } else {
          scope.catClass = "danger";
          scope.catTitle = "Podaj poprawne dane";
          scope.opis="";
          $scope.display="none";
             $scope.display2="";
        }
      } else {
        scope.catClass = "default";
        scope.catTitle = "";
        scope.opis="";
        $scope.display="none";
           $scope.display2="";
      }
    });
    
});



app.controller('dietaController', function ($scope) {

    $scope.catTitle = "";
    $scope.units = 'kobieta';
    $scope.cel = 'utrzymanie';
    $scope.aktywnosc ='lekka';
    $scope.display="none";



    $scope.$watch('units', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.ppm = newVal;

      if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * scope.wzrost) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * scope.wzrost) - (6.75 * scope.wiek));
      }

      $scope.wynik = Math.floor(wynik);
      if ($scope.aktywnosc === "lekka") {
        cals = $scope.wynik * 1.1;
      } else if ($scope.aktywnosc === "lekka2") {
        cals = $scope.wynik * 1.2;
      } else if ($scope.aktywnosc === "srednia") {
        cals = $scope.wynik * 1.4;
      } else if ($scope.aktywnosc === "aktywna") {
        cals = $scope.wynik * 1.6;
      } else if ($scope.aktywnosc === "aktywna2") {
        cals = $scope.wynik * 1.8;
      } else {
        cals = $scope.wynik *2;
      }

     $scope.cals = Math.floor(cals);
     if ($scope.cel === "masa") {
        cals2 = $scope.cals + 300;
      } else if ($scope.cel === "spadek") {
        cals2 = $scope.cals - 300;
      } else {
        cals2 = $scope.cals;
      }

        scope.ppm = (!!newVal) ? (cals2) : 0.0;
      } else {
        scope.ppm = 0;
      }
    });

    $scope.$watch('cel', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.ppm = newVal;

      if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * scope.wzrost) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * scope.wzrost) - (6.75 * scope.wiek));
      }


      $scope.wynik = Math.floor(wynik);
      if ($scope.aktywnosc === "lekka") {
        cals = $scope.wynik * 1.1;
      } else if ($scope.aktywnosc === "lekka2") {
        cals = $scope.wynik * 1.2;
      } else if ($scope.aktywnosc === "srednia") {
        cals = $scope.wynik * 1.4;
      } else if ($scope.aktywnosc === "aktywna") {
        cals = $scope.wynik * 1.6;
      } else if ($scope.aktywnosc === "aktywna2") {
        cals = $scope.wynik * 1.8;
      } else {
        cals = $scope.wynik *2;
      }

     $scope.cals = Math.floor(cals);
     if ($scope.cel === "masa") {
        cals2 = $scope.cals + 300;
      } else if ($scope.cel === "spadek") {
        cals2 = $scope.cals - 300;
      } else {
        cals2 = $scope.cals;
      }

        scope.ppm = (!!newVal) ? (cals2) : 0.0;
      } else {
        scope.ppm = 0;
      }
    });

    $scope.$watch('aktywnosc', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.ppm = newVal;

      if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * scope.wzrost) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * scope.wzrost) - (6.75 * scope.wiek));
      }


        $scope.wynik = Math.floor(wynik);
      if ($scope.aktywnosc === "lekka") {
        cals = $scope.wynik * 1.1;
      } else if ($scope.aktywnosc === "lekka2") {
        cals = $scope.wynik * 1.2;
      } else if ($scope.aktywnosc === "srednia") {
        cals = $scope.wynik * 1.4;
      } else if ($scope.aktywnosc === "aktywna") {
        cals = $scope.wynik * 1.6;
      } else if ($scope.aktywnosc === "aktywna2") {
        cals = $scope.wynik * 1.8;
      } else {
        cals = $scope.wynik *2;
      }

     $scope.cals = Math.floor(cals);
     if ($scope.cel === "masa") {
        cals2 = $scope.cals + 300;
      } else if ($scope.cel === "spadek") {
        cals2 = $scope.cals - 300;
      } else {
        cals2 = $scope.cals;
      }

        scope.ppm = (!!newVal) ? (cals2) : 0.0;
      } else {
        scope.ppm = 0;
      }
    });
    

     $scope.$watch('wiek', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.ppm = newVal;

      if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * scope.wzrost) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * scope.wzrost) - (6.75 * scope.wiek));
      }


        $scope.wynik = Math.floor(wynik);
      if ($scope.aktywnosc === "lekka") {
        cals = $scope.wynik * 1.1;
      } else if ($scope.aktywnosc === "lekka2") {
        cals = $scope.wynik * 1.2;
      } else if ($scope.aktywnosc === "srednia") {
        cals = $scope.wynik * 1.4;
      } else if ($scope.aktywnosc === "aktywna") {
        cals = $scope.wynik * 1.6;
      } else if ($scope.aktywnosc === "aktywna2") {
        cals = $scope.wynik * 1.8;
      } else {
        cals = $scope.wynik *2;
      }

     $scope.cals = Math.floor(cals);
     if ($scope.cel === "masa") {
        cals2 = $scope.cals + 300;
      } else if ($scope.cel === "spadek") {
        cals2 = $scope.cals - 300;
      } else {
        cals2 = $scope.cals;
      }

        scope.ppm = (!!newVal) ? (cals2) : 0.0;
      } else {
        scope.ppm = 0;
      }
    });

    $scope.$watch('wzrost', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.ppm = newVal;

     if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * scope.wzrost) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * scope.wzrost) - (6.75 * scope.wiek));
      }

        
        $scope.wynik = Math.floor(wynik);
      if ($scope.aktywnosc === "lekka") {
        cals = $scope.wynik * 1.1;
      } else if ($scope.aktywnosc === "lekka2") {
        cals = $scope.wynik * 1.2;
      } else if ($scope.aktywnosc === "srednia") {
        cals = $scope.wynik * 1.4;
      } else if ($scope.aktywnosc === "aktywna") {
        cals = $scope.wynik * 1.6;
      } else if ($scope.aktywnosc === "aktywna2") {
        cals = $scope.wynik * 1.8;
      } else {
        cals = $scope.wynik *2;
      }

     $scope.cals = Math.floor(cals);
     if ($scope.cel === "masa") {
        cals2 = $scope.cals + 300;
      } else if ($scope.cel === "spadek") {
        cals2 = $scope.cals - 300;
      } else {
        cals2 = $scope.cals;
      }

        scope.ppm = (!!newVal) ? (cals2) : 0.0;
      } else {
        scope.ppm = 0;
      }
    });

   $scope.$watch('waga', function (newVal, oldVal, scope) {
      if(newVal) { 
        scope.ppm = newVal;

      if ($scope.units === "kobieta") {
        wynik = (655.09 + (9.56 * scope.waga) + (1.84 * scope.wzrost) - (4.67 * scope.wiek));
      }
      else {
        wynik = (66.47 + (13.75 * scope.waga) + (5 * scope.wzrost) - (6.75 * scope.wiek));
      }

       

       $scope.wynik = Math.floor(wynik);
      if ($scope.aktywnosc === "lekka") {
        cals = $scope.wynik * 1.1;
      } else if ($scope.aktywnosc === "lekka2") {
        cals = $scope.wynik * 1.2;
      } else if ($scope.aktywnosc === "srednia") {
        cals = $scope.wynik * 1.4;
      } else if ($scope.aktywnosc === "aktywna") {
        cals = $scope.wynik * 1.6;
      } else if ($scope.aktywnosc === "aktywna2") {
        cals = $scope.wynik * 1.8;
      } else {
        cals = $scope.wynik *2;
      }

     $scope.cals = Math.floor(cals);
     if ($scope.cel === "masa") {
        cals2 = $scope.cals + 300;
      } else if ($scope.cel === "spadek") {
        cals2 = $scope.cals - 300;
      } else {
        cals2 = $scope.cals;
      }

        scope.ppm = (!!newVal) ? (cals2) : 0.0;
      } else {
        scope.ppm = 0;
      }
    });


    $scope.$watch('ppm', function (newVal, oldVal, scope) {
      if(newVal) { 
      if((newVal >= 1000)&&(newVal < 1350)) {
          scope.opis="Proponowana dieta";
          scope.catClass = "success";
          scope.catTitle = "kcal dziennie";
          scope.value="dieta1200.php";
          scope.value2="Dieta 1200 kalorii";
          scope.img="dieta1200.webp";
          scope.color="light";
          scope.text = "success";
          scope.opis2 = "Twoje zapotrzebowanie na kalorie wynosi";
          $scope.display="";
           $scope.display2="none";
      } else if((newVal >= 1350)&&(newVal < 1850)) {
         scope.opis="Proponowana dieta";
          scope.catClass = "success";
          scope.catTitle = "kcal dziennie";
          scope.value="dieta1500.php";
          scope.value2="Dieta 1500 kalorii";
          scope.img="dieta1500.webp";
          scope.color="light";
          scope.text = "success";
          scope.opis2 = "Twoje zapotrzebowanie na kalorie wynosi";
          $scope.display="";
          $scope.display2="none";
      } else if((newVal >= 1850)&&(newVal < 2250)) {
         scope.opis="Proponowana dieta";
          scope.catClass = "success";
          scope.catTitle = "kcal dziennie";
          scope.value="dieta2000.php";
          scope.value2="Dieta 2000 kalorii";
          scope.img="dieta2000.webp";
          scope.color="light";
          scope.text = "success";
          scope.opis2 = "Twoje zapotrzebowanie na kalorie wynosi";
          $scope.display="";
          $scope.display2="none";
      } else if((newVal >= 2250)&&(newVal < 2600)) {
         scope.opis="Proponowana dieta";
          scope.catClass = "success";
          scope.catTitle = "kcal dziennie";
          scope.value="dieta2500.php";
          scope.value2="Dieta 2500 kalorii";
          scope.img="dieta2500.jpg";
          scope.color="light";
          scope.text = "success";
          scope.opis2 = "Twoje zapotrzebowanie na kalorie wynosi";
          $scope.display="";
          $scope.display2="none";
      } else if((newVal >= 2600)&&(newVal < 4000)) {
         scope.opis="Proponowana dieta";
          scope.catClass = "success";
          scope.catTitle = "kcal dziennie";
          scope.value=" ";
          scope.value2="Brak diet";
          scope.img="img.webp";
          scope.color="danger";
          scope.text="light";
          scope.opis2 = "Twoje zapotrzebowanie na kalorie wynosi";
          $scope.display="none";
          $scope.display2="";
      } else if((newVal >= 4000)||(newVal < 5000)) {
          scope.catClass = "danger";
          scope.catTitle = "Podaj poprawne wartości";
          scope.value=" ";
          scope.value2="Brak diet";
          scope.color="danger";
          scope.text="light";
          scope.img="img.webp";
          $scope.display="none";
      } else {
        scope.catClass = "danger";
        scope.catTitle = "";
        scope.value2="";
        scope.value="";
        scope.img="";
        $scope.display="none";
      }
    }
    });


});








