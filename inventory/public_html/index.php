<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Inventory</title>

	<!-- links & CDN -->

<?php include_once'./links_&_cdn.php';?>




</head>
<body>

<!-- Navbar -->
<?php include_once'./templates/header.php';?>

<br><br>

<div class="container">
	<!-- login card -->
<div class="card mx-auto" style="width: 30rem;">
  <img src="./img/login3.png" class="card-img-top mx-auto" alt="Login Icon">
  <div class="card-body">

    <!-- login form -->
	    <form>
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label"><i class="fa fa-envelope-o">&nbsp;</i> Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label"><i class="fa fa-key">&nbsp;</i> Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1">
	  </div><br>
	  <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i> login</button> 
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o">&nbsp;</i> Register</button>

	  <!--<span><a href="">Register</a></span>-->
	</form>
  </div>
  <br><br>
  <div class="mx-auto"><a href="">Forget Password!</a></div><br>

</div>
</div>



</body>
</html>

