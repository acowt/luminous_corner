<?php 
include('header.php');

?>

<head>
    <title>Booking</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/service.css">
    <link rel="stylesheet" href="styles/services.css">
</head>


<body>
<?php include('./nav.php')?>
<div class="feat bg-gray pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12 py-5">
          <h4><span>OUR </span> SERVICES</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's
              <br>standard dummy text ever since the 1500s, when an unknown book.</p>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/mani.png" alt=""></span>
            <h4>Manicure</h4>
            <p>Our manicure treatments stimulate nail growth and soften dry, dull skin.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/pedi.png" alt=""></span>
            <h4>Pedicure</h4>
            <p>Our pedicure services provide full restoration for your nails with extra polishing.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/para.png" alt=""></span>
            <h4>Parrafin Wax</h4>
            <p>This is a treatment for hands and feet that complements your manicure and pedicure.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/nailart.png" alt=""></span>
            <h4>Nail Art</h4>
            <p>Let our nail artists create a stunning and sustainable nail design for you.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/facial.png" alt=""></span>
            <h4>Facial</h4>
            <p>We offer a full range of relaxing skin care services, including all types of facials.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/lashes.png" alt=""></span>
            <h4>Lashes</h4>
            <p>Cosmetic make up application used to enhance the length, curl, fullness, and thickness of natural eyelashes.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/massage1.png" alt=""></span>
            <h4>Massage</h4>
            <p>Our Massage Services can help you get rid of any negative emotions after a long busy day.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/gluta.png" alt=""></span>
            <h4>Gluta Drip</h4>
            <p>Our Massage Services can help you get rid of any negative emotions after a long busy day.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/ipl.png" alt=""></span>
            <h4>Hair Removal</h4>
            <p>Laser hair removal is used to reduce unwanted hair. Common treatment locations include legs, 
            armpits, upper lip, chin and the bikini line.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><img src="images/wax1.png" alt=""></span>
            <h4>Wax</h4>
            <p>Waxing removes the hair by the root, often weakening the root in process. When waxing, you not only remove
             unwanted hair—you also wax away any dry and dead skin cells in the process. No cuts. </p>
          </div>
        </div>
        </div>
    </div>
  </div>


        <!-- Nav tabs -->
<div class="service" id="service">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="package-tab" data-bs-toggle="tab" data-bs-target="#package" type="button" role="tab" aria-controls="package" aria-selected="true">Packages</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="eyebrow-tab" data-bs-toggle="tab" data-bs-target="#eyebrow" type="button" role="tab" aria-controls="eyebrow" aria-selected="false">Eyebrow & Eyelashes</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="nail-tab" data-bs-toggle="tab" data-bs-target="#nail" type="button" role="tab" aria-controls="nail" aria-selected="false">Nail & Foot & Hand</button>
  </li>
  <!-- <li class="nav-item" role="presentation">
    <button class="nav-link" id="underarm-tab" data-bs-toggle="tab" data-bs-target="#underarm" type="button" role="tab" aria-controls="underarm" aria-selected="false">Underarm</button>
  </li> -->
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">Other Services</button>
  </li>
  <!-- <li class="nav-item" role="presentation">
    <button class="nav-link" id="ear-tab" data-bs-toggle="tab" data-bs-target="#ear" type="button" role="tab" aria-controls="ear" aria-selected="false">Ear Candling</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="massage-tab" data-bs-toggle="tab" data-bs-target="#massage" type="button" role="tab" aria-controls="massage" aria-selected="false">Massage</button>
  </li> -->
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="gluta-tab" data-bs-toggle="tab" data-bs-target="#gluta" type="button" role="tab" aria-controls="gluta" aria-selected="false">Gluta</button>
  </li>
</ul>


<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="package" role="tabpanel" aria-labelledby="package-tab">
    <div class="service__wrapper img-fluid">
      <div class="service__card">
          <img src="images/hands.jpg" alt="">
          <h2>Hands Down Package</h2> 
          <p>Includes: Handspa and Hand Paraffin Wax</p>
          <div class="service__btn"><button><a href="login_user/login.php"> Book Now</a></button> 
            <p class="text-right " id="price">&#x20b1 270.00</p>
            </div>
      </div>
      <div class="service__card">
          <img src="images/pamper.jpg" alt="">
          <h2>Pamper me Package</h2> 
          <p>Includes: Manicure, Pedicure, and Footspa</p>
                    <div class="service__btn"><button><a href="login_user/login.php"> Book Now</a></button> 
              <p id="price">&#x20b1 299.00</p>
            </div>
      </div>
      <div class="service__card">
          <img src="images/deluxe.jpg" alt="">
          <h2>Deluxe Package</h2> 
          <p>Includes: Gel Polish, Regular Pedicure, and Footspa</p>
                    <div class="service__btn"><button><a href="login_user/login.php"> Book Now</a></button> 
 
            <p id="price">&#x20b1 450.00</p>
        </div>
    </div>
    <div class="service__card">
          <img src="images/happy.jpg" alt="">
          <h2>Happy Feet Package</h2> 
          <p>Includes: Footspa, Foot Paraffin Wax, and Pedicure</p>
                  <div class="service__btn"><button><a href="login_user/login.php"> Book Now</a></button> 
 
            <p id="price">&#x20b1 429.00</p>
        </div>
    </div>
    <div class="service__card">
          <img src="images/sitting.jpg" alt="">
          <h2>Sitting Pretty Hand Package</h2> 
          <p>Includes: Handspa, Hand Paraffin Wax, and Manicure</p>
                  <div class="service__btn"><button><a href="login_user/login.php"> Book Now</a></button> 
 
            <p id="price">&#x20b1 450.00</p>
        </div>
    </div>
    <div class="service__card">
          <img src="images/paraffin.jpg" alt="">
          <h2>Paraffin Wax Package</h2> 
          <p>Includes: Hand & Foot paraffin Wax</p>
                  <div class="service__btn"><button><a href="login_user/login.php"> Book Now</a></button> 
 
            <p id="price">&#x20b1 399.00</p>
        </div>
    </div>
    <div class="service__card">
          <img src="images/vip.jpg" alt="" height="200">
          <h2>VIP Pamper Package</h2> 
          <p>Includes: Handspa, Hand Paraffin Wax, Gel Polish Manicure, Footspa, Foot Paraffin Wax, and Regular Pedicure</p>
                  <div class="service__btn"><button><a href="login_user/login.php"> Book Now</a></button> 
            <p id="price">&#x20b1 970.00</p>
        </div>
    </div>
  </div>
</div>


  <?php include('script.php') ?>
  </body>
