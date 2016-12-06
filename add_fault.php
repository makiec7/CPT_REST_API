<?php
require_once 'include/DB_connect.php';

$issuer=$_GET['issuer'];
$phone_number=$_GET['phone_number'];
$topic=$_GET['topic'];
$date_time=date($_GET['date_time']);
$description=str_replace("\"","\\\\\"", $_GET['description']);
$object_number=$_GET['object_number'];
$status=$_GET['status'];

$sql = "INSERT INTO cti_fault(issuer, phone_number, topic, date_time, description, object_number, status) VALUES('$issuer', '$phone_number', '$topic', '$date_time', '$description', '$object_number', '$status');";
$result = $conn->query($sql);
if ($result) {
    echo "{\"query_status\":\"true\"}";
} else {
    echo "{\"query_status\":\"false\"}";
}
$conn->close();
?>