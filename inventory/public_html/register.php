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

<br>

<div class="container">

	<div class="card mx-auto" style="width: 30rem;">
  <img src="./img/reg4.png" class="card-img mx-auto" alt="Login Icon">
	        
		      <div class="card-body">
		      	<!--<div class="card mx-auto">Register</div>-->
		        <form id="register_form" onsubmit="return false" autocomplete="off">
		          <div class="form-group">
		            <label for="username"><i class="fa fa-user">&nbsp;</i> Full Name</label>
		            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
		            <small id="u_error" class="form-text text-muted"></small>
		          </div>
		          <div class="form-group">
		            <label for="email"><i class="fa fa-envelope-o">&nbsp;</i>Email address</label>
		            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
		            <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
		          </div>
		          <div class="form-group">
		            <label for="password1"><i class="fa fa-lock">&nbsp;</i>Password</label>
		            <input type="password" name="password1" class="form-control"  id="password1" placeholder="Password">
		            <small id="p1_error" class="form-text text-muted"></small>
		          </div>
		          <div class="form-group">
		            <label for="password2"><i class="fa fa-lock">&nbsp;</i>Re-enter Password</label>
		            <input type="password" name="password2" class="form-control"  id="password2" placeholder="Password">
		            <small id="p2_error" class="form-text text-muted"></small>
		          </div>
		          <div class="form-group">
		            <label for="usertype"><i class="fa fa-users">&nbsp;</i>Usertype</label>
		            <select name="usertype" class="form-control" id="usertype">
		              <option value="">Choose User Type</option>
		              <option value="Admin">Admin</option>
		              <option value="Other">Other</option>
		            </select>
		            <small id="t_error" class="form-text text-muted"></small>
		          </div>
		          <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-sign-in"></span>&nbsp;Register</button>
		          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i> login</button> 
		        </form>
		      </div>


</div>
</div>


</body>
</html>

