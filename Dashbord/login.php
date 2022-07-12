<?php
 
$userename = $_GET["username"];
$password = $_GET["password"];
$arr = array("Javad" , "Mahan" , "Amir");
// $x = header("Location: http://www.yoursite.com/new_index.php", TRUE, 301); exit();
    
if (isset($_SESSION["usename"])) {
    header("location: Dashbord.php");
    die();exit();
    
}   else {
    echo "bad day";
} 
    ?>
    










