<?php
include "db.php";

    
    $login = $_SESSION['login'];
    $id_przepisu = $_SESSION['id'];
         
    $sql = "INSERT INTO ulubione(`id_ulubione`, `uzytkownik_login`, `id_przepisu`) VALUES (NULL, '$login','$id_przepisu')";
          mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);  
   

?>

