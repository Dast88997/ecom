<?php 
session_start();
session_name("admin");
include './connection.php';
include './header.php';
?>
<?php
class Model
{
    
 public function __construct() {
     date_default_timezone_set("Asia/Kolkata");  
 }
 
 public function getCurrentDate(){
     return date('Y-m-d h:i:s');
 }

   
 public function loginCheck()
  {
     global $db;
      $email=strip_tags(isset($_POST['email'])?$_POST['email']:'');
      $password=strip_tags(isset($_POST['password'])?$_POST['password']:'');
      $validate= $db->select("select ID,NAME,EMAIL from admin_user WHERE EMAIL='$email' AND PASSWORD='$password'");
     
    
      if($validate==0)
     {
          return -1;
     }else
         {$_SESSION['id']=$validate[0]['ID']; 
          $_SESSION['name']=$validate[0]['NAME'];
           $_SESSION['email']=$validate[0]['EMAIL'];
           $_SESSION['login_auth']=1;
         return 1;}
      
      
  }
  
   public function getAddress($user_id)
  {   global $db;
      $response=array();
      
      $address= $db->select("SELECT * FROM address WHERE USER_ID=$user_id");
      if(count($address)>0){
          return $address;
      }else{
       $response["status_report"]=0;
       $response["message"]="invalid"; 
       return $response;
      }
     
  }
  
  public function validateHeader()
  {
      global $hd;
      if(isset($_SESSION['name']) && isset($_SESSION['email']))
      {
          $hd->topLoginHeader();
      }else{ $hd->topHeader();}
  }


  
  public function register()
  {  global $db;
      $email=isset($_POST['email'])?$_POST['email']:'';
      $password=md5(isset($_POST['password'])?$_POST['password']:'');
      $phone=isset($_POST['phone'])?$_POST['phone']:'';
      $name=isset($_POST['name'])?$_POST['name']:'';
      $reg_date=$this->getCurrentDate();
      $profile_image='';
     
      $command="INSERT INTO register(NAME,EMAIL,PHONE,PASSWORD,REG_DATE,PROFILE_IMAGE) VALUES('$name','$email','$phone','$password','$reg_date','$profile_image')";
      $id=$db->insert($command);
      if($id>0){
          $_SESSION['id']=$id;
          $_SESSION['name']=$name;
           $_SESSION['email']=$email;
            $_SESSION['phone']=$phone;
           $_SESSION['login_auth']=1;
           return TRUE;
      }else 
          return FALSE;
      
  }
  /*---------------------------------------CATEGOARY------------------------------------*/
   public function getCategory()
  {
     global $db;
      $category= $db->select("SELECT * FROM category WHERE CAT_STATUS=1 ORDER BY CAT_NAME DESC");
      if(count($category)>0){
          return $category;
      }else{return FALSE;}
     
  }
   public function getManageCategory()
  {
     global $db;
      $category= $db->select("SELECT * FROM category");
      if(count($category)>0){
          return $category;
      }else{return FALSE;}
     
  }
  
   public function registerCategory()
  {  global $db;
      $cat_name=isset($_POST['cat_name'])?$_POST['cat_name']:'';
      $cat_title=isset($_POST['cat_title'])?$_POST['cat_title']:'';
      $reg_date=$this->getCurrentDate();
     $command="INSERT INTO category(CAT_NAME,CAT_TITLE,DATE) VALUES('$cat_name','$cat_title','$reg_date')";
   if($db->insert($command))
         return TRUE;
     else 
          return FALSE;
     
  }
   public function updateCategory()
 {   global $db;
     $id= isset($_GET['id'])?$_GET['id']:'';
     $up_status= isset($_GET['up_cat_status'])?$_GET['up_cat_status']:'';
     $up_cat_title= isset($_GET['up_cat_title'])?$_GET['up_cat_title']:'';
     $up_cat_name= isset($_GET['up_cat_name'])?$_GET['up_cat_name']:'';
     $command="UPDATE category SET CAT_NAME='$up_cat_name',CAT_TITLE='$up_cat_title',CAT_STATUS=$up_status WHERE ID=$id";
    return $db->update($command);
 }
 
 public function deleteCategory(){
 global $db;
     $id= isset($_GET['id'])?$_GET['id']:'';
     $command="DELETE FROM category WHERE id=$id";
     return $db->delete($command);   
}
 
/*-------------------------------------------------------------------------------------*/   
 
 
 
  public function subregisterCategory()
  {  global $db;
      $cat_id=isset($_POST['cat_id'])?$_POST['cat_id']:'';
      $sub_cat_name=isset($_POST['sub_cat_name'])?$_POST['sub_cat_name']:'';
      $sub_cat_title=isset($_POST['sub_cat_title'])?$_POST['sub_cat_title']:'';
      $reg_date=$this->getCurrentDate();
     $command="INSERT INTO subcategory(CAT_ID,SUB_CAT_NAME,SUB_CAT_TITLE,SUB_REG_DATE) VALUES($cat_id,'$sub_cat_name','$sub_cat_title','$reg_date')";
     if($db->insert($command))
         return TRUE;
     else 
          return FALSE;}
          
  public function getSubManageCategory()
  {global $db;
      $cat_type=isset($_GET['cat_sub_name'])?$_GET['cat_sub_name']:'';
      if($cat_type==''){
      $category= $db->select("SELECT * FROM subcategory");
      if(count($category)>0){
          return $category;
      }else{return FALSE;}
      }else{
         $category= $db->select("SELECT * FROM subcategory WHERE CAT_ID=$cat_type");
      if(count($category)>0){
          return $category;
      }else{return FALSE;}  
      }
  }
public function deleteSubCategory(){
 global $db;
     $id= isset($_GET['id'])?$_GET['id']:'';
     $command="DELETE FROM subcategory WHERE id=$id";
     return $db->delete($command);}
  
   public function updateSubCategory()
      {   global $db;
     $id= isset($_GET['id'])?$_GET['id']:'';
     $up_status= isset($_GET['up_cat_status'])?$_GET['up_cat_status']:'';
     $up_cat_title= isset($_GET['sub_up_cat_title'])?$_GET['sub_up_cat_title']:'';
     $up_cat_name= isset($_GET['sub_up_cat_name'])?$_GET['sub_up_cat_name']:'';
     $command="UPDATE subcategory SET SUB_CAT_NAME='$up_cat_name',SUB_CAT_TITLE='$up_cat_title',SUB_CAT_STATUS=$up_status WHERE ID=$id";
    return $db->update($command);
      } 
  
  
  
  
/*-------------------------------------------------ACCOUNT INFO------------------------------------------------------*/
  public function logout()
  {session_destroy();}
  
  
 public function callfooter()
 { global $hd;
     $hd->footer();}
 
 public function changePassword()
 {   global $db;
     $old_pass= md5(isset($_GET['old_pass'])?$_GET['old_pass']:'');
     $new_pass= md5(isset($_GET['new_pass'])?$_GET['new_pass']:'');
     $email=$_SESSION['email'];
     $command="UPDATE REGISTER SET PASSWORD='$new_pass' WHERE PASSWORD='$old_pass' AND EMAIL='$email'";
    return $db->update($command);
 }

 /*------------------------------------------PRODUCT MODULE--------------------------------------------------------------------*/
   public function getProduct()
        {global $db;
      $product= $db->select("SELECT * FROM product");
      if(count($product)>0){
          return $product;
      }else{return FALSE;}}
      
       public function getProductByID()
        {global $db;
         $id= strip_tags(isset($_GET['id'])?$_GET['id']:'');
      $product= $db->select("SELECT P.*,PIM.PRODUCT_OFFER,PIM.RATING,PIM.P_MODE,PIM.IMG1,PIM.IMG2,PIM.IMG3,PIM.IMG4,PIM.IMG5 FROM product as P INNER JOIN product_image as PIM ON PIM.PRODUCT_ID=P.ID WHERE P.ID=$id");
      if(count($product)>0){
          return $product;
      }else{return FALSE;}}

      public function getProductByCatID($cat_id)
      {global $db;
    $product= $db->select("SELECT P.*,PIM.PRODUCT_OFFER,PIM.RATING,PIM.P_MODE,PIM.IMG1,PIM.IMG2,PIM.IMG3,PIM.IMG4,PIM.IMG5 FROM product as P INNER JOIN product_image as PIM ON PIM.PRODUCT_ID=P.ID WHERE P.CAT_ID=$cat_id");
    if(count($product)>0){
        return $product;
    }else{return FALSE;}}

    public function getProductBySubCatID($sub_cat_id)
    {global $db;
  $product= $db->select("SELECT P.*,PIM.PRODUCT_OFFER,PIM.RATING,PIM.P_MODE,PIM.IMG1,PIM.IMG2,PIM.IMG3,PIM.IMG4,PIM.IMG5 FROM product as P INNER JOIN product_image as PIM ON PIM.PRODUCT_ID=P.ID WHERE P.SUB_CAT_ID=$sub_cat_id");
  if(count($product)>0){
      return $product;
  }else{return FALSE;}}
      
public function deleteProduct(){
       global $db;
     $id= isset($_GET['id'])?$_GET['id']:'';
     $command="DELETE FROM product WHERE ID=$id";
     $db->delete($command);   
     $command="DELETE FROM product_image WHERE PRODUCT_ID=$id";
      $db->delete($command);  
}
public function addProduct(){
    global $db;
    $error=0;
    $default_image='blank.png';
    $status=1;
    $time=$this->getCurrentDate();
    $cat_id=strip_tags(isset($_POST['cat_id'])?$_POST['cat_id']:'') ;
    $sub_cat_id=strip_tags(isset($_POST['sub_cat_id'])?$_POST['sub_cat_id']:'') ;
    $p_name=strip_tags(isset($_POST['p_name'])?$_POST['p_name']:'') ;
    $p_title=strip_tags(isset($_POST['p_title'])?$_POST['p_title']:'') ;
    $p_desc=strip_tags(isset($_POST['p_desc'])?$_POST['p_desc']:'') ;
    $p_brand=strip_tags(isset($_POST['p_brand'])?$_POST['p_brand']:'') ;
    $p_price=strip_tags(isset($_POST['p_price'])?$_POST['p_price']:'') ;
    $p_unit=strip_tags(isset($_POST['p_unit'])?$_POST['p_unit']:'') ;
    $p_quantity=strip_tags(isset($_POST['p_quantity'])?$_POST['p_quantity']:'') ;
    $p_offer=strip_tags(isset($_POST['p_offer'])?$_POST['p_offer']:'') ;
    $p_rating=strip_tags(isset($_POST['p_rating'])?$_POST['p_rating']:'') ;
    $p_pmode=strip_tags(isset($_POST['p_pmode'])?$_POST['p_pmode']:'') ;
   
    $img1= isset($_FILES['p_file1']['name'])?$_FILES['p_file1']['name']:'';
    $img2= isset($_FILES['p_file2']['name'])?$_FILES['p_file2']['name']:'';
    $img3= isset($_FILES['p_file3']['name'])?$_FILES['p_file3']['name']:'';
    $img4= isset($_FILES['p_file4']['name'])?$_FILES['p_file4']['name']:'';
    $img5= isset($_FILES['p_file5']['name'])?$_FILES['p_file5']['name']:'';
    
    if($img1!='')
        { $ext1= strtolower(pathinfo($img1,PATHINFO_EXTENSION));
        if($this->checkExtension($ext1)){
        $imagename1="IMG1".date('Ymdhms').'.'.$ext1;}
        else{
        $error=1;}
        
        }
        else{$imagename1=$default_image;}
        
    if($img2!='')
        { $ext2= strtolower(pathinfo($img2,PATHINFO_EXTENSION));
        if($this->checkExtension($ext2)){
        $imagename2="IMG2".date('Ymdhms').'.'.$ext2;}
        else
            $error=1;
        }
        else{$imagename2=$default_image;}

    if($img3!='')
        { $ext3= strtolower(pathinfo($img3,PATHINFO_EXTENSION));
        if($this->checkExtension($ext3))
        $imagename3="IMG3".date('Ymdhms').'.'.$ext3;
        else
            $error=1;
        }
        else{$imagename3=$default_image;}
       
    if($img4!=''){ 
        $ext4= strtolower(pathinfo($img4,PATHINFO_EXTENSION));
        if($this->checkExtension($ext4))
        $imagename4="IMG4".date('Ymdhms').'.'.$ext4;
        else
            $error=1;
      }else{$imagename4=$default_image;}
     
    if($img5!=''){
         $ext5= strtolower(pathinfo($img5,PATHINFO_EXTENSION));
        if($this->checkExtension($ext5))
        $imagename5="IMG5".date('Ymdhms').'.'.$ext5;
        else
            $error=1;
    }else{$imagename5=$default_image;}

   

    
    if($error==0){
    $SQL="INSERT INTO product(CAT_ID,SUB_CAT_ID,PRODUCT_NAME,PRODUCT_TITLE,PRODUCT_DESC,PRODUCT_BRAND_NAME,PRICE,UNIT,QUANTITY,DATE) VALUES($cat_id,$sub_cat_id,'$p_name','$p_title','$p_desc','$p_brand',$p_price,'$p_unit',$p_quantity,'$time')";
    $insert_id=$db->insert($SQL);
//     print_r($cat_id." ".$sub_cat_id." ".$p_name." ".$p_title." ".$p_desc." ".$p_brand." ".$p_price." ".$p_unit." ".$p_quantity." ".$time);
    $SQL_IMAGE="INSERT INTO product_image(PRODUCT_ID,PRODUCT_OFFER,IMG1,IMG2,IMG3,IMG4,IMG5,RATING,P_MODE)
     VALUES($insert_id,$p_offer,'$imagename1','$imagename2','$imagename3','$imagename4','$imagename5',$p_rating,'$p_pmode')";
    $db->insert($SQL_IMAGE);
  //  print_r($p_offer." ".$imagename1." ".$imagename2." ".$imagename3." ".$imagename4." ".$imagename5." ".$p_rating." ".$p_pmode);    
    if($img1!='')
        move_uploaded_file($_FILES['p_file1']['tmp_name'], '../upload_img/'.$imagename1);
    if($img2!='')
        move_uploaded_file($_FILES['p_file2']['tmp_name'], '../upload_img/'.$imagename2);
    if($img3!='')
        move_uploaded_file($_FILES['p_file3']['tmp_name'], '../upload_img/'.$imagename3);
    if($img4!='')
        move_uploaded_file($_FILES['p_file4']['tmp_name'], '../upload_img/'.$imagename4);
    if($img5!='')
        move_uploaded_file($_FILES['p_file5']['tmp_name'], '../upload_img/'.$imagename5);
    return TRUE;
 }
    else{
        return FALSE;
    }
}

public function checkExtension($ext){
   if($ext=='jpg'||$ext=='jpeg'||$ext='png') 
           return TRUE;
   else
       return FALSE;
}



public function updateProduct(){
	global $db;
	if(isset($_POST['productupdate'])){
		$p_id=strip_tags(isset($_POST['p_id'])?$_POST['p_id']:'') ;
	$cat_id=strip_tags(isset($_POST['cat_id'])?$_POST['cat_id']:'') ;
    $sub_cat_id=strip_tags(isset($_POST['sub_cat_id'])?$_POST['sub_cat_id']:'') ;
    $p_name=strip_tags(isset($_POST['p_name'])?$_POST['p_name']:'') ;
    $p_title=strip_tags(isset($_POST['p_title'])?$_POST['p_title']:'') ;
    $p_desc=strip_tags(isset($_POST['p_desc'])?$_POST['p_desc']:'') ;
    $p_brand=strip_tags(isset($_POST['p_brand'])?$_POST['p_brand']:'') ;
    $p_price=strip_tags(isset($_POST['p_price'])?$_POST['p_price']:'') ;
    $p_unit=strip_tags(isset($_POST['p_unit'])?$_POST['p_unit']:'') ;
    $p_quantity=strip_tags(isset($_POST['p_quantity'])?$_POST['p_quantity']:'') ;
    $p_offer=strip_tags(isset($_POST['p_offer'])?$_POST['p_offer']:'') ;
	$p_stock=strip_tags(isset($_POST['stock'])?$_POST['stock']:'') ;
    $p_status=strip_tags(isset($_POST['p_status'])?$_POST['p_status']:'') ;
	$p_rating=strip_tags(isset($_POST['p_rating'])?$_POST['p_rating']:'') ;
	$img1=strip_tags(isset($_FILES['img1']['name'])?$_FILES['img1']['name']:'') ;

	
	$command="UPDATE product SET CAT_ID=$cat_id,SUB_CAT_ID=$sub_cat_id,PRODUCT_NAME='$p_name',PRODUCT_TITLE='$p_title',PRODUCT_DESC='$p_desc',PRODUCT_BRAND_NAME='$p_brand',PRICE=$p_price,UNIT='$p_unit',QUANTITY=$p_quantity,STATUS=$p_status,STOCK=$p_stock WHERE ID=$p_id";

	$db->update($command);
	if($img1==''){
	$command="UPDATE product_image SET PRODUCT_OFFER=$p_offer,RATING=$p_rating WHERE PRODUCT_ID=$p_id";
	}
	else{
	$ext1=strtolower(pathinfo($img1,PATHINFO_EXTENSION));
	$imgpath="IMG1".date('Ymdhms').'.'.$ext1;
	 move_uploaded_file($_FILES['img1']['tmp_name'], '../upload_img/'.$imgpath);
	$command="UPDATE product_image SET PRODUCT_OFFER=$p_offer,RATING=$p_rating,IMG1='$imgpath' WHERE PRODUCT_ID=$p_id";
	}
	$db->update($command);
	}
	}


#-------------------------------------------------------------------------------     
public function sideMenuHeader(){
    global $hd;
    $hd->sideMenuHeader();
}

public function getAllOrder(){
    global $db;
    $SQL="SELECT * FROM order_user ORDER BY ID DESC LIMIT 100 OFFSET 0";
    $all_order=$db->select($SQL);
       if(count($all_order)>0){
           return $all_order;
       }else{return FALSE;
  }
  
    }
    
    public function getOrderByOrderId($order_id){
    global $db;
    $SQL="SELECT * FROM order_user WHERE ID=$order_id ORDER BY DATE DESC";
    $all_order=$db->select($SQL);
       if(count($all_order)>0){
           return $all_order;
       }else{return FALSE;
  }
  
    }
	
	 
	 public function cancelOrder(){
		global $db; 
     $id= isset($_GET['id'])?$_GET['id']:'';
     $command="UPDATE order_user SET ORDER_CONFIRM=0 WHERE ID=$id";
      return $db->update($command);
	 }
	 
	  public function updateOrder(){
		global $db; 
     $id= isset($_GET['id'])?$_GET['id']:'';
     $command="UPDATE order_user SET ORDER_CONFIRM=2 WHERE ID=$id";
      return $db->update($command);
	 }
     
    
    public function getOrderItemByOrderId($order_id){
        global $db;
        $SQL="SELECT O.ORDER_ID,O.PRODUCT_ID,O.QUANTITY as TOTAL,O.AMOUNT,P.PRODUCT_NAME,P.PRODUCT_DESC,P.PRICE,P.PRODUCT_BRAND_NAME,PM.IMG1 FROM order_details as O INNER JOIN product as P ON P.ID=O.PRODUCT_ID INNER JOIN product_image as PM ON PM.PRODUCT_ID=P.ID WHERE O.ORDER_ID=$order_id";
        $order_item=$db->select($SQL);
           if(count($order_item)>0){
               return $order_item;
           }else{return FALSE;
      }
        
     }
     
     
public function uploadBanner(){
       global $db;  
       $file=isset($_FILES['image']['name'])?$_FILES['image']['name']:'';
       if($file!=''){
       $extension=strtolower(pathinfo($file,PATHINFO_EXTENSION));
       $image='BAN'.date('Ymdhms').".".$extension;
       move_uploaded_file($_FILES['image']['tmp_name'], '../upload_img/'.$image);
       }
       $date=$this->getCurrentDate();
       $SQL="INSERT INTO ad_banner(BANNER_IMAGE,DATE) VALUES('$image','$date')";
       return $db->insert($SQL);

     }

public function getAllBanner(){
        global $db;
          $SQL="SELECT * FROM ad_banner";
          $banner=$db->select($SQL);
             if(count($banner)>0){
                 return $banner;
             }else{return FALSE;
        }   
       }
	   
public function deleteBanner(){
       global $db;
     $id= isset($_GET['id'])?$_GET['id']:'';
     $command="DELETE FROM ad_banner WHERE ID=$id";
     $db->delete($command);    
}	   
	

	
public function getAllCustomer(){
 global $db;
    $SQL="SELECT * FROM user_signup ORDER BY ID DESC";
    $all_customer=$db->select($SQL);
       if(count($all_customer)>0){
           return $all_customer;
       }else{return FALSE;
  }
}

public function sendSms($number,$message)
{
 $xml_data ='<?xml version="1.0"?>
<parent>
<child>
<user>DailyVeg</user>
<key>27779d0c51XX</key>
<mobile>+91'.$number.'</mobile>

<message>'.$message.'</message>
<accusage>1</accusage>
<senderid>NOTIFY</senderid>
</child>
</parent>';

$URL = "http://mobicomm.dove-sms.com//submitsms.jsp?"; 

			$ch = curl_init($URL);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
			curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);
			curl_close($ch);
print_r($output);
 
 }  	
}
$model=new Model();
?>