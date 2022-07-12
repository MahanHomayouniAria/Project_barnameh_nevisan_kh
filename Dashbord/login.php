<?php

$userename = $_GET["username"];
$password = $_GET["password"];
$arr = array("Javad" , "Mahan" , "Amir");

if (in_array($userename , $arr) && $password == 123456) {
    // echo "<a href="/dashbord">کلیک کنید</a>"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>
    <a href="Dashbord.php"></a>
</body>
</html>


<?php
}else {
    echo "bad day";
}

?>






