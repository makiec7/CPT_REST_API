<?php
require_once 'include/DB_connect.php';

$id=$_GET['id'];

$sql = "DELETE FROM cti_fault WHERE id='$id';";
$result = $conn->query($sql);
if ($result) {
    echo "{\"query_status\":\"true\"}";
} else {
    echo "{\"query_status\":\"false\"}";
}
$conn->close();
?>