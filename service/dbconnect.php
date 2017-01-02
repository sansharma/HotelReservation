<?php
/**
 * Created by PhpStorm.
 * User: sansharma
 * Date: 11/29/2016
 * Time: 11:01 AM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
