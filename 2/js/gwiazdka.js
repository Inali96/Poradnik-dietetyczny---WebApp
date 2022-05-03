
    $('.click').click(function() {

    if ($('span').hasClass("fa-star")) {
            $.post('usun_ulub_przepis.php');
            $('.click').removeClass('active')
        setTimeout(function() {
            $('.click').removeClass('active-2')
        }, 30)
            $('.click').removeClass('active-3')
        setTimeout(function() {
            $('span').removeClass('fa-star')
            $('span').addClass('fa-star-o')
        }, 15)
         $('.info2').addClass('info2-tog')
        setTimeout(function(){
            $('.info2').removeClass('info2-tog')
        },1000)
    } else {
        
        $.post('dodaj_do_ulubionych.php');
        $('.click').addClass('active')
        $('.click').addClass('active-2')
        setTimeout(function() {
            $('span').addClass('fa-star')
            $('span').removeClass('fa-star-o')
        }, 150)
        setTimeout(function() {
            $('.click').addClass('active-3')
        }, 150)
        $('.info').addClass('info-tog')
        setTimeout(function(){
            $('.info').removeClass('info-tog')
        },1000)
    }
})


    $('.click2').click(function() {

    if ($('span').hasClass("fa-star")) {
            $.post('usun_ulub_diete.php');
            $('.click2').removeClass('active')
        setTimeout(function() {
            $('.click2').removeClass('active-2')
        }, 30)
            $('.click2').removeClass('active-3')
        setTimeout(function() {
            $('span').removeClass('fa-star')
            $('span').addClass('fa-star-o')
        }, 15)
    } else {
        $.post('dodaj_do_ulub_2.php');
        $('.click2').addClass('active')
        $('.click2').addClass('active-2')
        setTimeout(function() {
            $('span').addClass('fa-star')
            $('span').removeClass('fa-star-o')
        }, 150)
        setTimeout(function() {
            $('.click2').addClass('active-3')
        }, 150)
        $('.info').addClass('info-tog')
        setTimeout(function(){
            $('.info').removeClass('info-tog')
        },1000)
    }
})