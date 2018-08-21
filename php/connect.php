<?php
$servername = "htxbornholm.dk.mysql";
$username = "htxbornholm_dk";
$password = "6UfhBBYN";
$dbname = "htxbornholm_dk";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
