<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'blog3';


$connect = mysqli_connect($servername,$username,$password,$database);

if(!$connect){
    die("Cannot connect to database".mysqli_connect_error());
}

// echo("Connected sucessfully.");
?>