<?php
include 'connection.php';
session_start();
function checkalreadycomment($product_id,$customer_id){
      $response=array();
      $sql = "SELECT * FROM comment WHERE customer_id = $customer_id and product_id = $product_id";
      $row=select($sql);
      if(count($row) > 0){
            return false;
      }
      else{
        return true;
      }
  }

  function get_all_review($product_id){
    $response=array();
    $sql = "SELECT * FROM comment WHERE product_id = $product_id";
    $row=select($sql);
    if(count($row) > 0){
          return $row;
    }
    else{
      return $response;
    }
  }
function insertcomment(){
    $response=array();
    $product_id = $_POST['product_id'];
    $customer_id = $_POST['customer_id'];
    $customer_name = $_POST['customer_name'];
    $product_name = $_POST['product_name'];
    $product_rating = $_POST['product_rating'];
    $comment_message = $_POST['comment_message'];
    if(checkalreadycomment($product_id,$customer_id)){
        $sql = "insert INTO comment(product_id,customer_id,customer_name,product_name,product_rating,comment_message) values($product_id,$customer_id,'$customer_name','$product_name',$product_rating,'$comment_message')";
       $insert_id =  insert($sql);
       if($insert_id > 0 ){
        $response["message"] =  "success";
        return $response;
       }
       else{
        $response["messgae"] = "failed";
        return $response;
       }
    }  
   }

   
   function loginCheck()
   {
    $response=array();
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM customer_login WHERE mobile = '$mobile' and password = '$password'";
    $row=select($sql);
    if(count($row) > 0){
      $_SESSION["user_id"] = $row[0]["id"];
      $_SESSION["name"] = $row[0]["name"];
      $_SESSION["mobile"] = $row[0]["nobile"];
      setcookie(session_name(),session_id(),time() + 3600*24*30);
    return true;
    }
    else{
      return false;
    }
   }



   
function getOrderItemByOrderId($order_id){
  $SQL="SELECT O.ORDER_ID,O.PRODUCT_ID,O.QUANTITY,O.AMOUNT,P.PRODUCT_NAME,P.PRODUCT_DESC,P.PRODUCT_BRAND_NAME,PM.IMG1 FROM order_details as O INNER JOIN product as P ON P.ID=O.PRODUCT_ID INNER JOIN product_image as PM ON PM.PRODUCT_ID=P.ID WHERE O.ORDER_ID=$order_id";
  $order_item=select($SQL);
     if(count($order_item)>0){
         return $order_item;
     }else{return FALSE;
}
  
}


function getOrderByUserId(){
  $customer_id=$_SESSION['user_id'];
  $response=array();
  $SQL="SELECT * FROM order_user WHERE CUSTOMER_ID=$customer_id ORDER BY ID DESC";
  $all_order=select($SQL);
     if(count($all_order)>0)
     {
         return $all_order;
     }else
     {
      return $response;
}
  
}

function checkEmail($mobile){
  $sql = "SELECT * FROM customer_login WHERE mobile = '$mobile'";
  $row=select($sql);
  if(count($row) > 0){
  return true;
  }
  else{
    return false;
  }
}
function forgetPassword($mobile,$password){
  $sql = "UPDATE customer_login SET password='$password' WHERE mobile = '$mobile'";
  update($sql);
}
?>