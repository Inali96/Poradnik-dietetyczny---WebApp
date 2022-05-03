
<?php
include "db.php";

    
    $login = $_SESSION['login'];
    $id_przepisu = $_SESSION['id'];

         
       $sql = "DELETE FROM ulubione WHERE ulubione.id_przepisu=$id_przepisu AND ulubione.uzytkownik_login = '".$_SESSION["login"]."'";
       if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


?>