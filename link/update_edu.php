<?php

include('connect_database.php');
session_start();
$uid = $_SESSION['login_id'];
$d_name = $_POST['degree_name'];
$passed = $_POST['passed_date'];

$query_edu = "INSERT INTO education (degree_name,passed_year,user_id) VALUES ('$d_name','$passed','$uid')";

if(mysqli_query($connect,$query_edu)){
    header("Location:../dashboard.php");
}
else{
    die(mysqli_error($connect));
}





?>