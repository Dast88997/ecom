<?php include './model.php';?>
<?php
$order=$model->getOrderItemByOrderId($_GET['id']);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Order</title>
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
		$type=isset($_GET['type'])?$_GET['type']:'';
		if($type=='updateorder')
		 $model->updateOrder();
         $model->validateHeader();
       ?>
        
      
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
    <?php $model->sideMenuHeader();?>
                </div>  
               
                <div class="col-md-9">
                    <div class="filter" style="width: 100%; box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                         <div class="card-body admin-menu">
                             <p style="font-weight: bold;margin: 0;">
							 <a href="manage-order.php">
							 <i class="fas fa-arrow-left"></i></a> &nbsp;&nbsp;VIEW ORDER</p><br>
							 <span style="width:100px;"><b>Delivery Address </b>: <?php print_r($_GET['address']);?></span>
                         </div>
                            <ul class="list-group list-group-flush">
                             
                            <li class="list-group-item borderr" style="border:none;">
                            
 <table class="table table-bordered" id="listcategory">
     <thead>
          <tr>
              <th scope="col">PRODUCT NAME</th>
              
              <th scope="col">QUANTITY</th>
			  <th scope="col">AMOUNT</th>
               <th scope="col">PRODUCT DESCRIPTION</th>

            
              <th scope="col">PRODUCT IMAGE 1</th>
			   <th scope="col">CONFIRM ORDER</th>
          <tr>
     </thead>
  <tbody>                         
         <?php
             $COUNT=0;
             foreach ($order as $value) {$COUNT++;
                 ?>
      <tr>
     <td><?php print_r($value['PRODUCT_NAME']);?></td> 
       <td><?php print_r($value['TOTAL']);?></td>
	    <td><?php print_r($value['AMOUNT']);?></td>
<td><?php print_r($value['PRODUCT_DESC']);?></td>
    
        
     <td><img src="../upload_img/<?php print_r($value['IMG1']);?>" width="100" height="100" alt="img1"/></td>
      
	  <td><button><a href="?type=updateorder&id=<?php print_r($_GET['id']);?>&address=<?php print_r($_GET['address']);?>">Confirm</a></button></td>
        
	  </tr>    
 <?php      
             }  
         ?>
  </tbody>
</table>          
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
  <script src="js/main.js"></script>  
    </body>
</html>
