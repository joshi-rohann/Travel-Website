<?php 

session_start(); ?>



<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   
   <link rel="stylesheet" href="index.css">
   

</head>
<body>




<!-- about section starts  -->
<p></p>
<section class="about">

   <div class="image">
      <img src="images/choose.jpg" alt="">
   </div>

   <div class="content">
      <h3>WHY CHOOSE US ?</h3>
      <p id="12">We offer and we are committed to making your time in Nepal special and unique experience with Namaste Nepal Travels. We will work with you to design a Tours, Trekking, Hiking, Expedition & Holiday Packages that includes everything you want to see and do. P</p>
      <p>Please sent us an E-mail, we will creat your Tour in Nepal, Trekking in Nepal, Sight Seeing in Heritage Site and many more Trip will be your unforgatable trip in your Life..</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>affordable price</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->
<p></p>

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>
   
   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
      <div class="container" >
      <div class="row">

      <div class="col-4 reviewone">
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Many people on the next part of our tour were interested in it, including the guide who I am sure will visit as she is often in <b> Pokhara</b> but has never been to that part. Rohan, my guide, was brilliant, attentive, knowledgeable, interesting and amusing.I enjoyed alot and it was a once in a life time experience.</p>
            <h3>Aarya Dahal</h3>
            <span>traveler</span>
            <img class="aarya" src="images/aarya1.jpg" alt="">
         </div>
         </div>

         <div class="col-4 reviewtwo">
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>I really, really enjoyed my trip to <b>Manag & Mustang</b>. It was a good combination of physical activity, cultural opportunities and relaxation. Christina as a guide was really nice and informative. Seeing to our needs, answering our numerous questions, ever the diplomat. The trip was fun.</p>
            <h3>Subodh Ghimire</h3>
            <span>traveler</span>
            <img class="subodh" src="images/subodh.jpg" alt="">
         </div>
</div>

<div class="col-4 reviewthree">
         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>This a very belated note (for which apologies) to thank you for the very outstanding services you provided to my daughter and to me during our trip to the <b>
            Janakpur</b> in September. I would have no hesitation about recommending the trip to anyone, handicapped or otherwise.</p>
            <h3>Bipaswi Poudel</h3>
            <span>traveler</span>
            <img src="images/bipaswii.jpg" alt="">
         </div>
</div>

       

         
       

      </div>

   </div>

   </div>
   </div>
</section>

<!-- reviews section ends -->



<?php include('footer.php') ?>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>