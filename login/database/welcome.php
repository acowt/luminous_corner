<?php

	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
		<?php
			//echo "<h1>Welcome " .$_SESSION['username']. "</h1>"; ?>
			<a href="logout.php">Logout</a>
</body>
</html>