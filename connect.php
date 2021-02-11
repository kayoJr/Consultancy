<?php

$server = "localhost";
$dbname = "consultancy";
$password = "";
$db_uname = "root";

$conn = mysqli_connect($server, $db_uname, $password, $dbname);
if(!$conn){
    die('Could not connect: ' . mysql_error());
}

?>