<?php
include 'connect_database.php';
$id = $_POST['id'];
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];
$contact = $_POST['number'];
$address = $_POST['address'];



$query = "INSERT INTO user1(email,password,full_name,contact_no,address) VALUES ('$email','$password','$name','$contact','$address')";

if(mysqli_query($connect,$query)){
    echo"inserted sucessfully";
    header("Location:../login.php");
}
else{
    die("Error".mysqli_connect_error());
}


?>

