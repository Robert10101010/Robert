<?php 

$server = "localhost";
$user = "root";
$pass = "Qwerter101010";
$database = "data";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>