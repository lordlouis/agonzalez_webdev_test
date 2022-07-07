<?php
require("../connection.php");

$conn=conect();

$name=$_POST['user'];
$password=$_POST['password'];
$sql = "SELECT * FROM users WHERE user='$name' AND password='$password'";
$query=mysqli_query($conn,$sql);
$row=mysqli_num_rows($query);


try {
    if($row==1){
        Header("Location: ../view/viewList.php");
    }else{
        Header("Location: ../view/viewLogin.php");
        
    }
    
} catch (Exception $e) {
    echo($e);
}



?>