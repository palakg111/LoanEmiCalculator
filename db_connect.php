<?php

$host = "localhost";
$user = "root";
$password = "1234567";
$database = "loan_db";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Connection Failed");
}

?>