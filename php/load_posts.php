<?php
require 'connect.php';

$sql = "SELECT id, author, heading, content, imgid FROM jemm_post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - " . $row["heading"]. " by " . $row["author"]. "<br>" . $row["content"];
    }
} else {
    echo "0 results";
}
//Close connection to DB
mysqli_close($conn);
?>
