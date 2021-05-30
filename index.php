<?php
  session_start();
?>
<?php include('header.php')?>

<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
  <link rel="stylesheet" href="style.css">

</head>

<style>
.item{
  transition: 5s ease-in-out;
}
.item:hover{
  filter: brightness(80%);
}
.heading {
	font-family: Monotype Corsiva;
	font-size: 3rem;
	font-weight: 500;
	line-height: 1.5;
	text-align: center;
	padding: 3.5rem 0;
	color: #696969;
	 margin-bottom: -40px;
}

.heading span {
	display: block;
}

.heading1 {
  font-family: Monotype Corsiva;
  font-size: 2rem;
  font-weight: 400;
  line-height: 0;
  text-align: center;
  margin-bottom: 25px;
}

.li{
color: #f44336;
margin: 20px 0px;
font-size: 25px;
font-weight: bold;
margin-bottom: 25px;
}

.fa-spa{
color: #f44336;
margin: 20px 13px;
cursor: pointer;
padding: 18px 0;
font-size: 25px;
margin-bottom: 25px;
}

.gallery {
	display: flex;
	flex-wrap: wrap;
	/* Compensate for excess margin on outer gallery flex items */
	margin: -1rem -1rem;
}

/* feature */
.services h1 {
	background-color: #eaafc8;
	font-weight: bolder;
	background-image: linear-gradient(to right, #eaafc8 0%, #FDB99B 100%);
	background-size: 100%;
	-webkit-background-clip: text;
	-moz-background-clip: text;
	-webkit-text-fill-color: transparent;
	-moz-text-fill-color: transparent;
	margin-bottom: 1rem;
	font-size: 2.5rem;
  }
</style>

<body>
    <?php include('./nav.php')?>

<section class="showcase">
    <div class="video-container">
        <video src="login_user/images/LC.mp4" autoplay muted loop></video>
    </div>
    <div class="content">
        <h1 class="lc">Luminous Corner</h1>
        <h3>Wellness and Spa</h3>
        <button class="main__btn"><a href="service.php">Book Appointment</a></button>
    </div>
</section>

<!--About us-->
<div class="main" id="about">
  <div class="main__container">
    <div class="main__img--container">
      <div class="main__img--card"><img src="images/slide06.jpg" alt=""></div>
    </div>
    <div class="main__content">
      <h1 class="get">Get to know us</h1>
      <p>Established in 2018, Luminous Corner is dedicated in
         giving our clients quality and luxury services to ensure their utmost relaxation and pamper....</p>
      <button class="main__btn"><a href="/luminous corner/about.php">More About Us</a></button>
    </div>
  </div>
</div>

<!--Services-->
<div class="services" id="services">
  <h1>Our Services</h1>
  <!-- <h3>We have a variety of services to ensure your wellness.</h3> -->
  <div class="services__wrapper">
    <div class="services__card">
      <h2>Packages</h2> 
      <img src="images/services05.png" alt="">
      <p>Pamper me | Deluxe | Paraffin </p>
      <div class="services__btn"><button><a href="login_user/login.php"> Book Now </a></button></div>
    </div>
    <div class="services__card">
      <h2>Nail Services</h2>
      <img src="images/services06.png" alt="">
      <p>Pedicure | Gel Polish | Manicure</p>
      <div class="services__btn"><button><a href="login_user/login.php">Book Now </a></button></div>
    </div>
    <div class="services__card">
      <h2>Lashes Services</h2>
      <img src="images/services07.png" alt="">
      <p>LashLift | Extension | Threading   </p>
      <div class="services__btn"><button><a href="login_user/login.php">Book Now </a></button></div>
    </div> 
    <div class="services__card">
      <h2>Other Services</h2>
      <img src="images/services04.jpg" alt="">
      <p>IPL Removal | Microblading | Glutathione </p>
      <div class="services__btn"><button><a href="login_user/login.php">Book Now </a></button></div>
    </div>
  </div>
</div>

<!-- features -->
<!-- <div class="main" id="sign-up">
  <div class="main__container">
    <div class="main__content">
      <h1>Join Our Team</h1>
      <h2>Sign Up Today</h2>
      <p>See what makes us different</p>
      <button class="main__btn"><a href="#">Sign Up</a></button>
    </div>
    <div class="main__img--container">
      <div class="main__img--card" id="card-2">
        <i class="fas fa-users"></i>
      </div>
    </div>
  </div>
</div> -->


<!-- instagram -->
<!-- <ul class="card-list">
	
	<li class="card">
		<a class="card-image" href="https://michellezauner.bandcamp.com/album/psychopomp-2" target="_blank" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-100.jpg);" data-image-full="https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-500.jpg">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/310408/psychopomp-100.jpg" alt="Psychopomp" />
		</a>
		<a class="card-description" href="https://michellezauner.bandcamp.com/album/psychopomp-2" target="_blank">
		</a>
	</li>

</ul> -->


<!-- gallery -->
<div class="container-fluid py-5 p-4">
    <div class="row">
      <h1 class="heading">Luminous Corner Nailcraft & Salon</span></h1>
      <h1 class="heading1">LC Gallery</span></h1>
      <center><i class="li"> ~ ~ ~ ~ ~ ~</i><i class="fa fa-spa"></i><i class="li">~ ~ ~ ~ ~ ~</i></center>
  
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/nails03.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/nails03.jpg" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/slide06.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/slide06.jpg" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/services06.png" class="fancybox" data-fancybox="gallery1">
      <img src="images/services06.png" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/slide13.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/slide13.jpg" width="90%" height="90%">
      </a>
    </div>

    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/slide09.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/slide09.jpg" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/spadicure.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/spadicure.jpg" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/slide03.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/slide03.jpg" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/packages.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/packages.jpg" width="90%" height="90%">
      </a>
    </div>

    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/wax.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/wax.jpg" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/slide11.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/slide11.jpg" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/poly.jpeg" class="fancybox" data-fancybox="gallery1">
      <img src="images/poly.jpeg" width="90%" height="90%">
      </a>
    </div>
    <div class="item col-lg-3 col-md-4 col-xs-6">
      <a href="images/slide02.jpg" class="fancybox" data-fancybox="gallery1">
      <img src="images/slide02.jpg" width="90%" height="90%">
      </a>
    </div>
  </div>
</div>
<!-- end of gallery -->

<!-- features -->
<div class="main services" id="sign-up">
  <div class="main__container">
    <div class="main__content">
      <h1>Operating Hours</h1>
      <h2 class="mb-5">Monday - Sunday: 10AM - 9PM</h2>
      <h1>Accepted Payments</h1>
      <img src="images/cash.png" height="60px">
      <img src="images/gcash.png" height="60px">
      <img src="images/bdo.png" height="60px">
      <img src="images/bpi.jpg" height="60px">
      <img src="images/sc-bank.jpg" height="60px">
    </div>
    <div class="main__img--container">
      <div class="main__img--card" id="card-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.753263629638!2d121.00618721486164!3d14.613126680687214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b788e3fd2957%3A0x6aaf73b42d51287!2sLuminous%20Corner%20Nailcraft%20and%20Salon!5e0!3m2!1sen!2sph!4v1622132995446!5m2!1sen!2sph"
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>




<?php include('footer.php') ?>

<?php include('script.php') ?>
  

</body>
</html>