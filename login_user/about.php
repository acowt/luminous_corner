<?php include('header.php') ?>

<head>
    <title>About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/about.css">
    <style>
    .title {
        position: absolute;
        top: 420px;
        left: 160px;
        color: purple;
        font-weight: bold;
        font-size: 30px;
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
    .heading {
      font-size: 3rem;
      font-weight: bold;
      line-height: 1.5;
      text-align: center;
      padding: 3.5rem 0;
      color: black;
      margin-bottom: -40px;
    }
    * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	}
	/* Team Member CSS 
===========================*/

h1.team-h1 {
  margin: 0;
  position: absolute;
  top: -16px;
  text-align: center;
  left: 40%;
  font-family: georgia;
  font-style: italic;
  background-color: white;
  padding: 0px 20px;
  color: #222; 
}

.cf:before,
.cf:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.cf:after {
    clear: both;
}

/**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
.cf {
    *zoom: 1;
}

.team-container {
  max-width: 1200px;
  margin: auto;
  border-top: 1px #e9e9e9 solid;
  border-bottom: 1px #e9e9e9 solid;
  padding-top: 5em;
  padding-bottom: 5em;
  margin-top: 3em;
  position: relative;
}

.team-member {
  width: 16%;
  float: left;
  text-align: center;
  margin-right: 5%;
}

.team-member:last-child {margin-right: 0;}


.team-member span,
.team-member h3 {
  max-width: 200px;
  font-family: sans-serif;
  letter-spacing: -1px;
}

.team-member h3 {
  color: #1CA3A3;
}

.email {
  color: #EA2678;
  
}

.team-member span {
  display: block;
 
}
.team-photo {
  border-radius: 50%;
  text-align: center;
  margin: auto;
  max-width: 100%;
  height: auto;
  transition: 0.1s transform ease-in-out;
}


.team-photo:hover {
  transform: scale(0.9);
  cursor: pointer;
}


/* code for phone layout */
@media (max-width:850px){
  .team-member {
    width:25%;
    margin-left: 4%;
    margin-right: 4%;
    margin-bottom: 40px;
    
  }
  
}

@media (max-width:650px){
  .team-member {
    float: none;
    display: block;
    margin: 50px auto;
    width: 100%;
    text-align: center;
  }
  
  .team-member h3,
  .team-member span {
    margin: 15px auto;
  }
}


/* ENDS Team Member CSS 
===========================*/

  
    </style>
</head>

<body>
<?php include('./nav.php')?>

<!-- features -->
<div class="main services" id="sign-up">
  <div class="main__container">
    <div class="main__content">
      <h1>Who We Are</h1>
      <p class="para text-white mb-5">Luminous corner nailcraft and salon ensures that the customers satisfaction and 
      safety is the most priority. We offers various beauty healthcare that can give relaxation and confidence 
      to our dear customers and we do it with love and passion along with 
      all the safety measurements that is indeed significant within this time.</p>
      
    </div>
    <div class="main__img--container">
      <div class="main__img--card" id="card-2">
      <img src="images/staff5.jpg" alt="">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.753263629638!2d121.00618721486164!3d14.613126680687214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b788e3fd2957%3A0x6aaf73b42d51287!2sLuminous%20Corner%20Nailcraft%20and%20Salon!5e0!3m2!1sen!2sph!4v1622132995446!5m2!1sen!2sph"
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
      </div>
    </div>
  </div>
</div>

<section>
  <div class="container-fluid">
    <div class="row">
      <h1 class="heading text-center">Our Core Values</span></h1>
    </div>
  </div>
  <div class="services-grid py-5" >
    <div class="service service3" >
    <img src="images/quality.png">
      <h4>Quality</h4>
      <p class="para">Our tools and products are selected carefully from the best sources that we can get. To ensure that our valued customers will be keep away from any risks and harmful mat-erials. We believe that the customers safetymust
                    always be the top priority. Therefore, we only use high quality products coming from our trusted resources.
                </p>
    </div>
    <div class="service service3" >
    <img src="images/service.png">
      <h4>Service</h4>
      <p class="para">Our staffs are trained and dedicated to give the best services to our beloved customers.Our customers satisfaction is the biggest price that we can have. We always make sure that we can perform our task effeciently and
                    effectively in every aspects. Your overwhelming smile is what keeps us inspired, so we oath tokeep it by giving our very best to serve you.
                </p>
    </div>
    <div class="service service3" >
      <img src="images/affordable.png" >
      <h4>Affordability</h4>
      <p class="para">Our goal is to give the best services to our customers with high quality materials yet affordable in price. You will experience the best glow up and stress free relaxation without hurting your pocket.  "If you look good, you feel good."</p>
    </div>
 </div>
</section>

<!-- this section wraps the team members as a container-->

<section class="cf team-container">
  <h1 class="team-h1">Our Team</h1>
    <!-- member-->  
    <div class="team-member">
	<img class="team-photo" src="images/staffviol.jpg">
      <h3>Violy</h3>
      <span> Branch Manager | Senior Nail Tech</span>
    </div>

    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="images/stafflove.jpg">
      <h3>Love</h3>
      <span>Nail | Lash | Wax Tech</span>
    </div>

    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="images/staffmara.png">
      <h3>Mara</h3>
      <span>Nail | Lash | Wax Tech</span>
    </div> 

    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="images/staffmarie.jpg">
      <h3>Marie</h3>
      <span>Nail | Wax | Massage therapist</span>
    </div> 

    <!-- member-->
    <div class="team-member">
	<img class="team-photo" src="images/staffneng.jpg">
      <h3>Neng</h3>
      <span>Nail | Lash | Wax Tech</span>
    </div> 
</section>



 <?php include('script.php') ?>
 <?php include('footer.php') ?>
</body>