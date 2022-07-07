<?php
require("../connection.php");

$conn=conect();

$date= date("Y-m-d H:i:s");
$id=$_POST['id'];
$name=$_POST['name'];
$job=$_POST['job'];
$user=$_POST['user'];
$password=$_POST['password'];
$created_at=$_POST['created_at'];
$updated_at=$date;

$sql = "UPDATE users SET name='$name', job='$job', user='$user' ,password='$password' WHERE id=$id";
if(empty($name)||empty($job)||empty($password)){
    echo"<script> alert('No empty fields');
    window.location='../view/viewList.php'</script>";
}else{
    try {
        $query=mysqli_query($conn,$sql);
        Header("Location: ../view/viewList.php");
    } catch (Exception $e) {
        echo($e);
    }
    
}

?>