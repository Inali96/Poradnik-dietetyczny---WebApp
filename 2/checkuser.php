<?php

include "db.php";

$login = mysqli_real_escape_string($conn,$_POST['login']);
$haslo=$_POST['haslo'];
$haslo = md5($haslo);
#$haslo = mysqli_real_escape_string($conn,$_POST['haslo']);

if ($login != "" && $haslo != ""){

      $sql = "SELECT id,rola FROM uzytkownicy2 WHERE login = '$login' and haslo = '$haslo' and status='Aktywny'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      
      $count = mysqli_num_rows($result);

      foreach ($result as $key) {
        $_SESSION["rola"]=$key["rola"];

  
}
    if($count > 0){
        $_SESSION['login'] = $login;
        echo 1;
       
    }else{
        echo 0;
    }
 
}

