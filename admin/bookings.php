<?php 
   require('./session.php');
   require('./read.php');
   include('database.php');
?>

<?php include('header.php')?>

<head>
  <title> Bookings </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php include('./nav.php')?>    
<div class="container">
  <div class="row text-center py-5">
   
      <table class='table table-bordered table-hover'>
      <thead>
          <tr class=text-center>
            <th>#</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Contact No.</th>
            <th>View Order</th>    
          </tr>
        </thead>

        <?php
            $query = "SELECT * FROM lc_user";
            $query_result = mysqli_query($conn, $query);
            if ($query_result -> num_rows >0){
                while ($rows = $query_result->fetch_assoc()){
                    $id = $rows['id'];
                    $fullname = $rows['fullname'];
                    $email = $rows['email'];
                    $phone = $rows['phone'];
          ?> 

          <tbody>
            <tr>
          
            </tr>
          </tbody>
       
</body>