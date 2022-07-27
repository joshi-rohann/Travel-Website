
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarLeftAlignExample"
      aria-controls="navbarLeftAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="trips.php">Packages</a>
        </li>
      

        <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
                                { ?>
     
     <li class="nav-item">
          <a class="nav-link" href="products.php" ><b>Products</b></a>
        </li>
        
        <?php } 
        else {
          ?>

        <li class="nav-item">
          <a class="nav-link" href="booking.php" target="_blank" ><b>Book</b></a>
        </li>

        <?php } ?>

       <?php if(isset($_SESSION['ticket'])) { ?>


        <li class="nav-item">
          <a class="nav-link" href="logout.php" ><b>LogOut</b></a>
        </li>
        
        <?php } 
        else {
          ?>

        <li class="nav-item">
          <a class="nav-link" href="login.php" target="_blank" ><b>Login</b></a>
        </li>

        <?php } ?>




      </ul>
      <!-- Left links -->
     <img class="bar-img" src="images/mainlogo.png" alt="">
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
  
</nav>



