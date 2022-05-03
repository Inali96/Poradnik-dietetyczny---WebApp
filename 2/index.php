<?php

include("db.php");
include("header.php");
include("menu.php");
include("body.php");
include("footer.php");


//Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}



mysqli_close($conn);
?>