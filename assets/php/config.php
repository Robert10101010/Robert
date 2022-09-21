<?php

session_start();

$host = "localhost"; /* Host name */
$user = "admin"; /* User */
$password = "admin"; /* Password */
$dbname = "phpdatabase"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
        echo "Connection Error.";
}
    else{
        echo "Database Connection Successfully.";
    }
?>