<?php 
session_start();
$con=mysqli_connect("localhost", "root","", "inventory");
define('SERVER_PATH',$_SERVER['DPCUMENT_ROOT'].'/php/FoodStory/' );
define('SITE_PATH', 'http://127.0.0.1/php/FoodStory/');
define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH.'media/food/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/food/');
 ?>