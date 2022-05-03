
<?php
include "db.php";

    
    $login = $_SESSION['login'];
    $id_diety = $_SESSION['id_diety'];

         
       $sql = "DELETE FROM ulubione_diety WHERE ulubione_diety.dieta_id=$id_diety AND ulubione_diety.login = '".$_SESSION["login"]."'";
       if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}


?>