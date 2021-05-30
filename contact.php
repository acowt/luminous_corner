<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once 'PHPMailer/src/Exception.php';
    require_once 'PHPMailer/src/PHPMailer.php';
    require_once 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    $alert= '';

    if (isset($_POST['send'])){
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    try{
        $mail -> isSMTP();
        $mail ->Host = "mail.smtp2go.com";
        $mail ->SMTPAuth = true;
        $mail ->Username = 'luminouscorner';
        $mail ->Password = 'Luminouscorner21!';
        $mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail ->Port = '2525';

        $mail ->setFrom('asacot@rtu.edu.ph');
        $mail ->addAddress('luminouscorner21@gmail.com');
        $mail ->isHTML(true);
        $mail ->Subject = "LC (Contact Page)";
        $mail ->Body = "<h3>Name : $userName <br> Email: $userEmail <br>Message: $message </h3>";

        $mail ->send();
        $alert = '<div class="alert-success">
                    <span>Message Sent! thank you for contacting us. </span> 
                </div>';    
    }   catch (exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().' </span> 
                    </div>';
    }
    if(!$mail->send()){
        echo "mailer error : ". $mail->ErrorInfo;
    }else{
    }   
    
}

?>

<?php include('header.php')?>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/contact.css">
</head>

<body>
    <?php echo $alert; ?>
    <?php include('./nav.php')?>


    <section class="contact" style="background-image: url('slide04.png');">
        <div class="content">
            <h2>Contact Us</h2><br>
            <p>Let us know what you think. We'd love to hear from you.</p>
        </div>
        <div class="contact_container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <a href="https://www.google.com/search?q=20+Union+Civica+1113+Manila%2C+Philippines&rlz=1C1CHBD_
                        enPH877PH877&oq=20+Union+Civica+1113+Manila%2C+Philippines&aqs=chrome..
                        69i57.1029j0j7&sourceid=chrome&ie=UTF-8" target="_blank">20 Union Civica 1113 Manila, Philippines</a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p><a href="tel:+639171482859">0917 148 2859</a></p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fab fa-facebook-f"></i></div>
                    <div class="text">
                        <h3>Facebook</h3>
                        <a href="https://www.facebook.com/luminouscornernailsalon" target="_blank">luminouscornernailsalon</a>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <a href="mailto:luminouscorner21@gmail.com" target="_blank">luminouscorner21@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="contact.php" method="POST" class="form">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox ">
                        <input type="email" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="subject" name="subject" required="required">
                        <span>Subject</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div>
                        <button class="btn" name="send" >Send</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>

    <?php include('script.php') ?>
    <script>
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
    
</body>