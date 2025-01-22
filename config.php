<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $databse = "backend"; //datebase name

 //connection a la base de donne
$conn = new mysqli($servername,$username,$password,$databse);
if($conn->connect_error){
    die("connexion failed" . $conn->connect_error);
}
?>