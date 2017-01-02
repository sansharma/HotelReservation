<?php
/**
 * Created by PhpStorm.
 * User: sansharma
 * Date: 11/29/2016
 * Time: 11:06 AM
 */

function registeruser($username, $password, $connection){
    $sql = "INSERT INTO usertable (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
        header('Location:../view/index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    mysqli_close($connection);
}

function getuserdetails($username, $password, $connection)
{
    $sql = "SELECT * FROM usertable WHERE username = '$username'";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if($password == $row["password"]){
                header('Location:../view/dashboard.php');
            }
            else{
                header('Location:../view/index.php');
                echo 'Invalid Username and Password';
            }
        }
    } else {
        echo "0 results";
    }
}

?>
