<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "tgs";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die("koneksi error : ".$conn->connect_error);
        }
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    

?>
