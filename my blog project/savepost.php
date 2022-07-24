<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "myblog";


// // Create connection
// $conn = mysqli_connect($servername, $username, $password,$dbname);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myblog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$title =$_get["title"];
$content =$_get["content"];

$sql = "INSERT INTO posts (title,content) Values ('".$title."','".$content."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>