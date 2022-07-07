<?php
require("../connection.php");

$conn=conect();

$id=$_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

try {
    $query=mysqli_query($conn,$sql);
    Header("Location: ../view/viewList.php");
} catch (Exception $e) {
    echo($e);
}



?>