<?php
require('connection.inc.php');
require('function.inc.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$name=get_safe_value($con,$_POST['name']);
$uid=$_SESSION['USER_ID'];
mysqli_query($con,"UPDATE customer_users set name='$name' where ID='$uid'");
$_SESSION['USER_NAME']=$name;
echo "Your name updated";
?>