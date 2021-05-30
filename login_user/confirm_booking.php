<?php
require('./session.php');
require ('database.php');


error_reporting(0);

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $queryUpdate = "UPDATE `lc_user` SET fullname='$_POST[fullname]', username='$_POST[username]', email='$_POST[email]', phone='$_POST[phone]', where id = '$_POST[id]'";
    $sqlUpdate = mysqli_query($conn, $queryUpdate);

    if ($sqlUpdate) {
        echo "<script>
            alert('Data Updated!!');
            window.location.href='confirm_booking.php';
            </script>";
    } else {
        echo "<script>
            alert('Data not Updated!!');
            window.location.href='confirm_booking.php';
            </script>";
    }
}

?>

<html>
<head>
    <?php include("header.php")?>
	<title>Confirm Booking</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-6 d-none d-md-block image-container"></div>

			<div class="col-lg-9 col-md-6 form-container">
				<div class="col-lg-5 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mb-3">
						<img src="favicon.png" width="150px">
					</div>
					<div class="heading mb-4">
						<h4>CONFIRM BOOKING</h4>
					</div>
                    <div class="form-input">
                        <span><i class="fa fa-user"></i></span>
                        <input type="text" placeholder="Full Name" name="fullname" value="<?php echo $results['fullname']; ?>" >
                    </div>


                </div>
			</div>
		</div>
        

        
	</div>



</body>
</html>