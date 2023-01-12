<?php

include('connect_database.php');

$user_id = $_POST['user_id'];
$s_name = $_POST['skill'];

$query = "INSERT INTO skills(skill_name,user_id) VALUES ('$s_name','$user_id')";

if(mysqli_query($connect,$query)){
    header("Location:../dashboard.php");
}
else{
    die(mysqli_error($connect));
}





?>