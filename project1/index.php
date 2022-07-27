<?php   
session_start();

?>

<?php include('database.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous">

      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="index.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

<?php include('navbar.php'); ?>

<div class="jumbotron banner"> <!-- banner ko class -->
  <span class="banner-text">
  <h1 class="display-4"><b>DREAM ESCAPE!</b></h1>
  <p><b> <i> A New Pulse Of Dream</i> </b> </p>
  <p class="lead">
<h3 class="leads"><strong>Travel Nepal Through Us</strong></h3>
  
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</span>
</div>


<section class="services">

<h1 class="heading-title"> our services </h1>

<div class="container">
  <div class="row">
    <div class="col-md-2">
    <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Adventure</h3>
      </div>
    </div>

    <div class="col-md-2">
    <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Camping</h3>
      </div>
    </div>

    <div class="col-md-2">
    <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Tour Guide</h3>
      </div>

    </div>
    <div class="col-md-2">
    <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Trekking</h3>
      </div>
    </div>

    <div class="col-md-2">
    <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Camp Fire</h3>
      </div>
    </div>
    <div class="col-md-2">
    <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Off Road</h3>
      </div>
    </div>
  </div>
</div>

</section>
<p></p>

<h1 class="heading-title" id="des"> DESTINATIONS </h1>

<section class="main">

<!--<div class="container">
  <div class="row">
    <div class="col-md-3">
    <div class="images">
         <img src="" alt="">
         <h3>Lumbini</h3>
      </div>
    </div>

    <div class="col-md-3" >
    <div class="images image1">
         <img src="" alt="">
         <h3>Mustang</h3>
      </div>
    </div>

    <div class="col-md-3">
    <div class="images">
         <img src="" alt="">
         <h3>Pokhara</h3>
      </div>

    </div>
    <div class="col-md-3">
    <div class="images">
         <img src="" alt="">
         <h3>Janakpur</h3>
      </div>
    </div>-->
    <div class="container" id="destination">
      <div class="row">


      <?php 


$query = "select * from destination";
$result = $conn ->query($query); // query run gareko 



while($data = $result->fetch_assoc()){ ?>

        <div class="col-12 col-md-12 col-lg-3">
          <div class="card text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-3"><img alt="Picture of Pokhara" class="img-fluid" src="products/<?php echo $data['image']; ?>" /></div>
              <h3 class="card-title color"><?php echo $data['title']; ?></h3>
              <p class="lead"><?php echo $data['description']; ?></p>
              <a href="packages.php?pid=<?php echo $data['pid']; ?>" class="btn btn-secondary">Show More!</a>
            </div>
          </div>
        </div>
<?php } ?>



</div></div>


</section>










<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>



<?php include('footer.php');?>







    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>


 <script>



//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



 </script>

</body>
</html>