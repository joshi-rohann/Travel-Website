<?php 

session_start();
if(!$_SESSION['ticket']){

    header('location:login.php');

}


$userid = $_SESSION['userid'];

include('database.php');
$query = "select * from customer where id ='$userid'";
$result =$conn->query($query);
$datauser = $result->fetch_assoc();




?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Dashboard</title>

    <link rel="stylesheet" href="dashboard.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous">

      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      <style>
        .bar-img{
            float:right;
        }
      </style>
</head>
<body>
    
<?php include('navbar.php'); ?>
<!--
<div class="container">
    <div class="row"> 
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <img  class="img-thumbnail" src="thapa.jpg.png" alt="">
            <h3> <?php echo $datauser['username']; ?></h3>
            <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
            { 
            ?>
            <?php echo $datauser['usertype'];


            } 
            
            ?>







            <h3><?php echo $datauser['email']; ?></h3>
            <a> Country: Kenya</a>
            <a> Adress: Thankeshwor</a>
        </div>
        <div class="col-md-3"></div>
       
    </div>

</div>
-->






<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
   

<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color"><?php echo $datauser['username'] ; ?> <span>[<?php echo $datauser['usertype'];?>]</span> </h3>

                            <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
                                { ?>
                           <h6 class="theme-color lead">Admin &amp; of the agency Dream Escape !</h6>
                            <a>I <mark>look after administrative services</mark>  of the agency. i am specialized in managing stylish, modern websites, web services and online stores. My passion is to web development has helped me a lot.</a>
                               <?php } 
                               else{
                                    ?>
                          <p></p>
                          <a>I <mark>like to travel various parts of Nepal.</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</a>
                          <?php } ?>




                            
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <a>2nd Feb 2002</a>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <a>22 Yr</a>
                                    </div>
                                    <div class="media">
                                        <label>Residence</label>
                                        <a>Dhangadhi</a>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <a>Kathmandu, Nepal</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <a><?php echo $datauser['email']; ?></a>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <a>981234567</a>
                                    </div>
                                    <div class="media">
                                        <label>Skype</label>
                                        <a>skype@gmail.com</a>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <a>Available</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            
                            <div class="count-data text-center">
                            <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
                                { ?>
                                    <a class="m-0px font-w-600 text" href="register.php">Register</a>
                               <?php } 
                               else{
                                    ?>
                                <h6 class="count h2" data-to="850" data-speed="850">500</h6>
                                <a class="m-0px font-w-600 text" href="#">Happy Clients</a>
                                 <?php } ?>
                            </div>
                        </div>




                        
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                            <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
                                { ?>
                                    <a class="m-0px font-w-600 text" href="trips.php">Edit Packages</a>
                               <?php } 
                               else{
                                    ?>
                                <h6 class="count h2" data-to="850" data-speed="850">4</h6>
                                <a class="m-0px font-w-600 text" href="index.php#des"> View Packages</a>
                                 <?php } ?>
                             
                            </div>
                        </div>

                        




                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                
                                <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
                                { ?>
                                    <a class="m-0px font-w-600 text" href="products.php"> Add Products</a>
                               <?php } 
                               else{
                                    ?>
                                <h6 class="count h2" data-to="850" data-speed="850">3</h6>
                                <a class="m-0px font-w-600 text" href="aboutus.php"> Branches</a>
                                 <?php } ?>


                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                            <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
                                { ?>
                                    <a class="m-0px font-w-600 text" href="booked_data.php">Book</a>
                               <?php } 
                               else{
                                    ?>
                                <h6 class="count h2" data-to="850" data-speed="850">1</h6>
                                <a class="m-0px font-w-600 text" href="booking.php"> Book</a>
                                 <?php } ?>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
</body>
</html>