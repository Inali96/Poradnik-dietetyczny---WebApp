$('document').ready(function() {  
  $("#register-form").validate({
      rules:
   {
   imie: {
      required: true,
   },
    login: {
      required: true,
   minlength: 3
   },
   haslo: {
   required: true,
   minlength: 2,
   maxlength: 16
   },
   phaslo: {
   required: true,
   equalTo: '#haslo'
   },
   email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            imie: "wpisz swoje imie",
            login: {
                      required: "wpisz login",
                      minlength: "login musi mieć conajmniej 3 znaki"
                     },
            haslo:{
                      required: "wpisz hasło",
                      minlength: "hasło musi mieć conajmniej 2 znaki",
                      maxlength: "hasło moze mieć maksymalnie 8 znaków",
                     },
            email: "wpisz poprawny adres email",
   phaslo:{
      required: "powtórz hasło",
      equalTo: "hasła się nie zgadzają"
       }
       },
    submitHandler: submitForm 
       });  

    function submitForm() {  
    var data = $("#register-form").serialize();    
    $.ajax({    
    type : 'POST',
    url  : 'register.php',
    data : data,
    beforeSend: function() { 
     $("#error").fadeOut();
     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   Tworzenie konta ...');
    },
    success :  function(response) {      
        if(response==1){         
             $("#error").fadeIn(1000, function(){
               $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>Email lub login zajęty</div>');           
               $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Utwórz konto');   
                console.log(JSON.stringify(response));
             });  
        } else {          
            $("#error").fadeIn(1, function(){           
                $("#error").html('<div class="alert alert-success"></span>  Utworzono konto</div> <div class="alert alert-success"></span> Przenoszenie na stronę logowania</div>');  
                $("#btn-submit").html(' Tworzenie konta ...'); 
            });     
             $("#btn-submit").fadeOut(3000, function(){
                window.location.href = "logowanie.html";
        });      
        }
        }
    });
    return false;
  }
});