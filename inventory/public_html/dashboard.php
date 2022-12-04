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

    <meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Inventory</title>

	<!-- links & CDN -->



<?php include_once'./links_&_cdn.php';?>

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

		<!--Category-->
		<div class="col-md-4">
						<div class="card">
      				<div class="card-body" >
					        <h3 class="card-title">Category</h3>
					        <p class="card-text">Manage your categoy and add new parent and sub categoy</p>
					        <a href="categoy.php" data-toggle="modal" data-target="#form_category" class="btn btn-primary"><i class="fa fa-puzzle-piece">&nbsp;</i>Add</a>

					        <a href="#" class="btn btn-primary"><i class="fa fa-sitemap">&nbsp;</i>Manage</a>
     					 </div>
    				</div>			
		</div>
		<!--Brand-->
		<div class="col-md-4">
						<div class="card">
      				<div class="card-body">
					        <h3 class="card-title">Brand</h3>
					        <p class="card-text">Manage your categoy and add new parent and sub categoy</p>
					        <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary"><i class="fa fa-puzzle-piece">&nbsp;</i>Add</a>

					        <a href="#" class="btn btn-primary"><i class="fa fa-sitemap">&nbsp;</i>Manage</a>
     					 </div>
    				</div>	
		</div>
		<!--Product-->
		<div class="col-md-4">
						<div class="card" >
      				<div class="card-body" >
					        <h3 class="card-title">Product</h3>
					        <p class="card-text">Manage your categoy and add new parent and sub categoy</p>
					        <a href="#" data-toggle="modal" data-target="#form_product" class="btn btn-primary"><i class="fa fa-puzzle-piece">&nbsp;</i>Add</a>

					        <a href="#" class="btn btn-primary"><i class="fa fa-sitemap">&nbsp;</i>Manage</a>
     					 </div>
    				</div>	
		</div>
	</div>
</div>


<!-- Modal -->
 <?php include_once'./templates/category_model.php'; ?>
 <?php include_once'./templates/brand_model.php'; ?>
 <?php include_once'./templates/product_model.php'; ?>


</body>
</html>

