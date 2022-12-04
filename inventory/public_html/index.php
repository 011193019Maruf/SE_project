<?php
include_once("./database/constants.php");
if (isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/dashboard.php");
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

<script type="text/javascript" rel="stylesheet" src="./js/main.js"></script>


</head>
<body>
<link rel="stylesheet" type="text/css" href="./includes/style.css">
<!-- Navbar -->
<?php include_once'./templates/header.php';?>

<br><br>
	<!-- Registration -->

<div class="container">


		<?php
			if (isset($_GET["msg"]) AND !empty($_GET["msg"])) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <?php echo $_GET["msg"]; ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				<?php
			}
		?>

	<!-- login card -->
<div class="card mx-auto" style="width: 30rem;">
  <img src="./img/login3.png" class="card-img-top mx-auto" alt="Login Icon">
  <div class="card-body">

    <!-- login form -->
	    <form id="form_login" onsubmit="return false" >
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label"><i class="fa fa-envelope-o">&nbsp;</i> Email address</label>
	   <input type="email" class="form-control" name="log_email" id="log_email" placeholder="Enter email">
			<small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
			
	  </div>


	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label"><i class="fa fa-key">&nbsp;</i> Password</label>
	     <input type="password" class="form-control" name="log_password" id="log_password" placeholder="Password">
			 <small id="p_error" class="form-text text-muted"></small>
	  </div><br>
	  <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i> login</button> 
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <button type="submit" class="btn btn-default"><a href="register.php"><i class="fa fa-pencil-square-o">&nbsp;</i> Register</button>

	</form>
  </div>
  <br><br>
  <div class="mx-auto"><a href="">Forget Password!</a></div><br>

</div>
</div>



</body>
</html>

