<?php

// creer des variables 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db";

// creer une connexion avec la base de données 
$con = new mysqli($servername , $username , $password , $db_name , 3306);

if($con->connect_error){
    die("connection failed".$con->connect_error);
}

echo("connection success");

?>