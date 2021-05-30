<?php
include('database.php');
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST['add_to_cart'])) {

        if (isset($_SESSION['cart'])) {

            $session_array_id = array_column($_SESSION['cart'], "id");
            
            if (!in_array($_GET['id'], $session_array_id)) {
                $session_array = array(
                    'id' => $_GET['id'],
                    "serviceName" => $_POST['serviceName'],
                    "price" => $_POST['price'],
                    "pax" => $_POST['pax'],
                );
                echo"<script>
                alert('item added');
                window.location.href='serviceservice.php';
                </script>";
        
                $_SESSION['cart'][] = $session_array;
            }
            else {
                echo"<script>
                alert('item already added');
                window.location.href='serviceservice.php';
                </script>";
            }

        } else {
            $session_array = array(
                'id' => $_GET['id'],
                "serviceName" => $_POST['serviceName'],
                "price" => $_POST['price'],
                "pax" => $_POST['pax'],
            );
            echo"<script>
            alert('item added');
            window.location.href='serviceservice.php';
            </script>";
            
            $_SESSION['cart'][] = $session_array;

        }
    }
} 
if (isset($_GET['action'])) {
        if ($_GET['action'] == "clearall") {
            unset($_SESSION['cart']);
            echo "<script>
                   window.location.href='booking.php';
                   </script>";
        }

        if($_GET['action'] == "remove") {
            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['id'] == $_GET['id']) {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo "<script>
                    alert('service has been Removed');
                   window.location.href='booking.php';
                   </script>";
                }
            }
        }
    }

if (isset($_POST['booking_date'])) {
    $date_time = $_POST['date_time'];

    $query = "INSERT INTO booking (date_time) VALUES ('$date_time')";
    $query_result = mysqli_query($conn, $query);

    if($query_result){
        echo "<script>
            alert('booking confirm!!');
            window.location.href='confirm_booking.php';
            </script>";
    } else {
        echo "<script>
            alert('error!');
            window.location.href='confirm_booking.php';
            </script>";
    }
}
?>