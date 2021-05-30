<?php

require("./database.php");

if (isset($_POST["delete"])) {
    $deleteId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM service where id = $deleteId";
    $sqlDelete = mysqli_query($conn, $queryDelete);

    echo '<script>alert("Successfull Deleted!")</script>';
    header("Location: admin.php");
} else {
    header("Location: admin.php");
}
