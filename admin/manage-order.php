<?php include './model.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Order</title>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">   
        <link rel="stylesheet" href="css/bootstrap.css">   
        <link rel="stylesheet" href="font/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">   
        <style>h2{font-size:13px;}</style>
    </head>
    <body>
<?php
if($_SESSION['login_auth']!=1){header('Location:index.php');exit;}
         $model->validateHeader();
		 $type= isset($_GET['type'])?$_GET['type']:'';
 
 if($type=="update"){
	$model->cancelOrder(); 
 }		 
$order=$model->getAllOrder();
?>
          <div class="popup" style="margin-top: 100px;">
        <p style="float:right;" onclick="document.getElementsByClassName('popup')[0].style.display='none'">&#10060;</p>
               <form action="" class=""  style="width:80%;margin: auto;">
  <input type="hidden" name="type" value="update">
   <input type="hidden" name="id" id="updateid">
 
  <label style="font-size: 20px;">Are You Sure ?</label>
  <textarea rows="5" cols="10" style="width:100%" placeholder="Enter Description"></textarea>
  <button type="submit" name="cancel_order" class="btn btn-danger border border-secondary padd" style="width: 100%;font-weight: bold;margin-top: 20px;">Cancel Order</button>
</form> 
        </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        <?php $model->sideMenuHeader();?>
        </div>  
        <div class="col-md-9">
            <div class="filter" style="width: 100%; box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                <div class="card-body admin-menu">
                    <p style="font-weight: bold;margin: 0;">MANAGE ORDER
                    <span style="float:right;">TOTAL ORDER :  <?php print_r(count($order));?></span>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item borderr" style="border:none;">
                        <p style="font-weight: bold;margin: 0;">  <input type="search" style="outline: none;border: 1px solid #000;padding-left: 10px;" placeholder="Search Product" id="searchCat" onkeyup="searchCategory()">
                    </p> </li>
                            <li class="list-group-item borderr" style="border:none;">
                            
 <table class="table table-bordered" id="listcategory">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">TRANSACTION ID</th>
       <th scope="col">ORDER DATE</th>
       <th scope="col">PAYMENT MODE</th>
        <th scope="col">TOTAL AMOUNT</th>
         <th scope="col">CANCEL ORDER</th>
		   <th scope="col">NOTES</th>
		  <th scope="col">ORDER STATUS</th>
           <th scope="col">VIEW ALL</th>
		    <th scope="col">PRINT BILL/DOWNLOAD</th>
		  
        </tr>
  </thead>
  <tbody>                         
         <?php
         if($order)
         {
             $COUNT=0;
             foreach ($order as $value) {$COUNT++;
                 ?>
                       <tr>
           <th scope="row"><?php print_r($COUNT);?></th>
           <td><?php print_r($value['TRANSACTION_ID']);?></td>
          
             
         <td><?php print_r($value['DATE']." ".$value['AM_PM']);?></td>
         <td><?php print_r($value['PAYMENT_MODE']);?></td>
         <td><?php print_r($value['TOTAL_AMOUNT']);?></td>
     <td><a href="#" onclick="cancelOrder('<?php print_r($value['ID']);?>')"><button class="btn btn-danger" style="font-weight: bold;font-size: 10px;"><i class="far fa-edit"></i></button></a></td>
  
   <td><?php print_r($value['NOTE']);?></td>
  <td>
  <?php 
  
  if($value['ORDER_CONFIRM']==2)
	 print_r('Success'); 
  else if($value['ORDER_CONFIRM']==1)
	  print_r('Pending');
  else if($value['ORDER_CONFIRM']==0)
	  print_r('Cancel');
	  
  ?>
  
  </td>
         <td><a href="order-view.php?id=<?php print_r($value['ID']);?>&address=<?php print_r($value['DELIVERY_ADD']);?>">View</a></td>
                      
<td>
<a href="generate-bill.php?id=<?php print_r($value['ID']);?>&address=<?=$value['DELIVERY_ADD'];?>" target="_blank">Bill Download</a>
</td>
					  </tr>          
 
         <?php      
             }  
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
  <script>
//document.getElementsByClassName("list-group-item")[8].classList.add("active");
</script> 
    </body>
</html>
