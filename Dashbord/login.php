<?php

$userename = $_GET["username"];
$password = $_GET["password"];
$arr = array("Javad" , "Mahan" , "Amir");

if (in_array($userename , $arr) && $password == 123456) {
    // echo "<a href="/dashbord">کلیک کنید</a>";
    echo "good day";
}else {
    echo "bad day";
}
/*
$username = $_GET["username"];
$userpass = $_GET["password"];

$arr = array("Javad" , "Mahan" , "Amir Hossien");
if(in_array($username , $arr) && $userpass == 123456){
    echo "وارد شدید";
}else{
    echo "خطا در ورود";
}
//*/
?>