<?php
session_start();

    $_SESSION['status'] = 'invalid';

    session_unset();
    session_destroy();

    header("Location: /luminous corner/admin/login.php");
?>