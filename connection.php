<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "abw";

$conn = new mysqli($servername,$username,$password,$db);

if(mysqli_connect_error()){
    die ('Error on the Connection (' . mysqli_connect_error().')'.mysqli_connect_error() );
}

?>