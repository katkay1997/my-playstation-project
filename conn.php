<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "playstation_users";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/* OR use this code 
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "playstation_users");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
*/

?>