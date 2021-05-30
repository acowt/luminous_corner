<?php
require('./session.php');
require('./database.php');

if (isset($_POST['create'])){
    $serviceName = $_POST['serviceName'];
    $serviceDesc = $_POST['serviceDesc'];
    $price = $_POST['price'];
    $serviceImage = $_POST['serviceImage'];

    $query_create ="INSERT INTO 'service'('serviceName', 'serviceDesc', 'price', 'serviceImage') 
    VALUES(null, '$serviceName', '$serviceDesc','$price','$serviceImage') ";
    
    $sqlCreate = mysqli_query($conn, $query_create);

    echo "<script>
		alert('Successfully Added.')
		</script>";
	//header("Location: admin.php");
} else {
    echo "<script>
		alert('Error.')
		</script>";
}

?>
<head>
<?php include("header.php")?>
<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
body{
  font-family: 'Roboto', sans-serif;
}


    </style>
</head>

<body>
<?php include('./nav.php')?>

<div class="auth">
  <div class="auth__header" height="90">
  </div>
    <div class="auth__body">
        <form class="auth__form" action="create.php" method="post" enctype="multipart/form-data">
            <div class="auth__form_body">
                <h3 class="auth__form_title">Add Service</h3>
                    <div>
                        <div class="form-group">
                            <input type="text" name="serviceName" class="form-control" placeholder="Service Name">
                        </div>
                        <div class="form-group">
                            <input type="number" name="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <input type="text" name="serviceDesc"class="form-control" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <input type="file" name="serviceImage" class="form-control" placeholder="Image">
                        </div>
                    </div>
            </div>
            <div class="auth__form_actions">
                <button name="create" class="btn btn-primary btn-lg btn-block"> ADD </button>   
             </div>
        </form>
    </div>
</div>



</body>