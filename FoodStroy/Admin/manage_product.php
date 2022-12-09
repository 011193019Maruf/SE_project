<?php 
require('top.inc.php') ;

$categories_id ='';
$name ='';
$price ='';
$image ='';
$short_desc ='';
$description ='';
$meta_title='';
$meta_key ='';

$msg='';
$image_required='required';

if(isset($_GET['ID']) && $_GET['ID']!=''){
   $image_required='';
	$ID=get_safe_value($con ,$_GET['ID']) ;
	$res= mysqli_query($con,"SELECT * FROM food_product WHERE ID='$ID'");
	$check=mysqli_num_rows($res);
	if($check>0){
	$row=mysqli_fetch_assoc($res);
	$categories_id =$row['categories_id'];
   $aname =$row['name'];
   $price =$row['price'];
   $short_desc =$row['short_desc'];
   $description =$row['description'];
   $meta_title =$row['meta_title'];
   $meta_key =$row['meta_key'];
  
}
else{
	header('location:product.php');
die();
}
}

if(isset($_POST['submit'])){
$categories_id=get_safe_value($con ,$_POST['categories_id']) ;
$name=get_safe_value($con ,$_POST['name']) ;
$price=get_safe_value($con ,$_POST['price']) ;
$short_desc=get_safe_value($con ,$_POST['short_desc']) ;
$description=get_safe_value($con ,$_POST['description']) ;
$meta_title=get_safe_value($con ,$_POST['meta_title']) ;
$meta_key=get_safe_value($con ,$_POST['meta_key']) ;

$res= mysqli_query($con,"SELECT * FROM food_product WHERE NAME='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['ID']) && $_GET['ID']!=''){
  $getData=mysqli_fetch_assoc($res);
if($ID==$getData['ID']){

}
else{
	  $msg="Product already exist";
}		}
    else{
      $msg="Product already exist";
  }
	}


if($msg==''){
	if(isset($_GET['ID']) && $_GET['ID']!=''){
     if($_FILES['image']['tmp_name']!=''){

$image=rand(1111111,9999999).'_'.$_FILES['image']['Name'];
  move_uploaded_file($_FILES['image']['tmp_name'],'../media/food/'. $image);
      $update_sql="UPDATE  food_product set categories_id='$categories_id',name='$name',price='$price',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_key='$meta_key', image='$image' WHERE ID='$ID' ";
     }else{

      $update_sql="UPDATE  food_product set categories_id='$categories_id',name='$name',price='$price',short_desc='$short_desc',description='$description',meta_title='$meta_title',meta_key='$meta_key' WHERE ID='$ID' ";

     }
mysqli_query($con, $update_sql);

}
else{
  $image=rand(1111111,9999999).'_'.$_FILES['image']['Name'];
  move_uploaded_file($_FILES['image']['tmp_name'],'../media/food/'. $image);

mysqli_query($con,"INSERT INTO food_product(categories_id,name,price,short_desc,description,meta_title,meta_key,status,image) VALUES('$categories_id','$name','$price','$short_desc','$description','$meta_title','$meta_key' ,'1','$image')");
}
header('location:product.php');
die();

}
}


?>
 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Food Items</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
                        	<div class="card-body card-block">

                           <div class="form-group">
                           	<label for="categories" class=" form-control-label">Categories</label>
                           	<select  class="form-control" name="categories_id">
                                 <option>Select Category</option>
                                 <?php 
                                 $res=mysqli_query($con,"SELECT ID ,categories FROM admin_categorie order by categories asc");
                                 while($row=mysqli_fetch_assoc($res)){
                                  if(row['$ID'] == $categories_id){
                                     echo "<option selected value=".$row['ID']." > ".$row['categories']." </option>"; 
                                 } 
                                  
                                  else{
                             echo "<option value=".$row['ID']." > ".$row['categories']." </option>"; 
                                 } 
                                  }
                                
                                 ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <label for="categories" class=" form-control-label">Food Name</label>
                              <input type="text" name="name" placeholder="Enter Food name" class="form-control" required value="<?php echo $name ?>">
                           </div>
                           <div class="form-group">
                              <label for="categories" class=" form-control-label">Price</label>
                              <input type="text" name="price" placeholder="Enter Price" class="form-control" required value="<?php echo $price ?>">
                           </div>
                  
                           <div class="form-group">
                              <label for="categories" class=" form-control-label">Image</label>
                              <input type="file" name="image"  class="form-control" ><?php echo $image_required ?>
                           </div>
                           <div class="form-group">
                              <label for="categories" class=" form-control-label">Short Description</label>
                              <textarea name="short_desc" placeholder="Please enter food short description" class="form-control" required ><?php echo $short_desc ?></textarea>
                           </div>
                           <div class="form-group">
                              <label for="categories" class=" form-control-label"> Description</label>
                              <textarea name="description" placeholder="Please enter food description" class="form-control" required ><?php echo $description ?></textarea>
                           </div>
                            <div class="form-group">
                              <label for="categories" class=" form-control-label"> Meta Title</label>
                              <textarea name="meta_title" placeholder="Enter food meta title " class="form-control" ><?php echo $meta_title ?></textarea>
                           </div>
                            <div class="form-group">
                              <label for="categories" class=" form-control-label">Meta Keyword</label>
                              <textarea name="meta_key" placeholder="Enter food meta dkeyword" class="form-control" required ><?php echo $meta_key ?></textarea>
                           </div>

                            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           </button>
                           <div class="field_error"><?php echo $msg ?></div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>


<?php require('footer.inc.php') ?>


