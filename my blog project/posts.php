<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myblog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT title, content FROM myblog";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - title: " . $row["title"]. " " . $row["content"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>