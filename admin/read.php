<?php
include('database.php');

$query = "SELECT * FROM service";
$query_result = mysqli_query($conn, $query);

?>