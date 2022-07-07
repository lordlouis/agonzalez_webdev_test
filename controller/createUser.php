<?php
require("../connection.php");

$conn=conect();
$date= date("Y-m-d H:i:s");
$name=$_POST['name'];
$job=$_POST['job'];
$user=$_POST['user'];
$password=$_POST['password'];
$created_at=$date;
$updated_at=$date;
if(empty($name)||empty($job)||empty($user)||empty($password)){
    echo"<script> alert('No empty fields');
    window.location='../view/viewList.php'</script>";
}else{
    $sql ="INSERT INTO users (name, job, user, password, created_at, updated_at)VALUES('$name','$job','$user','$password','$created_at','$updated_at')";
    try {
        $query=mysqli_query($conn,$sql);
        Header("Location: ../view/viewList.php");
    } catch (Exception $e) {
        echo"<script> alert('Duplicated user');
        window.location='../view/viewList.php'</script>";
        
    }
}

?>