<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>Inventory</title>

	<!-- links & CDN -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<script type="text/javascript" src="./js/main.js"></script>

</head>
<body>

<!-- Navbar -->
<?php include_once'./templates/header.php';?>

<br><br>

<div class="container">
<!-- Admin info part -->
	<div class="row">
		<div class="col-md-4">
			<div class="card mx-auto" >
	  <img src="./img/user.png" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h3 class="card-title"><i class="fa fa-info-circle">&nbsp;</i>Profile Info</h3>
	    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin name</p>
	    <p class="card-text"><i class="fa fa-television">&nbsp;</i>Admin</p>
	    <p class="card-text"><i class="fa fa-clock-o">&nbsp;</i>Last Login : xxxx-xx-xx</p>
	    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i> Edit Profile</a>
	  </div>
	</div>
		</div>
<!-- welcome admin and ner order part -->
		<div class="col-md-8">
			<div class="jumbotron" style="width: 100%;height: 100%;">
				<h1>Welcome Admin,</h1>
				<br><br><br>
				<div class="row">
					<div class="col-sm-6">
						<iframe src="https://free.timeanddate.com/clock/i8ltxvb4/n73/szw160/szh160/hoc111/cf100/hncfff/mqc000" frameborder="0" width="160" height="160"></iframe>
					</div>
					<div class="col-sm-6">
						<div class="card">
      				<div class="card-body">
					        <h5 class="card-title">New Orders</h5>
					        <p class="card-text">Create New orders & Invoices</p>
					        <a href="#" class="btn btn-primary"><i class="fa fa-pencil">&nbsp;</i>New Order</a>
     					 </div>
    				</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>

<br>
<!--Category , Brand & Product-->
<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Categories</h4>
						<p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
						<a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
						<a href="manage_categories.php" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Brands</h4>
						<p class="card-text">Here you can manage your brand and you add new brand</p>
						<br>
						<a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
						<a href="manage_brand.php" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Products</h4>
						<p class="card-text">Here you can manage your prpducts and you add new products</p>
						<a href="product.php"class="btn btn-primary">Add</a>
						<a href="manage_product.php" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Modal -->
 <?php include_once'./templates/category_model.php'; ?>
 <?php include_once'./templates/brand_model.php'; ?>
 


</body>
</html>

