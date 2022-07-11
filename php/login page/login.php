<?php
if(isset($_GET["username"]) && isset($_GET["passworwd"]) && in_array($_GET["username"]) && in_array($_GET["passworwd"]) ){
    $username = $_GET["username"];
    $password = $_GET["password"];
}else{
    echo "Type your user name & user pass";
}

?>