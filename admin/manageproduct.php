<?php include './model.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Product</title>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">   
        <link rel="stylesheet" href="css/bootstrap.css">   
       <link rel="stylesheet" href="font/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">   
    </head>
    <body>
        <?php
if($_SESSION['login_auth']!=1){header('Location:index.php');exit;}
         $model->validateHeader();
       if(isset($_POST['manageproduct'])){
           if($_POST['cat_id']!=''&&$_POST['sub_cat_id']!=''){
           $model->addProduct();
           ?>
<div id="snackbar">Add Product Successfully</div>
<script>
myFunction();
function myFunction() {
var x = document.getElementById("snackbar");
x.className = "show";
x.style.backgroundColor="green";
x.fontWeight="bold";
setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}
</script>   
      <?php 
       }
       else{
           ?>
<div id="snackbar">First Of All Select Sub Category</div>
<script>
myFunction();
function myFunction() {
var x = document.getElementById("snackbar");
x.className = "show";
x.style.backgroundColor="red";
x.fontWeight="bold";
setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}
</script>   
      <?php     
       }
      }
   ?>      
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
    <?php $model->sideMenuHeader();?>
                </div>  
               
                <div class="col-md-9">
                    <div class="filter" style="width: 100%; box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                         <div class="card-body admin-menu">
                             <p style="font-weight: bold;margin: 0;">PRODUCT</p>
                             </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item borderr" style="border:none;">                                     
 <form action="" class="" method="POST" style="width:50%;margin: auto;" enctype='multipart/form-data'>
  <label style="font-size: 13px;font-weight: bold;">Select Category Name*</label>
  <div class="form-group">
      <select class="form-control padd" style="height: 45px;" name="cat_id"  onchange="window.location.assign('?cat_sub_name='+this.value)">
          <option value="">Select Category</option>
         <?php
         if($model->getCategory())
         {
             foreach ($model->getCategory() as $value) {
                 if($_GET['cat_sub_name']!=$value['ID']){
                 ?>
           <option value="<?php print_r($value['ID']);?>"><?php print_r($value['CAT_NAME']);?></option>
           <?php      
             }
             else{
                 ?>
           <option value="<?php print_r($value['ID']);?>" selected=""><?php print_r($value['CAT_NAME']);?></option> 
            <?php
            }
             }
         }
         ?>
      </select>
  </div>
  
   <label style="font-size: 13px;font-weight: bold;">Select Sub Category Name*</label>
  <div class="form-group">
      <select class="form-control padd" style="height: 45px;"  name='sub_cat_id'>
          <option value="">Select Sub Category</option>
         <?php
         if($model->getSubManageCategory())
         {
             foreach ($model->getSubManageCategory() as $value) {?>
           <option value="<?php print_r($value['ID']);?>"><?php print_r($value['SUB_CAT_NAME']);?></option>
           <?php      
             }  
         }
         ?>
      </select>
  </div>
  <label style="font-size: 13px;font-weight: bold;">Enter Product Name*</label>
   <div class="form-group">
    <input type="text" class="form-control padd"  name='p_name'>
  </div>
  <label style="font-size: 13px;font-weight: bold;">Enter Product Title*</label>
    <div class="form-group">
    <input type="text" class="form-control padd"  name='p_title'>
  </div>
  <label style="font-size: 13px;font-weight: bold;">Enter Product Description*</label>
    <div class="form-group">
        <textarea class="form-control padd" rows="5" cols="20"  name='p_desc' placeholder="Enter Product Description"></textarea>
  </div>
  
  <label style="font-size: 13px;font-weight: bold;">Enter Product Brand Name*</label>
    <div class="form-group">
    <input type="text" class="form-control padd"  name='p_brand' >
  </div>
  
   <label style="font-size: 13px;font-weight: bold;">Enter Price Per/Peaces*</label>
    <div class="form-group">
    <input type="text" class="form-control padd"  name='p_price'>
  </div>
   
    <label style="font-size: 13px;font-weight: bold;">Select Unit*</label>
    <div class="form-group">
        <select class="form-control"  name="p_unit">
            <option value="pc">PC</option>
              <option value="ltr">LTR</option>
                <option value="kg">KG</option>
                  <option value="gm">GRAM</option>
        </select>
   
  </div>
     <label style="font-size: 13px;font-weight: bold;">Select Payment Mode*</label>
    <div class="form-group">
        <select class="form-control"  name="p_pmode">
                  <option value="COD">CASH ON DELIVERY</option>
                  <option value="NETBANKING">NETBANKING</option>
                  <option value="PAYTM">PAYTM</option>
                  <option value="CARD">CREDIT CARD/DEBIT CARD</option>
                  <option value="UPI">UPI</option>
                  <option value="PAYTM">PAYTM</option>
                  <option value="PHONE PE">PHONE PE</option>
                  <option value="ALL">ALL MODE</option>
        </select>
    </div>
     <label style="font-size: 13px;font-weight: bold;">Enter Quantity*</label>
    <div class="form-group">
        <input type="number" class="form-control padd"  name='p_quantity' >
    </div>
     
    <label style="font-size: 13px;font-weight: bold;">Offer In %</label>
    <div class="form-group">
    <input type="number" class="form-control padd"  name='p_offer' >
  </div>
 <label style="font-size: 13px;font-weight: bold;">Enter Rating</label>
    <div class="form-group">
    <input type="number" class="form-control padd"  name='p_rating' >
  </div>
 <label style="font-size: 13px;font-weight: bold;">Upload Product Image 1</label>
    <div class="form-group">
        <input type="file" class="form-control padd"  name='p_file1'>
  </div>
 <label style="font-size: 13px;font-weight: bold;">Upload Product Image 2</label>
    <div class="form-group">
        <input type="file" class="form-control padd"  name='p_file2'>
  </div>
   <label style="font-size: 13px;font-weight: bold;">Upload Product Image 3</label>
    <div class="form-group">
        <input type="file" class="form-control padd"  name='p_file3'>
  </div>
    <label style="font-size: 13px;font-weight: bold;">Upload Product Image 4</label>
    <div class="form-group">
        <input type="file" class="form-control padd"  name='p_file4'>
  </div>
        
  <label style="font-size: 13px;font-weight: bold;">Upload Product Image 5</label>
    <div class="form-group">
        <input type="file" class="form-control padd"  name='p_file5'>
  </div>
       
  <button type="submit" name="manageproduct" class="btn btn-light border border-secondary padd" style="width: 100%;font-weight: bold;">Create Product</button>
</form> 
                            
                            </li>
                            </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
        
   <?php $model->callfooter();?>     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
  <script>
document.getElementsByClassName("list-group-item")[4].classList.add("active");
</script>  
    </body>
</html>
