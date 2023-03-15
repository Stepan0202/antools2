<?php

$servername = "localhost";
$database = "antools";
$username = "root";
$pass = "";

$conn = mysqli_connect($servername, $username, $pass, $database);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

