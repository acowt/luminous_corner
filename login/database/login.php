<?php 

require ('database.php');

session_start();

error_reporting(0);



if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM lc_user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Email or Password is Wrong')</script>";
	}
} 

?>


	
<html>
<head>
    <?php include("header.php")?>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>

			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mb-3">
						<img src="logo.png" width="150px">			
					</div>
					<div class="heading mb-4">
						<h4>Login into your account</h4>
					</div>


					<form action="" method="post">


						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>"required>
						</div>
						<div class="row mb-3">
							<div class="col-6 d-flex">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label text-white" for="cb1">Remember me</label>
								</div>
							</div>
							<div class="col-6 text-right">
								<a href="forget.php" class="forget-link">Forget Password</a>
							</div>
						</div>
						<div class="text-left mb-3">
							<button type="submit" name="submit" class="btn">Login</button>
						</div>
						<div style="color: #111">Don't have an account
							<a href="register.php" class="register-link">Register here</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

