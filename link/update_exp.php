<?php

include('connect_database.php');
if(isset($_POST['submit'])){

$user_id = $_POST['id'];
$title = $_POST['job_title'];
$cname = $_POST['cname'];
$joined = $_POST['j_date'];
$left = $_POST['l_date'];


// $query = "UPDATE experience SET job_title='$title', company_name='$cname', join_date='$joined', left_date='$left' WHERE id='$id'";
$query = "INSERT INTO experience(job_title,company_name,join_date,left_date,user_id) VALUES ('$title','$cname','$joined','$left','$user_id')";
if(mysqli_query($connect,$query)){
    echo "Updated Sucessfully";
    header("Location:../dashboard.php");
}
else{
    die("Error" . mysqli_connect_error());
}
}
else
{
    die("error");
}



?>