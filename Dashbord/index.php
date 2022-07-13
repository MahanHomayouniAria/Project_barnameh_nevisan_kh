<?php

session_start();
if(isset($_SESSION["username"] /*&& $_SESSION["password"]*/)){
    header("location: dashbord.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index2.php" method="$_GET">
    <label for="username">نام کاربری خود را وارد کنید</label> <br> <br>
    <input type="text" name="username"> <br> <br>
    <label for="password">رمز عبور خود را وارد کنید</label> <br> <br>
    <input type="password" name="password"> <br> <br>
    <button type="submit"> وارد شوید</button>
    </form>
</body>
</html>