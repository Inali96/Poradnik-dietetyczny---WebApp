$(document).ready(function(){
    $("#but_submit").click(function(){
        var login = $("#login").val().trim();
        var haslo = $("#haslo").val().trim();
        
        if( login != "" && haslo != "" ){
            $.ajax({
                url:'checkuser.php',
                type:'post',
                data:{login:login,haslo:haslo},
                success:function(response){
                    if(response == 1){
                        $("#but_submit").html('Logowanie...');
                        $("#but_submit").fadeOut(2000, function(){           
                         window.location.replace("index.php");

                            });
                    }else{
                        msg = "Nieprawidłowy login, hasło, bądź Twoje konto jest nieaktywne";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});