<?php
include "db.php";

    
    $login = $_SESSION['login'];
    $id_diety = $_SESSION['id_diety'];

         
      $sql = "INSERT INTO ulubione_diety(`dieta_id`,`login`) VALUES ('$id_diety','$login')";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."".$sql);  
  

?>

