<?php
require_once 'include/DB_connect.php';

$index_no=$_GET['index_no'];
$password=$_GET['password'];

$sql = "SELECT * FROM users WHERE index_no='$index_no' and password='$password';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "{\"login_status\":\"true\",\"user\":\"$index_no\"}";
    }
} else {
    echo "{\"login_status\":\"false\"}";
}
$conn->close();
?>