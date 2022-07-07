<?php
require("../connection.php");

$conn=conect();
$sql="SELECT *  FROM users";
$query=mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>User list</title>
</head>
<body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Create user</h1>
                                <form action="../controller/createUser.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="name" placeholder="Name">
                                    <input type="text" class="form-control mb-3" name="job" placeholder="Job">
                                    <input type="text" class="form-control mb-3" name="user" placeholder="User">
                                    <input type="text" class="form-control mb-3" name="password" placeholder="Password">
                                    
                                    <input type="submit" value="Create" class="btn btn-dark">
                                </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-dark table-striped" >
                                <thead class="table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Job</th>
                                        <th>User</th>
                                        <th>Password</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['name']?></th>
                                                <th><?php  echo $row['job']?></th>
                                                <th><?php  echo $row['user']?></th>   
                                                <th><?php  echo $row['password']?></th>    
                                                <th><a href="viewUpdate.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="../controller/deleteUser.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
                    <div class="col-md-8">
                    <a href="viewLogin.php" class="btn btn-danger">Sign out</a>
                    </div>
            </div>
    </body>
</html>