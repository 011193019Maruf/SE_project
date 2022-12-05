<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inventory </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="./includes/style.css">

<script type="text/javascript" src="./js/main.js"></script>

 </head>
<body>
  <div class="overlay"><div class="loader"></div></div>
<!-- Navbar -->
<?php include_once'./templates/header.php';?>  

  <br/><br/>
  <div class="container">
    <div class="card mx-auto" style="width: 30rem;">
          <div class="card-header">Register</div>
          <div class="card-body">



<form id="product_form" onsubmit="return false">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Date</label>
              <input type="text" class="form-control" name="added_date" id="added_date" value="<?php echo date("Y-m-d"); ?>" readonly/>
            </div>
            <div class="form-group col-md-6">
              <label>Product Name</label>
              <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" required>
            </div>
          </div>
          <div class="form-group">
            <label>Category</label>
            <select class="form-control" id="select_cat" name="select_cat" required/>
              

              
            </select>
          </div>
          <div class="form-group">
            <label>Brand</label>
            <select class="form-control" id="select_brand" name="select_brand" required/>
              

              
            </select>
          </div>
          <div class="form-group">
            <label>Product Price</label>
            <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Price of Product" required/>
          </div>
          <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" id="product_qty" name="product_qty" placeholder="Enter Quantity" required/>
          </div>
          <button type="submit" class="btn btn-success">Add Product</button>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
<a href=".\dashboard.php"class="btn btn-dark">Back</a>

        </form>
         </div>
        <div class="card-footer text-muted">
          
        </div>
      </div>
  </div>

</body>
</html>

