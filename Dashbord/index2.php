<?php
session_start();

$username = $_GET["username"];
$userpass = $_GET["password"];

$arr = array("Javad" , "Mahan" , "Amir Hossien");
if (in_array($username , $arr) && $userpass == 123456) {
    echo "ورود";
   $_session["username"]= $username;
   $_session["password"]= $userpass;
    // header("location: dashbord.php");
    
}else{
    echo "خطا در ورود";
}


?>