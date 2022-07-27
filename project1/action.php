<?php

session_start();

include('database.php');

// register code
if(isset($_POST['register']))
{
    $name = $_POST['username'];
    $mail = $_POST['mail'];
    $pass = md5($_POST['pass']) ;
    $repass =md5($_POST['repass']) ;
    
    $query = "insert into customer (id,username,email,password,repassword) values(NULL, '$name', '$mail', '$pass', '$repass')";
    
    $conn->query($query);
  header("location:index.php");
}

if(isset($_POST['Login']))
{
    $name = $_POST['username'];
    $pass = md5($_POST['pass']) ;

    $query = "select * from customer where username ='$name' and password ='$pass' " ;
   
   $result= $conn->query($query);

   $userdata = $result->fetch_assoc(); // fetches data from database 

   $count = $result->num_rows; //counts the number of rows selected

   if($count==0)
   {
    //login details do not match

    echo "Invalid login details !!!";
  
   }
   else{

    $_SESSION['ticket'] = 'correct';

    $_SESSION['userid'] = $userdata['id'];
    $_SESSION['usertype'] = $userdata['usertype'];



    header('location:dashboard.php');

   }


}

if(isset($_POST['singlebutton'])) // singlebutton is name of button in products...
{
    $title = $_POST['product'];
    $des = $_POST['des'];
    $image = $_FILES['image']['name'];
    $ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $random = rand(1,1000000);

    $newpicname = $random. "travel.".$ext;

    if($ext=="jpg" || $ext =="png" || $ext=="jpeg" || $ext=="gif")
    {

   

    move_uploaded_file($_FILES['image']['tmp_name'],"products/".$newpicname);
  
    
    
    $query = "insert into location (id,title,description,picture) values(NULL, '$title', '$des','$newpicname')";
    
   $conn->query($query);
  //header("location:index.php");
}
else{
  echo "invalid file format";
}
}


//update ko laagi code 
if(isset($_POST['updatebutton'])){
  $title = $_POST['product'];
    $des = $_POST['des'];
    $id =$_POST['id'];

    $query="update location set title='$title', description='$des' where id='$id'";
    $conn->query($query);

}


if(isset($_GET['id'])){

$id = $_GET['id'];
$query = "delete from location where id='$id'";
$conn->query($query);
header("location:packages.php");

}

// booking ko action...
if(isset($_POST['book'])){
  $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $destination = $_POST['destination'];
    $people = $_POST['people'];
    $arrivals = $_POST['arrivals'];
    $departure = $_POST['departure'];

   


    $query="insert into booking (id,name,email,phone,address,destination,people,arrival,departure) values
    (NULL,'$name','$email','$phone','$address','$destination','$people','$arrivals','$departure')";
    $conn->query($query);

   header("location:index.php");

}






if(isset($_POST['product'])) // singlebutton is name of button in products...
{
    $title = $_POST['title'];
    $des = $_POST['description'];
    $image = $_FILES['image']['name'];
    $ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $random = rand(1,1000000);

    $newpicname = $random. "travel.".$ext;

    if($ext=="jpg" || $ext =="png" || $ext=="jpeg" || $ext=="gif")
    {

   

    move_uploaded_file($_FILES['image']['tmp_name'],"products/".$newpicname);
  
    
    
    $query = "insert into destination (id,title,description,image) values(NULL, '$title', '$des','$newpicname')";
    
   $conn->query($query);
  //header("location:index.php");
}
else{
  echo "invalid file format";
}
}


?>




