<?php
session_start();

$username = $_GET["username"];
$userpass = $_GET["password"];

$arr = array("Javad" , "Mahan" , "Amir Hossien");
if (isset($_SESSION["username"])) {
    header("location: dashbord.php");
    die();exit();
    echo '<a href="dashbord.php"> ... </a>';
}else{
    echo "خطا در ورود";
}


?>