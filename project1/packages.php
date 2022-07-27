<?php   
session_start();

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Packages</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <?php include('database.php'); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous">


      <link rel="stylesheet" href="packages.css">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>

    <?php include('navbar.php'); ?>
  

 
     
<div class="container">
<div class="row">  
<?php 
$pid = $_GET['pid'];

$query = "select * from location where id= '$pid'";
$result = $conn ->query($query); // query run gareko 

// $data = $result->fetch_assoc(); // fetches data from db , esley tara single row ko data matra tanxa multiple tandaina so loop launu parxa 
// print_r($data);  data fetch aako xa ki xaina herney tarika incase of database



while($data = $result->fetch_assoc()){ ?> <!-- esley chai harek row ko laagi data fetch garera lyaunxa -->

   
            <div class="col-md-12">
                <div id="<?php echo $data['title']; ?>"></div>
                <p><img src="products/<?php echo $data['picture']; ?>" class="img-thumbnail"></p>
                <h2 class="title"><?php echo $data['title']?></h2> <!-- database ma vaako title tanxa esleyy-->
                <p class="description"><?php echo $data['description']?></p> <!-- database ma vaako description tanxa esleyy-->
             

              <div class="container-fluid">
    <div class="container p-5">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card h-100">
            <div class="card1">
            <div class="card-body">
             
              <h5 class="card-title">Basic</h5>
              <p class="text-muted text">Individual</p>
             
              <p class="h2">RS 7000</p>
              <br><br>
              <div class="d-grid my-3">
                <a class="btn btn-outline-dark btn-block " href="booking.php" target="_blank">BOOK</a>
              </div>
              <ul class="list">
                <li>Package for 3 nights & 4 days</li>
                <li>Available only for individual</li>
                <li>A room in 3 star Hotel</li>
                
              </ul>
            </div>
</div>
            
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card h-100">
            <div class="card2">
            <div class="card-body">
             
              <h5 class="card-title">Standard</h5>
              <p class="text-muted text">Couple</p>
           
              <p class="h2">RS 10400</p>
              <br><br>
              <div class="d-grid my-3">
                <a class="btn btn-outline-dark btn-block" href="booking.php" target="_blank">BOOK</a>
              </div>
              <ul class="list">
              <li>Package for 4 nights & 5 days</li>
                <li>Available only for couple</li>
                <li>A room in 5 star Hotel</li>
                
              </ul>
            </div>
</div>
            
          </div>
        </div>
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card h-100">
            <div class="card3">
            <div class="card-body">
             
              <h5 class="card-title">Premium</h5>
              <p class="text-muted text">Group of 5</p>
            
              <p class="h2">RS 16700</p>
              <br><br>
              <div class="d-grid my-3">
                <a class="btn btn-outline-dark btn-block" href="booking.php" target="_blank">BOOK</a>
              </div>
              <ul class="list">
              <li>Package for 6 nights & 7 days</li>
                <li>Available only for group of 5 or more</li>
                <li>A suite in 5 star Hotel</li>
                
              </ul>
            </div>
            </div>
            
          </div>
        </div>
      </div>    
    </div>


    <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
                                { ?>
                
                <a class="delete" href="action.php?id=<?php echo $data['id']; ?>"><i class="fas fa-trash"></i></a>
                <a class="update" href="update.php?id=<?php echo $data['id'];?>"> <i class="fas fa-edit"></i></a>

                <?php } ?>



            </div>
     

<?php
}



?>

    

</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>