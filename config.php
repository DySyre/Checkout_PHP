<?php 
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "checkoutdb";


// $servername = "sql.freedb.tech";
// $username = "freedb_freedb_sql_chckout123";
// $password = "F@pySRZJ3eF7@G8";
// $dbname = "freedb_checkoutDB";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  // echo "Connected successfully";
}
?>