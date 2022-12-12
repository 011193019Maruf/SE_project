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
	$sql="SELECT food_product.*,admin_categorie.categories from food_product,admin_categorie where food_product.status=1 ";
	if($cat_id!=''){
		$sql.=" AND food_product.categories_id=$cat_id ";
	}
	if($product_id!=''){
		$sql.=" AND food_product.ID=$product_id ";
	}
	$sql.=" AND food_product.categories_id=admin_categorie.ID ";
	$sql.=" ORDER BY food_product.ID desc";
$res=mysqli_query($con,$sql);
	$data=array();
	while($row=mysqli_fetch_assoc($res)){
		$data[]=$row;
	}
	
	
		
	
	if($limit!=''){
		$sql.="limit $limit";
	}

	return $data;
}
 ?>

