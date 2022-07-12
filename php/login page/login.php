<?php

$username = $_GET["username"];
$userpass = $_GET["password"];

$arr = array("Javad" , "Mahan" , "Amir Hossien");
if(in_array($username , $arr) && $userpass == 123456){
    echo "وارد شدید";
}else{
    echo "خطا در ورود";
}
?>
