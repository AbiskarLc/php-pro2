<?php

// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'blog3';


// $connect = mysqli_connect($servername,$username,$password,$database);

// if(!$connect){
//     die("Cannot connect to database".mysqli_connect_error());
// }
$connect = new mysqli('localhost', 'root', '', 'blog3');
// echo("Connected sucessfully.");

if(!$connect){
    die(mysqli_error($connect));
}
else{
    // echo "connnected";
}
?>