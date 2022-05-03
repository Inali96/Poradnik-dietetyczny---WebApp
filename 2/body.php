<?php
if(!isset($_SESSION["rola"])) 
{
        include("bodygosc.php");;
}
if(isset($_SESSION["rola"]) && $_SESSION["rola"]=='U')
 {
        include("bodyuzytkownik.php");;
}
if(isset($_SESSION["rola"]) && $_SESSION["rola"]=='A')
 {
        include("bodyadmin.php");;
}
 



include("db.php");

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM uzytkownicy2";

$result=mysqli_query($conn,$sql);




mysqli_close($conn);
?>