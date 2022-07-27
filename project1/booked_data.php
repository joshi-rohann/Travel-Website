<?php   
session_start();

?>


<?php include('database.php'); ?>

<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Booked Data</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous">


         <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="index.css">


</head>
<body>
    
    <p></p>

<div class="container">
<div class="row"> 
    <div class="col-md-12">
    <table class="table table-dark table-striped">
    <tr class="table table-dark table-striped">
        <thead>
        <th class="table table-dark table-striped">Name</th>
        <th class="table table-dark table-striped">Email</th>
        <th class="table table-dark table-striped">Phone</th>
        <th class="table table-dark table-striped">Address</th>
        <th class="table table-dark table-striped">Destination</th>
        <th class="table table-dark table-striped">Pople</th>
        <th class="table table-dark table-striped">Arrival</th>
        <th class="table table-dark table-striped">Departure</th>
        </thead>
    </tr>
    <tbody>
<?php 

$query = "select * from booking";
$result = $conn ->query($query); // query run gareko 

while($data = $result->fetch_assoc()){ ?>

<tr class="table table-dark table-striped">
    <td class="table table-dark table-striped"><?php echo $data['name']; ?></td>
    <td class="table table-dark table-striped"><?php echo $data['email']; ?></td>
    <td class="table table-dark table-striped"><?php echo $data['phone']; ?></td>
    <td class="table table-dark table-striped"><?php echo $data['address']; ?></td>
    <td class="table table-dark table-striped"><?php echo $data['destination']; ?></td>
    <td class="table table-dark table-striped"><?php echo $data['people']; ?></td>
    <td class="table table-dark table-striped"><?php echo $data['arrival']; ?></td>
    <td class="table table-dark table-striped"><?php echo $data['departure']; ?></td>
</tr>

<?php } ?>
</tbody>
</table>
</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<?php include('footer.php'); ?>

</body>
</html>