
<?php
/**
 * Created by PhpStorm.
 * User: sansharma
 * Date: 11/29/2016
 * Time: 11:03 AM
 */

include_once '../service/dbconnect.php';
include_once '../service/Service.php';
echo 'controller called';

$username = $_POST["username"];
$password = $_POST["password"];

echo $username;
echo $password;

registeruser($username, $password, $conn);


?>

