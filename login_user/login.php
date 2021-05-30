<?php 

require ('database.php');

session_start();

error_reporting(0);


if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
    /* Set Default to Invalid... all session are invalid*/
    $_SESSION['status'] = 'invalid';
  }

  if ($_SESSION['status'] == 'valid') {
    header("Location: index.php");
  }

	if(isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		if (empty($email) || empty($password)) {
			echo "Please fill up all fields";
		  } else {
			$sql = "SELECT * FROM lc_user WHERE email='$email' AND password='$password'";
			$result = mysqli_query($conn, $sql);
			$rowvalidate = mysqli_fetch_array($result);

		if (mysqli_num_rows($result) > 0) {
			$_SESSION['status'] = 'valid';
			$_SESSION['username'] = $rowvalidate['username'];
			header("Location: index.php");
		} else {
			$_SESSION['status'] = 'invalid';
			echo "<script>alert('Email or Password is Wrong')</script>";
		}
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
						<img src="favicon.png" width="150px">			
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

