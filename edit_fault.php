<?php
require_once 'include/DB_connect.php';

$id=$_GET['id'];
$phone_number=$_GET['phone_number'];
$topic=$_GET['topic'];
$description=str_replace("\"","\\\\\"", $_GET['description']);

$sql = "UPDATE cti_fault SET phone_number='$phone_number', topic='$topic', description='$description' WHERE id='$id';";
$result = $conn->query($sql);
if ($result) {
    echo "{\"query_status\":\"true\"}";
} else {
    echo "{\"query_status\":\"false\"}";
}
$conn->close();
?>