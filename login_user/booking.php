
<?php include('header.php');
include ('database.php');
include('session.php');



if ($_SERVER['REQUEST_METHOD'] == "POST"){
  if (isset($_POST['booking_date'])) {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $date_time = $_POST['date_time'];
   
    $sql = "INSERT INTO booking (fullname, phone, date_time) VALUES ('$fullname', '$phone', '$date_time')";
		$result = mysqli_query($conn, $sql);

    if ($result) {
         echo "<script>
          alert('Booking Completed.')
          </script>";
          unset($_SESSION['cart']);
      } else {
        echo "<script>alert('Something Went Wrong.')</script>";
      }

      // echo "<script>
      //   alert('Booking Completed.')
      //   </script>";
      //header("Location: booking.php");
    } else {
      echo "<script>alert('Something Went Wrong.')</script>";
      $fullname = "";
      $phone = "";
    }
  }
?>

<head>
  <title>Booking</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include('./nav.php')?>
  
  
  <div class="container">
    <div class="row text-center py-5">
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>MY BOOKING</h1>
      </div>
      <div class="col-lg-8">
                <!-- <h2 class="text-center">Item Selected</h2> -->
                <?php

                $total = 0;

                $output = "";

                $output .= "
                    <table class='table table-bordered table-hover'>
                            <tr class=text-center>
                                <th>Booking No.</th>
                                <th>Service Name</th>
                                <th>Price</th>
                                <th>No. of Pax</th>
                                <th>Total Price</th>
                                <th>Action</th>     
                            </tr>
                    "; 

                    if (!empty($_SESSION['cart'])) {
                        foreach($_SESSION['cart'] as $key => $value) {
                            $output .= "
                                <tr class='text-center'>
                                    <td> ".$value['id']." </td>
                                    <td> ".$value['serviceName']."</td>
                                    <td> ".$value['price']." </td>
                                    <td>  ".$value['pax']."</td>
                                    <td>".number_format((int)$value['price'] * (int)$value['pax'],2)."</td>
                                    <td>
                                        <a href='manage_cart.php?action=remove&id=".$value['id']."'>
                                        <button class = 'btn btn-danger btn-block'> REMOVE </button>
                                        </a>
                                    </td>
                                  </tr>

                            ";
                            $total = $total + (int)$value['pax'] * (int)$value['price'];
                        }
                        $output .= "
                            <tr>
                                <td colspan='3'> </td>
                                <td><b> Total Price</b></td>
                                <td> ".number_format($total,2)."</td>
                                <td> 
                                    <a href='manage_cart.php?action=clearall'> 
                                    <button class='btn btn-warning'>CLEAR ALL</button> </a>
                                </td>
                            </tr>
                           

                        ";
                    }
              
                    echo $output;
               ?>
              </table>
        </div>
              <div class="col-lg-4">
               <div class="border bg-light rounded p-4">
                  <h5 class="text-left">Booking Details </h5>
                  <hr>
                  <!-- <H6 class="text-left">Total: <?php echo $total ?></H6> -->
                  <div class="card-body" >
                    <form action="booking.php" method="post">
                        <div class="form-input py-1">
                          <span><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Full Name" name="fullname" required>
                        </div>
                        <div class="form-input py-4">
                          <span><i class="fa fa-user"></i></span>
                          <input type="number" placeholder="Contact No." name="phone" required>
                        </div>
                        <div class="form-group mb-2">
                          <label for="">Booking Date & Time</label>
                          <input type="datetime-local"  name="date_time" class="form-cotrol" required>
                          <button class="btn btn-primary btn-block  my-2" name="booking_date"> BOOK NOW</button>
                        </div>
                    </form>
                  </div> 
                </div>
              </div>


              </div>
            </div>

    

  <?php include('script.php') ?>
</body>
