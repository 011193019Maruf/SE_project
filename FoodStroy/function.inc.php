<?php 
function pr($arr){
	echo '<pre>';
	print_r($arr);

}
function prx($arr){
	echo '<pre>';
print_r($arr);
die();
}

function get_safe_value($con, $str){
	if($str!=''){
		$str=trim($str);
	return mysqli_real_escape_string($con,$str);
}
}

function get_product($con,$limit='',$cat_id='',$product_id=''){
	$sql="SELECT * FROM food_product where status=1";
	if($cat_id!=''){
		$sql.=" AND categories_id=$cat_id";
	}
	if($product_id=''){
		$sql.=" AND ID=$product_id";
	}
$res=mysqli_query($con,$sql);
	$data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	
	
		$sql.="ORDER BY ID desc";
	
	if($limit!=''){
		$sql.="limit $limit";
	}

	return $data;
}
 ?>

