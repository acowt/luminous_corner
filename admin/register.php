<?php

require ('database.php');

error_reporting(0);

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if (isset($_POST['submit1'])) {
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];	
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = md5($_POST['password']);
		$cpassword = md5($_POST['cpassword']);

		if ($password == $cpassword) {
			$sql = "SELECT * FROM admin WHERE username='$username'";
			$result = mysqli_query($conn, $sql);

		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO admin (fullname, username, email, phone, password) VALUES ('$fullname', '$username', '$email', '$phone', '$password')";
			$result = mysqli_query($conn, $sql);

		if (!$result) {
					echo "<script>alert('Something Went Wrong.')</script>";
					$fullname = "";
					$username = "";
					$email = "";
					$phone = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
		}else {
					echo "<script>
						alert('Registration Completed.')
						</script>";
					header("Location: login.php");
				}
		}else{
					echo "<script>alert('Email Already Exist.')</script>";
		}
		}else {
			echo "<script>alert('Password Not Matched.')</script>";
		}

	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Form</title>

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
    <link rel="icon" type="image/png" href="logo.png"/>

	<link rel="stylesheet" type="text/css" href="login.css">
	<style>
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-6 d-none d-md-block image-container"></div>

			<div class="col-lg-9 col-md-6 form-container">
				<div class="col-lg-7 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mb-3">
						<img src="favicon.png" width="150px">
					</div>
					<div class="heading mb-4">
						<h4>Create an account</h4>
					</div>
				

					<form action="" method="POST" >
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" placeholder="Full Name" name="fullname" value="<?php echo$fullname; ?>" required>
							
						</div>
                        <div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" placeholder="Username" name="username" value="<?php echo$username; ?>" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" placeholder="Email Address" name="email" value="<?php echo$email; ?>" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-phone"></i></span>
							<input type="tel" placeholder="Contact no." name="phone" value="<?php echo$phone; ?>" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" placeholder="Password" name="password" value="<?php echo$_POST['password']; ?>" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo$_POST['cpassword']; ?>" required>
						</div>				

						<div class="text-left mb-3">
							<button type="submit" name="submit1" class="btn">Register</button>
						</div>
						<div style="color: #111">Already have an account
							<a href="login.php" class="login-link">Login here</a>
						</div>
					</form>
</div>
			</div>
		</div>
	</div>



</body>
</html>