<?php
include 'connect_database.php';
session_start();
$id = $_SESSION['login_id'];
$contact = $_POST['number'];
$address = $_POST['address'];
$about = $_POST['about'];
$name = $_POST['full_name'];

if($_FILES["image"]["size"]!=0){
$imagename = basename($_FILES["image"]["name"]);
$location = "../img/";
$imagetmpname = $_FILES["image"]["tmp_name"];

if(move_uploaded_file($imagetmpname,"$location.$imagename")){
    
$query = "UPDATE user1 SET full_name='$name', address='$address', contact_no='$contact', about='$about', profile_img='$location.$imagename' WHERE id='$id'";
}else{
        echo "File not updated";
}


}else{
    
    $query = "UPDATE user1 SET full_name='$name', address='$address', contact_no='$contact', about='$about' WHERE id='$id'";
}


if (mysqli_query($connect, $query)) {
    echo "inserted sucessfully";
    header("Location:../dashboard.php");
} else {
    die("Error" . mysqli_connect_error());
}




?>