<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->




<style>
  
   
    .main{
        background:url('images/cart.jpg');
        background-size:cover;
        height: 950px;
    }
    .new{
      margin-top:115px;
      margin-left:120px;
    }
  
  
</style>


<section class="main">
<form class="form-horizontal"  action="action.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->

<div class="new"> 
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description" >PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="des"></textarea>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Per Night Price</label>  
  <div class="col-md-4">
  <input id="product_name" name="pernight" placeholder="Per Night" class="form-control input-md" required="" type="text">
    
  </div>
</div>
    
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton" name="img">image</label>
  <div class="col-md-4">
    <input id="filebutton" name="image" class="input-file" type="file">
  </div>
</div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Add Product</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Add</button>
  </div>
  </div>

  </div>
</fieldset>
</form>
</section>