<?php


$hostname = "localhost";
$username = "root";
$password = "";
$database = "blogger";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die('<script>alert("Connection Failed.")</script>');
}

?>