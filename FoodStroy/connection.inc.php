<?php 
session_start();
$con=mysqli_connect("localhost", "root","", "inventory");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/FoodStroy/');
define('SITE_PATH','http://localhost/FoodStroy/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/food/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/food/');
 ?>