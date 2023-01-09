<?php
include 'connect_database.php';
session_start();
$id = $_SESSION['login_id'];
$contact = $_POST['number'];
$address = $_POST['address'];
$about = $_POST['about'];
$name = $_POST['full_name'];

$query = "UPDATE user1 SET full_name='$name', address='$address', contact_no='$contact', about='$about' WHERE id='$id'";

if(mysqli_query($connect,$query)){
    echo"inserted sucessfully";
    header("Location:../dashboard.php");
}
else{
    die("Error".mysqli_connect_error());
}


?>
