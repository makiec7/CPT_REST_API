<?php
require_once 'include/DB_connect.php';

$sql = "SELECT * FROM cti_fault;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $temp = $result->num_rows;
    echo "{\"list\":[";
    while($row = $result->fetch_assoc()) {
        $temp=$temp-1;
        echo "{\"id\":\"".$row['id']."\", \"issuer\":\"".$row['issuer']."\", \"phone_number\":\"".$row['phone_number']."\", \"topic\":\"".$row['topic']."\", \"description\":\"".$row['description']."\", \"object_number\":\"".$row['object_number']."\", \"status\":\"".$row['status']."\", \"date_time\":\"".$row['date_time']."\"}";
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