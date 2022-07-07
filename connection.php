<?php
    function conect(){
        $user="gonzedRoot";
        $password="101020lalo+";
        $server="localhost";
        $dbname="webApp";
        try {
            $conn = mysqli_connect($server,$user,$password);
            mysqli_select_db($conn,$dbname);
        } catch (Exception $e) {
            echo($e);
        }
        
        return $conn;

    }

?>