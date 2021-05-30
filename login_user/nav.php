<!-- Navbar  -->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-2">
        <div class="container">
          <a class="navbar-brand" href="index.php">Luminous Corner</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="link" href="serviceservice.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="link" href="contact.php">Contact</a>
              </li>
              <!-- <li class="navbar-btn">
                <a href="./login.php" class="nav-button" id="signup">Login</a>
              </li> -->
              

              <li class="nav-item dropdown navbar-btn">
              <a class="nav-link dropdown-toggle nav-button" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="booking.php">My Booking</a>
                </li>

                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
              </li>
              <!-- <li>
                  <a href="booking.php" class="btn btn-outline-success">Booking (0)</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
<!--end of navbar-->


<script>
const tap = document.querySelector('.profile');
  tap.addEventListener('click', function(){
       const toggleMenu = document.querySelector('.menu');
  toggleMenu.classList.toggle('active');
});
</script>

