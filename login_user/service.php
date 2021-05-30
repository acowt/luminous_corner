<?php include('header.php') ?>

<head>
    <title>Services</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/services.css">
</head>

<body>
    <?php include('./nav.php')?>


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
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 270.00</p>
            </div>
        </div>
      <div class="service__card">
          <img src="images/pamper.jpg" alt="">
          <h2>Pamper me Package</h2> 
          <p>Includes: Manicure, Pedicure, and Footspa</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 299.00</p>
            </div>
      </div>
      <div class="service__card">
          <img src="images/deluxe.jpg" alt="">
          <h2>Deluxe Package</h2> 
          <p>Includes: Gel Polish, Regular Pedicure, and Footspa</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
            <p id="price">&#x20b1 450.00</p>
        </div>
      </div>
      <div class="service__card">
          <img src="images/happy.jpg" alt="">
          <h2>Happy Feet Package</h2> 
          <p>Includes: Footspa, Foot Paraffin Wax, and Pedicure</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
            <p id="price">&#x20b1 429.00</p>
        </div>
    </div>
    <div class="service__card">
          <img src="images/sitting.jpg" alt="">
          <h2>Sitting Pretty Hand Package</h2> 
          <p>Includes: Handspa, Hand Paraffin Wax, and Manicure</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
            <p id="price">&#x20b1 450.00</p>
        </div>
    </div>
    <div class="service__card">
          <img src="images/paraffin.jpg" alt="">
          <h2>Paraffin Wax Package</h2> 
          <p>Includes: Hand & Foot paraffin Wax</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
            <p id="price">&#x20b1 399.00</p>
        </div>
    </div>
    <div class="service__card">
          <img src="images/vip.jpg" alt="" height="200">
          <h2>VIP Pamper Package</h2> 
          <p>Includes: Handspa, Hand Paraffin Wax, Gel Polish Manicure, Footspa, Foot Paraffin Wax, and Regular Pedicure</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
            <p id="price">&#x20b1 970.00</p>
        </div>
    </div>
  </div>
</div>

    <div class="service__wrapper img-fluid">
    <div class="service__card">
          <img src="images/eyebrow.jpg" alt="" height="200" >
          <h2>Eyebrow Threading</h2> 
          <!-- <p>Includes: Handspa and Hand Paraffin Wax</p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 99.00</p>
            </div>
      </div>   
      <div class="service__card">
          <img src="images/keratin.jpg" alt="">
          <h2>Keratin Eyelash lift with tint</h2> 
          <p>Eyelash lift is is your natural lashes that are lifted.</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 279.00</p>
            </div>
      </div>
      <div class="service__card">
          <img src="images/classic.jpg" alt="">
          <h2>Classic Eyelash Extension</h2> 
          <p>Classic eyelash extension is simple, beautiful, natural-looking lash extensions.</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 220.00</p>
            </div>
      </div>
      <div class="service__card">
          <img src="images/volume.jpg" alt="" height="200">
          <h2>Volume Eyelash Extension</h2> 
          <p>Volume eyelash extension offer you a full, bette-than-falsies look that gives you some serious glamour drama.</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 450.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/doll.jpg" alt="" height="200">
          <h2>Doll Eyelash Extension </h2> 
          <p>This extension involves shorter and longer lashes that will help you achieve "doll-like" set of eyes.</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 550.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/cateye.png" alt="" height="200">
          <h2>Cat Eye Extension </h2> 
          <p>This extension involves shorter and longer lashe s that will help you achieve "doll-like" set of eyes.</p>
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 550.00</p>
            </div>  
      </div>
    </div>
  </div>

  <div class="tab-pane" id="nail" role="tabpanel" aria-labelledby="nail-tab">
    <div class="service__wrapper img-fluid">
    <div class="service__card">
          <img src="images/manicure.jpeg" alt="" height="200">
          <h2>Manicure</h2> 
          <!-- <p></p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 80.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/pedicure.jpeg" alt="" height="200">
          <h2>Pedicure</h2> 
          <!-- <p></p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 90.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/poly.jpeg" alt="" height="200">
          <h2>Polygel Nail Extension with Free Gel Polish</h2> 
          <!-- <p></p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 999.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/footspa.jpeg" alt="" height="200">
          <h2>Footspa</h2> 
          <!-- <p></p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 130.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/handspa.jpeg" alt="" height="200">
          <h2>Handspa</h2> 
          <!-- <p></p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 110.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/gel.jpeg" alt="" height="200">
          <h2>Gel Polish</h2> 
          <!-- <p></p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 248.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/handpara.jpeg" alt="" height="200">
          <h2>Hand Paraffin Wax </h2> 
          <!-- <p></p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 180.00</p>
            </div>  
      </div>
      <div class="service__card">
          <img src="images/footpara.jpeg" alt="" height="200">
          <h2>Foot Paraffin Wax</h2> 
          <!-- <p></p> -->
            <div class="service__btn"><button><a href="#"> Book Now</a></button> 
              <p id="price">&#x20b1 230.00</p>
            </div>  
      </div>
    </div>
  </div>

  <div class="tab-pane" id="gluta" role="tabpanel" aria-labelledby="gluta-tab">
  <div class="service__wrapper img-fluid">
    <div class="service__card">
      <img src="images/luminous.jpeg" alt="" height="200">
      <h2>Luminous Skin IV (push) </h2> 
      <p></p>
        <div class="service__btn"><button><a href="#"> Book Now</a></button> 
          <p id="price">&#x20b1 499.00</p>
        </div>  
    </div>
    <div class="service__card">
      <img src="images/korean.jpg" alt="" height="200">
      <h2>Korean BB Glow</h2> 
      <p></p>
        <div class="service__btn"><button><a href="#"> Book Now</a></button> 
          <p id="price">&#x20b1 950.00</p>
        </div>  
    </div>
    <div class="service__card">
      <img src="images/celeb.jpeg" alt="" height="200">
      <h2>Celebrity Drip</h2> 
      <p></p>
        <div class="service__btn"><button><a href="#"> Book Now</a></button> 
          <p id="price">&#x20b1 750.00</p>
        </div>  
    </div>
    <div class="service__card">
      <img src="images/sakura.jpeg" alt="" height="200">
      <h2>Sakura Drip</h2> 
      <p></p>
        <div class="service__btn"><button><a href="#"> Book Now</a></button> 
          <p id="price">&#x20b1 949.00</p>
        </div>  
    </div>
    <div class="service__card">
      <img src="images/apollo.jpg" alt="" height="200">
      <h2>Apollo Drip</h2> 
      <p></p>
        <div class="service__btn"><button><a href="#"> Book Now</a></button> 
          <p id="price">&#x20b1 750.00</p>
        </div>  
    </div>
    <div class="service__card">
      <img src="images/gfairy.jpg" alt="" height="200">
      <h2>Gluta Fairy White (push)</h2> 
      <p></p>
        <div class="service__btn"><button><a href="#"> Book Now</a></button> 
          <p id="price">&#x20b1 399.00</p>
        </div>  
    </div>
    <div class="service__card">
      <img src="images/glutaa.jpeg" alt="" height="200">
      <h2>Glutathione Snow White Drip</h2> 
      <p></p>
        <div class="service__btn"><button><a href="#"> Book Now</a></button> 
          <p id="price">&#x20b1 220.00</p>
        </div>  
    </div>
    <div class="service__card">
      <img src="images/fair.jpg" alt="" height="200">
      <h2>Fairy White with Vitamin C</h2> 
      <p></p>
        <div class="service__btn"><button><a href="#"> Book Now</a></button> 
          <p id="price">&#x20b1 399.00</p>
        </div>  
    </div>
  </div>
  </div>

  
<div class="tab-pane" id="other" role="tabpanel" aria-labelledby="other-tab">
  <div class="service__wrapper img-fluid">  
    <div class="service__card">
        <img src="images/underarm02.jpg" alt="" height="200">
        <h2>IPL / Hair Removal</h2> 
        <p></p>
          <div class="service__btn"><button><a href="#"> Book Now</a></button> 
            <p id="price">&#x20b1 99.00</p>
          </div>  
      </div>
      <div class="service__card">
        <img src="images/earcandling.jpg" alt="" height="200">
        <h2>Ear Candling</h2> 
        <p></p>
          <div class="service__btn"><button><a href="#"> Book Now</a></button> 
            <p id="price">&#x20b1 99.00</p>
          </div>  
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>



<?php include('footer.php') ?>
<?php include('script.php') ?>
  
</body>