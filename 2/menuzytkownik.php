<?php

include('db.php');


$query = "
SELECT * FROM uzytkownicy2 
WHERE login = '".$_SESSION["login"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$wiek = '';
$wzrost = '';
$waga = '';
foreach($result as $row)
{
    $wiek = $row['wiek'];
    $wzrost = $row['wzrost'];
    $waga = $row['waga'];
}


?>
<header class="header-navber-area">
    <div class="nav-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="call-to-action">
                        <p><i class="fa fa-envelope-o"></i>Email: <a href="mailto:laura.madejowska@gmail.com">laura.madejowska@gmail.com</a></p>
                        <p><i class="fa fa-phone"></i>Telefon: <a href="tel:530143299">+48 530 143 299</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="opening-hours">
                        <p> Odpowiadamy na pytania w ciągu godziny!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-b navbar-trans navbar-expand-lg" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="index.php">
                <img src="assets/logo/logo3.png" class="white-logo" alt="logo" style="width: 70px; height: 65px">
                <img src="assets/logo/logo3.png" class="black-logo" alt="logo" style="width: 70px; height: 65px">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation"> <span></span>  <span></span>  <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll active" href="index.php">Strona główna</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item nav-link js-scroll" href="" data-toggle="modal" data-target="#DobieranieDiety">Dobierz dietę</a>
                            <a class="dropdown-item nav-link js-scroll" href="index.php#artykuly">Dietetyczne artykuły</a>
                            <a class="dropdown-item nav-link js-scroll" href="index.php#kalku">Kalkulatory</a>
                            <a class="dropdown-item nav-link js-scroll" href="index.php#gotowe">Gotowe diety</a>
                            <a class="dropdown-item nav-link js-scroll" href="index.php#przepisy">Przepisy</a>
                            <a class="dropdown-item nav-link js-scroll" href="index.php#opinie">Opinie o stronie</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Witaj <?php echo $imie; ?></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item nav-link js-scroll" href="profil.php">Twój profil</a></li>
                                <li><a class="dropdown-item nav-link js-scroll" href="ulubione.php">Ulubione przepisy</a></li>
                                <li><a class="dropdown-item nav-link js-scroll" href="ulubione_diety.php">Ulubione diety</a></li>
                                <li><a class="dropdown-item nav-link js-scroll" href="wyloguj.php">Wyloguj</a></li>
                            </ul>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


