<?php

if(!isset($_SESSION["rola"])) {
  include("menugosc.html");;

}

if(isset($_SESSION["rola"]) && $_SESSION["rola"]=='A')
 {
        
$query = "SELECT * FROM uzytkownicy2 WHERE login = '".$_SESSION["login"]."'";
$statement = $connect->prepare($query);
$statement->execute();
$count = $statement->rowCount();
$result = $statement->fetchAll();
$imie = '';
$email = '';
$id = '';
foreach($result as $row)
{
    $id = $row['id'];
    $imie = $row['imie'];
    $email = $row['email'];
    $login = $row['login'];
    
}
include("menuadmin.php");
   }


if(isset($_SESSION["rola"]) && $_SESSION["rola"]=="U")
  {
   
    $query = "SELECT * FROM uzytkownicy2 WHERE login = '".$_SESSION["login"]."'";
$statement = $connect->prepare($query);
$statement->execute();
$count = $statement->rowCount();
$result = $statement->fetchAll();
$imie = '';
$email = '';
$id = '';
foreach($result as $row)
{
    $id = $row['id'];
    $imie = $row['imie'];
    $email = $row['email'];
}
 include("menuzytkownik.php");
  }

include("db.php");

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


?>