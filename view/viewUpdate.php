<?php
require("../connection.php");

$conn=conect();

$id=$_GET['id'];

$sql="SELECT *  FROM users WHERE id=$id";

try {
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
} catch (Exception $e) {
    echo $e;
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>User update</title>
</head>
<body>
   
    <div class= "container mt-5">
    <h1>Update user</h1>
    <form action="../controller/updateUser.php" method="POST">
        <input type="hidden" name="created_at" value="<?php echo $row['created_at']?>">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <input type="text" class="form-control mb-3" name="name" value="<?php echo $row['name']?>">
        <input type="text" class="form-control mb-3" name="job" value="<?php echo $row['job']?>">
        <input type="text" class="form-control mb-3" name="user" value="<?php echo $row['user']?>" readonly>
        <input type="text" class="form-control mb-3" name="password" value="<?php echo $row['password']?>">
        
        <input type="submit" class="btn btn-dark" value="Update">
    </form>
    </div>
    
</body>
</html>