<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<?php include('database.php'); ?>

<?php 
    
    $id = $_GET['id'];
    $query = "select * from location where id='$id'";
    $result = $conn->query($query); //query run garekooo
    $data = $result->fetch_assoc();
    
    ?>

<form class="form-horizontal"  action="action.php" method="post">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text"   value="<?php echo $data['title']; ?>" >
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description" >PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="des"><?php echo $data['description']; ?></textarea>
  </div>
</div>

    
<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Update Package</label>
  <div class="col-md-4">
    <button id="singlebutton" name="updatebutton" class="btn btn-dark" type="submit">Update</button>
  </div>
  </div>

</fieldset>
</form>