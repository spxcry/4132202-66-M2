<?php

$host = "db";
$user = "root";
$pass = "1234";
$db = "internet";

try{
    $conn = mysqli_connect($host,$user,$pass,$db);
    mysqli_query($conn,"SET NAME uft8");
}catch(Exception $e) {
    $error = $e->getMessage();
    echo $error;
}
