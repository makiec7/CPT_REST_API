<?php
require_once 'include/DB_connect.php';
$index_no=$_GET['index_no'];
$sql = "SELECT * FROM status;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$temp = $result->num_rows;
    echo "{\"status\":[";
    while($row = $result->fetch_assoc()) {
        $temp=$temp-1;
        echo "\"".$row['name']."\" ";
        if ($temp > 0) {
           echo ",";
        }
    }
    echo "]}";
} else {
    echo "{\"query_status\":\"false\"}";
}
$conn->close();
?>