<?php
/**
 * Created by PhpStorm.
 * User: sansharma
 * Date: 11/29/2016
 * Time: 10:48 AM
 */
?>
<html xmlns="http://www.w3.org/1999/html">
<head>

</head>
<body>
        <h1>Register</h1><br>
        <form method="post" action="../controller/RegisterController.php">
        Username:<input type="text" name="username" id="username"><br>
        Password:<input type="password" name="password" id="password"><br>
        <input type="submit" value="submit">
        </form>

        <h1>Log in </h1><br>
        <form method="post" action="../controller/LoginController.php">
                Username:<input type="text" name="username" id="username"><br>
                Password:<input type="password" name="password" id="password"><br>
                <input type="submit" value="submit">
        </form>
</body>
</html>
