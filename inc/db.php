<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "user_data";

//  mysql conncet 

$db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if($db){
    // echo "Database Connect Successful";
}else{
    die("Database Connection Error". mysqli_error($db));
}