<?php
 
$userename = $_GET["username"];
$password = $_GET["password"];
$arr = array("Javad" , "Mahan" , "Amir");
    
if (isset($_SESSION["username"])) {
    header("location: Dashbord.php");
    die();exit();
    
}   else {
    echo "bad day";
} 
    ?>
    










