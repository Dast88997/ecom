<?php
class header
{
 public function topHeader()
   {?>
<header>
    <div class="container-fluid" style="background-color:green;">
    <div class="row">
        
        <div class="col-md-10">
             <ul class="nav">
 
  <li class="nav-item dropdown">
      <a class="nav-link  active text-size-link-white" style="color:#fff;position: relative;font-size:35px;" data-toggle="dropdown" href="#"><img src="./Image/emma-logo.png" width="100" height="100"> &nbsp &nbsp Emmanuel International Pvt Ltd Admin</a>
      
  </li>
          </ul>
        </div>
        
      
     
        
        
    </div>    
    </div>
</header>    
       
       
   <?php
   }
   
   
   
#-------------------------------------------- LOGIN   HEADER----------------------------


  public function topLoginHeader()
   {
    
     ?>

<header>
    <div class="container-fluid header-menu-row">
    <div class="row">
         <div class="col-md-5">
             <h1 class="text-heading"><img src="image/emma-logo.png" width="90" height="90">&nbsp &nbsp Emmanuel International Pvt Ltd Admin</h1> 
        </div>
          
       
      
        <div class="col-md-4" style="margin-top: 4px;">
            <nav class="nav justify-content-end">
        <a class="nav-link top-logo-text" style="color:#fff;padding-top:30px;" href=""><b>ADMIN </b><i class="fas fa-user-alt"></i></a>
        <a class="nav-link top-logo-text" style="color:#fff;text-transform: uppercase;padding-top:30px;" href=""><b>Mr . <?php    print_r($_SESSION['name']);?></b></a>
        <a class="nav-link top-logo-text" style="color:#fff;padding-top:30px;" href="logout.php"><b>LOGOUT</b></a>
  </nav> 
        </div>
          <div class="col-md-3">
            <nav class="nav justify-content-end">
                <a class="nav-link text-size-link-white" style="padding-top:30px;" href="manage-order.php">MANAGE ORDER <i class="far fa-list-alt"></i></a>
          
            </nav>
        </div>
    </div>    
    </div>
</header>    
       
   <?php
   }   
   
#----------------------------------FOOTER---------------------------------------

 public function footer()
   {
     
     ?>

<footer style="margin-top: 150px;border-top: 1px solid lightgray;background-color:#000;">
  
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-md-10">
              <ul class="nav flex-column">
			  <li class="nav-item" style="margin-top: 10px;">
       <a class="nav-link disabled" href="#" style="font-size: 12px;color:#fff;">Developed By.</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-heading-footer" href="#" style="color:#fff;"><b style="color:orange;">Elias</a>
  </li>
   <li class="nav-item" style="margin-top: 10px;">
       <a class="nav-link disabled" href="#" style="font-size: 12px;color:#fff;">+91- 7011214976</a>
  </li>
 
  <li class="nav-item" style="margin-top: 10px;">
    <a class="nav-link disabled" href="#" style="color:#fff;"><b>Monday-Saturday: 9.30 a.m. - 6.30 p.m.
            Sunday: Closed</b></a>
  </li>
 
</ul> 
            </div>
          
            
            
        </div>
       
    </div>    
</footer>    
      
 <?php
}
   
   

public function sideMenuHeader(){
    ?>

<div class="filter" style="width: 100%; box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                        <div class="card-body admin-menu">
                     <p style="font-weight: bold;margin: 0;"><a href="manage.php">DASHBOARD MENU</a> <i class="fas fa-tachometer-alt"></i></p>
  </div>
    <ul class="list-group list-group-flush" style="background-color: green;;">
       <li class="list-group-item borderr admin-menu" style="border:none; ">
           <label style="font-size: 13px;font-weight: bold;"><a href="category.php">Category </a> </label>
          <span style='float:right;'>&#187;</span>
        </li>   
        <li class="list-group-item borderr admin-menu" style="border:none;">
         <label style="font-size: 13px;font-weight: bold;"><a href="categorymanage.php">Category &#187; Delete &#187; Update &#187; Show</a></label>
          <span style='float:right;'>&#187;</span>
        </li>       
      <li class="list-group-item borderr admin-menu" style="border:none;">
                <label style="font-size: 13px;font-weight: bold;"><a href="subcategory.php">Sub &#187; Category</a></label>
        <span style='float:right;'>&#187;</span>        
      </li>  
      
              <li class="list-group-item borderr admin-menu" style="border:none;">
                  <label style="font-size: 13px;font-weight: bold;"><a href="subcategorymanage.php">Sub-Category Delete &#187; Update &#187;Show </a></label>
                <span style='float:right;'>&#187;</span>
              </li> 
              
                    <li class="list-group-item borderr admin-menu" style="border:none;">
                        <label style="font-size: 13px;font-weight: bold;"><a href="manageproduct.php">Manage Product</a></label>
                <span style='float:right;'>&#187;</span>
                    </li>    
              
              <li class="list-group-item borderr admin-menu" style="border:none;">
                  <label style="font-size: 13px;font-weight: bold;"><a href="manageproductcrud.php">Product Delete &#187; Update &#187; Show </a></label>
                <span style='float:right;'>&#187;</span>
              </li>
             
              <li class="list-group-item borderr admin-menu" style="border:none;">
                  <label style="font-size: 13px;font-weight: bold;">Manage Product Rating</label>
                <span style='float:right;'>&#187;</span>
              </li>
			  <!--
              <li class="list-group-item borderr admin-menu" style="border:none;">
                  <label style="font-size: 13px;font-weight: bold;"><a href="manage-order.php">Manage Order</a></label>
                <span style='float:right;'>&#187;</span>
              </li>
             
               -->
              <li class="list-group-item borderr admin-menu" style="border:none;">
                  <label style="font-size: 13px;font-weight: bold;"><a href="customer.php">Customer Details</a></label>
                <span style='float:right;'>&#187;</span>
              </li>
             
                <li class="list-group-item borderr admin-menu" style="border:none;">
                  <label style="font-size: 13px;font-weight: bold;">Admin Roles</label>
                <span style='float:right;'>&#187;</span>
              </li>
			   <li class="list-group-item borderr admin-menu" style="border:none;">
                  <label style="font-size: 13px;font-weight: bold;"><a href="banner.php">Manage Silder Image</a></label>
                <span style='float:right;'>&#187;</span>
              </li>
			 
              <li class="list-group-item borderr admin-menu" style="border:none;">
                  <label style="font-size: 13px;font-weight: bold;"><a href="slider-manage.php">Slider Delete &#187; Update &#187; Show</a></label>
                <span style='float:right;'>&#187;</span>
              </li>
           
              
  </ul>
   </div> 
<?php

}
   
   
   
   
   
   
   
   
   
   
   
}

$hd=new header();
?>


