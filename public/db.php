<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manadB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "div"
        echo "<h1>" . $row["title"] . "</h1>";
        echo "<img src="" alt="">"
        echo "/div"
    }
} else {
    echo "0 results";
}
$conn->close();

?>