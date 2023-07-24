<?php include './model.php';?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Product Update</title>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">   
        <link rel="stylesheet" href="css/bootstrap.css">   
       
         <link rel="stylesheet" href="font/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">   
 <style>input,textarea{width:100%;}</style>
    </head>
    <body>
<?php

        if($_SESSION['login_auth']!=1){header('Location:index.php');exit;}
         $model->validateHeader();
		 $model->updateProduct();
        
       ?>
        
        
      
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
    <?php $model->sideMenuHeader();?>
                </div>  
               
                <div class="col-md-9">
                    <div class="filter" style="width: 100%; box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                         <div class="card-body admin-menu">
                             <p style="font-weight: bold;margin: 0;"><a href="manageproductcrud.php"><i class="fas fa-arrow-left"></i></a> &nbsp;&nbsp;UPDATE PRODUCT</p>
                                                        </div>
                            <ul class="list-group list-group-flush">
         <form action="" method="POST" enctype="multipart/form-data">  
                            <li class="list-group-item borderr" style="border:none;">
                           
 <table class="table table-bordered" id="listcategory">
  <tbody>

         <?php
         if($model->getProductByID())
         {
             $COUNT=0;
             foreach ($model->getProductByID() as $value) {$COUNT++;
                 ?>
  <tr>
      <th scope="col">PRODUCT NAME</th>
      <td><?php print_r($value['PRODUCT_NAME']);?></td>
      <td><input type="text" value="<?php print_r($value['PRODUCT_NAME']);?>" name="p_name"></td>
  </tr> 
  <input type="hidden" value="<?php print_r($value['ID']);?>" name="p_id"></td>

  <tr> 
      <th scope="col">PRODUCT TITLE</th>
      <td><?php print_r($value['PRODUCT_TITLE']);?></td>
       <td><input type="text" value="<?php print_r($value['PRODUCT_TITLE']);?>" name="p_title"></td>
  </tr>
  <tr> 
      <th scope="col">PRODUCT CATEGORY ID</th>
      <td><?php print_r($value['CAT_ID']);?></td>
      <td><input type="text" value="<?php print_r($value['CAT_ID']);?>" name="cat_id"></td>
  </tr>
  <tr> 
      <th scope="col">PRODUCT SUB CATEGORY ID</th>
      <td><?php print_r($value['SUB_CAT_ID']);?></td>
       <td><input type="text" value="<?php print_r($value['SUB_CAT_ID']);?>" name="sub_cat_id"></td>
  </tr>
  <tr> 
      <th scope="col">PRODUCT STOCK</th>
      <td><?php print_r($value['STOCK']);?></td>

       <td>
 <select name="stock" style='width:100%;'>
 <?php
 if($value['STOCK']==1)
 {
	 ?>
<option value='1' selected>In Stock</option>
  <option value='0'>Out Of Stock</option>
 <?php
 }
 else
 {
	 ?>
	 <option value='1'>In Stock</option>
	  <option value='0' selected>Out Of Stock</option>
<?php	 
 }
 ?>

  </select>
  </td>
  </tr>
  <tr> 
      <th scope="col">PRODUCT DESCRIPTION</th>
      <td><?php print_r($value['PRODUCT_DESC']);?></td>
      <td><textarea rows="10" cols="25" value="" name="p_desc"><?php print_r($value['PRODUCT_DESC']);?></textarea></td>
  </tr>
  <tr> 
      <th scope="col">PRODUCT BRAND NAME</th>
      <td><?php print_r($value['PRODUCT_BRAND_NAME']);?></td>
    <td><input type="text" value="<?php print_r($value['PRODUCT_BRAND_NAME']);?>" name="p_brand"></td>
  </tr>
  <tr> 
      <th scope="col">PRODUCT PRICE</th>
      <td><?php print_r($value['PRICE']);?></td>
      <td><input type="text" value="<?php print_r($value['PRICE']);?>" name="p_price"></td>
  </tr>
  <tr> 
      <th scope="col">PRODUCT UNIT</th>
      <td><?php print_r($value['UNIT']);?></td>
      <td><input type="text" value="<?php print_r($value['UNIT']);?>" name="p_unit"></td>
  </tr>
  <tr> 
  <th scope="col">PRODUCT QUANTITY</th>
  <td><?php print_r($value['QUANTITY']);?></td>
  <td><input type="text" value="<?php print_r($value['QUANTITY']);?>" name="p_quantity"></td>
  </tr>
  <tr> <th scope="col">PRODUCT STATUS</th><td><?php print_r($value['STATUS']);?></td>

  <td>
  <select name="p_status" style='width:100%;'>
  <?php
 if($value['STATUS']==1)
 {
	 ?>
  <option value='1' selected>Active</option>
  <option value='0'>Deactive</option>
 <?php
 }
 else
 {
	 ?>
  <option value='1'>Active</option>
  <option value='0' selected>Deactive</option>
<?php	 
 }
 ?>

  </select>
  </td>
  
  </tr>
  <tr> <th scope="col">PRODUCT OFFER</th><td><?php print_r($value['PRODUCT_OFFER']);?>%</td>
  <td><input type="text" value="<?php print_r($value['PRODUCT_OFFER']);?>" name="p_offer"></td>
  </tr>
  <tr> <th scope="col">PRODUCT RATING</th><td><?php print_r($value['RATING']);?></td>
  <td><input type="text" value="<?php print_r($value['RATING']);?>" name="p_rating"></td>
  </tr>
  <tr> <th scope="col">PRODUCT IMAGE 1</th>
  <td><img src="../upload_img/<?php print_r($value['IMG1']);?>" width="100" height="100" alt="img1"/></td>
  <td><input type="file" name="img1"></td>
  </tr>
 <tr> <th scope="col">PRODUCT IMAGE 2</th><td><img src="../upload_img/<?php print_r($value['IMG2']);?>" width="100" height="100" alt="img2"/></td>
 <td></td>
 </tr>
 
         

    <?php      
             }  
         }
         ?>
		 
		 </tbody>
</table>          
                      
					   </li>
							
							 <li class="list-group-item borderr" style="border:none;">
							 <input style="width:30%;" type="submit" class="btn btn-danger" name="productupdate" value="Update">
							 </li>
							  </form>
                            </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
        
   <?php $model->callfooter();?>     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
  <script src="js/main.js"></script>  
    </body>
</html>
