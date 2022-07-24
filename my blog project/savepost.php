<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myblog";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$title = $_get ["title"];
$content = $_get ["content"];
$sql = "INSERT INTO posts (title,content) Values ('".$title."','".$content."')";

?>