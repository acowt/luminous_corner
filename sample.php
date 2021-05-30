<head>
    <style>
    .carousel-wrap {
  margin: 90px auto;
  padding: 0 5%;
  width: 80%;
  position: relative;
}

/* fix blank or flashing items on carousel */
.owl-carousel .item {
  position: relative;
  z-index: 100; 
  -webkit-backface-visibility: hidden; 
}

/* end fix */
.owl-nav > div {
  margin-top: -26px;
  position: absolute;
  top: 50%;
  color: #cdcbcd;
}

.owl-nav i {
  font-size: 52px;
}

.owl-nav .owl-prev {
  left: -30px;
}

.owl-nav .owl-next {
  right: -30px;
}
    </style>
</head>




<body>
<div class="carousel-wrap">
  <div class="owl-carousel">
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
    <div class="item"><img src="images/ipl.png"></div>
  </div>
</div>

<script>
    $('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
</script>
</body>