<?php 
  require('./database.php');

  session_start();

  if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
    /* Set Default Invalid */
    $_SESSION['status'] = 'invalid';
  }

  if ($_SESSION['status'] == 'valid') {
    header("Location: admin.php");
  }
  
  if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
      echo "Please fill up all fields";
    } else {
		$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);
		$rowvalidate = mysqli_fetch_array($result);

		if (mysqli_num_rows($result) > 0) {
			$_SESSION['status'] = 'valid';
			$_SESSION['username'] = $rowvalidate['username'];
			header("Location: admin.php");
      } else {
        $_SESSION['status'] = 'invalid';

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

<!-- <form action="login.php" method="post">
    <input type="text" name="username" placeholder="Enter your username"/>
    <input type="password" name="password" placeholder="Enter your password"/>
    <input type="submit" name="login" value="LOGIN"/>
  </form> -->



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


					<form action="login.php" method="post">
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="username" placeholder="Username" />
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password" />
						</div>
							<!-- <div class="row mb-3">
								<div class="col-6 d-flex">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="cb1">
										<label class="custom-control-label text-white" for="cb1">Remember me</label>
									</div>
								</div>
								<div class="col-6 text-right">
									<a href="forget.php" class="forget-link">Forget Password</a>
								</div>
							</div> -->
						<div class="text-left mb-3">
							<input type="submit" name="login" class="btn btn-dark" value="LOGIN"/>
					</form>	
						</div>
						<div style="color: #111">Don't have an account
							<a href="register.php" class="register-link">Register here</a>
						</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>

