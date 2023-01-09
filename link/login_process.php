<?php
include 'connect_database.php';

$email =$_POST['email'];
$password =$_POST['pass'];

$query = "SELECT * FROM user1 WHERE email='$email' and password= '$password'";

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['login'] == "1";
    $_SESSION['login_id'] = $row['id'];
   
    header("Location:../dashboard.php?");
    
}
else
{
    header("Location:../login.php?errmsg:email or password doesnot match");
}
?>