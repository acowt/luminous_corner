<?php 
require('./session.php');
include('header.php');
include('database.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
}

?>

<head>
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/services.css">
</head>

<body>
    <?php include('./nav.php')?>


  <!-- Nav tabs -->
  <div class="service" id="service">
  
<!-- Tab panes -->

<div class="tab-content">
        <div class="service__wrapper img-fluid">      
                <?php
                $query = "SELECT * FROM service";
                $query_result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($query_result)) {?>
                    <form method="post" action="manage_cart.php?id=<?=$row['id'] ?>">
                      <div class="service__card">
                        <img src="images/<?= $row['serviceImage'] ?>" alt="" style="height: 190px;">
                        <h2 class=""> <?= $row['serviceName']; ?> </h2>
                        <p class=""> <?= $row['serviceDesc']; ?> </p>
                        
                        <input type="hidden" name="serviceName" value="<?= $row['serviceName'] ?>">
                        <input type="number" name="pax" id="" value="1" min='1' max='10' class="form-control">
                        <input type="hidden" name="price" value="<?= $row['price'] ?>">

                        <div class="service__btn">
                            <button type="submit" name="add_to_cart" class="" value="Book Now"> Book Now </button>
                            <h5 class="" id="price"> &#x20b1 <?=number_format($row['price'],2); ?> </h5>
                        </div>

                    </form>
                  </div>

                <?php }
                ?>
      </div>
  

<!-- end of content -->
  </div>
</div>

        

<?php include('footer.php') ?>
<?php include('script.php') ?>
  
</body>