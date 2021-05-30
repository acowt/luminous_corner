<?php 
   require('./session.php');
   require('./read.php');
?>

<?php include('header.php')?>

<head>
  <title> Admin Dashboard </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<!-- nav-bar -->
<?php include('./nav.php')?>

<div class="container">
  <div class="row text-center py-5">
   
      <table class='table table-bordered table-hover'>
        <tr class=text-center>
            <th>Booking No.</th>
            <th>Service Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Update</th>   
            <th>Delete</th>   
        </tr>

      <?php while($results = mysqli_fetch_array($query_result)) { ?>
      <tr>
        <td> <?php echo $results['id']; ?> </td>  
        <td> <?php echo $results['serviceName']; ?> </td>
        <td> <?php echo $results['serviceDesc']; ?> </td>
        <td> <?php echo $results['price']; ?> </td>
        <td>
          <form action="update.php" method="post">
            <input type="submit" name="edit" value="UPDATE" class="btn btn-info">

            <input type="hidden" name="editId" value="<?php echo $results['id'] ?>">
						<input type="hidden" name="editName" value="<?php echo $results['serviceName'] ?>">
						<input type="hidden" name="editDesc" value="<?php echo $results['serviceDesc'] ?>">
            <input type="hidden" name="editPrice" value="<?php echo $results['price'] ?>">
          </form>
        </td>
        <td>
          <form action="delete.php" method="post">
            <input type="submit" name="delete" value="DELETE" class="btn btn-danger">
            <input type="hidden" name="deleteId" value="<?php echo $results['id'] ?>">
          </form>
        </td>
      </tr>

      <?php } ?>
  </div>
</div>


</body>