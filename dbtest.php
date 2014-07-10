<?php
// Create connection
$con=mysqli_connect("172.17.0.8","admin","I3SMNKMDKLgECtAp","db");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
  echo "Connnected to database successfully.";
}
?>