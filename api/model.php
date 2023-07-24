<?php
include 'connection.php';
session_start();
function checkalreadycomment($product_id, $customer_id)
{
  $response = array();
  $sql = "SELECT * FROM comment WHERE customer_id = $customer_id and product_id = $product_id";
  $row = select($sql);
  if (count($row) > 0) {
    return false;
  } else {
    return true;
  }
}

function get_all_review($product_id)
{
  $response = array();
  $sql = "SELECT * FROM comment WHERE product_id = $product_id";
  $row = select($sql);
  if (count($row) > 0) {
    return $row;
  } else {
    return $response;
  }
}
function insertcomment()
{
  $response = array();
  $product_id = $_POST['product_id'];
  $customer_id = $_POST['customer_id'];
  $customer_name = $_POST['customer_name'];
  $product_name = $_POST['product_name'];
  $product_rating = $_POST['product_rating'];
  $comment_message = $_POST['comment_message'];
  if (checkalreadycomment($product_id, $customer_id)) {
    $sql = "insert INTO comment(product_id,customer_id,customer_name,product_name,product_rating,comment_message) values($product_id,$customer_id,'$customer_name','$product_name',$product_rating,'$comment_message')";
    $insert_id =  insert($sql);
    if ($insert_id > 0) {
      $response["message"] =  "success";
      return $response;
    } else {
      $response["messgae"] = "failed";
      return $response;
    }
  }
}


function loginCheck($request)
{
  $response = array();
  $mobile = $request->mobile;
  $password = $request->password;
  $sql = "SELECT * FROM customer_login WHERE mobile = '$mobile' and password = '$password'";
  $row = select($sql);
  if (count($row) > 0) {
    $response["status"] = "success";
    $response["message"] = "Login Successfully";
    $response["user_id"] = $row[0]["id"];
    $response["name"] = $row[0]["name"];
    $response["mobile"] = $row[0]["mobile"];
    setcookie(session_name(), session_id(), time() + 3600 * 24 * 30);
    return json_encode($response);
  } else {
    $response["status"] = "failed";
    $response["message"] = "Incorrect username and Password";
    return json_encode($response);
  }
}




function signup($request)
{
  $response = array();
  $name = $request->name;
  $mobile = $request->mobile;
  $password = $request->password;
  $sql = "insert into customer_login(name,mobile,password) values('$name','$mobile','$password')";
  $insert_id = insert($sql);
  if ($insert_id > 0) {
    $response["status"] = "success";
    $response["message"] = "Signup Successfully";
    $response["user_id"] = $insert_id;
    $response["name"] = $name;
    $response["mobile"] = $mobile;
    setcookie(session_name(), session_id(), time() + 3600 * 24 * 30);
    return json_encode($response);
  } else {
    $response["status"] = "failed";
    $response["message"] = "invalid details";
    return json_encode($response);
  }
}
function update_password($request)
{
  $response = array();
  $id = $request->id;
  $old_pass = $request->old_pass;
  $new_pass = $request->new_pass;
  $sql = "UPDATE customer_login SET password = '$new_pass' WHERE id = $id AND password='$old_pass'";
  if (update($sql)) {
    $response["status"] = "success";
    $response["message"] = "Password Change Successfully";
    $response["user_id"] = $id;
    return json_encode($response);
  } else {
    $response["status"] = "failed";
    $response["message"] = "invalid old passowrd";
    return json_encode($response);
  }
}



function getOrderItemByOrderId($order_id)
{
  $SQL = "SELECT O.ORDER_ID,O.PRODUCT_ID,O.QUANTITY,O.AMOUNT,P.PRODUCT_NAME,P.PRODUCT_DESC,P.PRODUCT_BRAND_NAME,PM.IMG1 FROM order_details as O INNER JOIN product as P ON P.ID=O.PRODUCT_ID INNER JOIN product_image as PM ON PM.PRODUCT_ID=P.ID WHERE O.ORDER_ID=$order_id";
  $order_item = select($SQL);
  if (count($order_item) > 0) {
    return $order_item;
  } else {
    return FALSE;
  }
}


function getOrderByUserId()
{
  $customer_id = $_SESSION['user_id'];
  $response = array();
  $SQL = "SELECT * FROM order_user WHERE CUSTOMER_ID=$customer_id ORDER BY ID DESC";
  $all_order = select($SQL);
  if (count($all_order) > 0) {
    return $all_order;
  } else {
    return $response;
  }
}

function checkEmail($mobile)
{
  $sql = "SELECT * FROM customer_login WHERE mobile = '$mobile'";
  $row = select($sql);
  if (count($row) > 0) {
    return true;
  } else {
    return false;
  }
}
function forgetPassword($mobile, $password)
{
  $sql = "UPDATE customer_login SET password='$password' WHERE mobile = '$mobile'";
  update($sql);
}


function getProduct()
{
  global $db;
  $arr = array();
  $limit = 10;
  $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
  $total  = select("SELECT count(*) as total FROM product");
  $total_ele = $total[0]['total'];
  $total_page = ceil($total_ele / $limit);
  if ($current_page > $total_page) {
    $current_page = 1;
  }
  $offset = ($current_page - 1) * $limit;

  $product = select("SELECT P.*,PIM.PRODUCT_OFFER,PIM.RATING,PIM.P_MODE,PIM.IMG1,PIM.IMG2,PIM.IMG3,PIM.IMG4,PIM.IMG5 FROM product as P INNER JOIN product_image as PIM ON PIM.PRODUCT_ID=P.ID  LIMIT $limit OFFSET $offset");
  if (count($product) > 0) {
    $arr['data'] = $product;
    $arr['total_page'] = $total_page;
    return json_encode($arr);
  } else {
    return FALSE;
  }
}


function getSingleProduct()
{
  global $db;
  $id = $_GET['p_id'];
  $product = select("SELECT P.*,PIM.PRODUCT_OFFER,PIM.RATING,PIM.P_MODE,PIM.IMG1,PIM.IMG2,PIM.IMG3,PIM.IMG4,PIM.IMG5 FROM product as P INNER JOIN product_image as PIM ON PIM.PRODUCT_ID=P.ID WHERE P.ID = $id");
  if (count($product) > 0) {
    return json_encode($product);
  } else {
    return FALSE;
  }
}


function getCategory()
{
  $category = select("SELECT * FROM category");
  if (count($category) > 0) {
    return json_encode($category);
  } else {
    return FALSE;
  }
}

function deleteProduct($id)
{
  $arr = array("status" => "success", "message" => "Delete Successfully");
  $command = "DELETE FROM product WHERE ID=$id";
  delete($command);
  $command = "DELETE FROM product_image WHERE PRODUCT_ID=$id";
  delete($command);
  return json_encode($arr);
}



function addCart($request)
{
  $response = array();
  $p_id = $request->p_id;
  $qty = $request->qty;
  $p_title = $request->p_title;
  $amount = $request->amount;
  $p_name = $request->p_name;
  $c_id = $request->c_id;
  $p_image = $request->p_image;
  $sql = "INSERT INTO cart(PRODUCT_ID,QUANTITY,P_TITLE,AMOUNT,P_NAME,CUSTOMER_ID,P_IMAGE) VALUES('$p_id','$qty','$p_title','$amount','$p_name',$c_id,'$p_image')";
  $insert_id = insert($sql);
  if ($insert_id > 0) {
    $response["status"] = "success";
    $response["message"] = "Add Cart Successfully";
    return json_encode($response);
  } else {
    $response["status"] = "failed";
    $response["message"] = "invalid details";
    return json_encode($response);
  }
}


function deleteCart($p_id)
{
  $arr = array("status" => "success", "message" => "Delete Successfully");
  $sql = "DELETE FROM cart WHERE PRODUCT_ID=$p_id";
  delete($sql);
  return json_encode($arr);
}

function getAllCart($id)
{
  $response = array();
  $category = select("SELECT * FROM cart WHERE CUSTOMER_ID=$id");
  if (count($category) > 0) {
    return json_encode($category);
  } else {
    return json_encode($response);
  }
}

function updateCart($request)
{
  $response = array();
  $quantity = $request->qty;
  $product_id = $request->product_id;
  $user_id = $request->user_id;
  $sql = "UPDATE cart SET QUANTITY=$quantity WHERE PRODUCT_ID=$product_id AND CUSTOMER_ID=$user_id";
  if (update($sql)) {
    $response["status"] = "success";
    $response["message"] = "Update Cart Successfully";
    return json_encode($response);
  } else {
    $response["status"] = "failed";
    $response["message"] = "invalid old passowrd";
    return json_encode($response);
  }
}


function about()
{
  $arr = array();
  $arr['content'] = "dsfgfdu duhged  frhiurhfui rhfuohrg ohrguohrtgou htugoh utgh utghutjg hjuhgedh egd";
  return json_encode($arr);
}
function checkout($request)
{
  $response = array();
  $name = $request->name;
  $cus_id = $request->cus_id;
  $email = $request->email;
  $mobile = $request->mobile;
  $street = $request->street;
  $city = $request->city;
  $district = $request->district;
  $state = $request->state;
  $code = $request->code;
  $country = $request->country;
  $payment_mode = "COD";
  $sql = "insert into order_info(name,email,mobile,street,city,district,state,code,country,cus_id,payment_mode) values('$name','$email','$mobile','$street','$city','$district','$state','$code','$country',$cus_id,'$payment_mode')";
  $insert_id = insert($sql);
  if ($insert_id > 0) {

    $productList = select("select * from cart WHERE CUSTOMER_ID = $cus_id");
    delete("delete from cart WHERE CUSTOMER_ID = $cus_id");
    foreach ($productList as $value) {
      // $order_id = "OID".date('Ymdhis');
      $pid = $value['PRODUCT_ID'];
      $qty = $value['QUANTITY'];
      $amount = $value['AMOUNT'];
      insert("insert into order_details(ORDER_ID,PRODUCT_ID,QUANTITY,AMOUNT) values($insert_id,$pid,$qty,$amount)");
    }


    $response["status"] = "success";
    $response['product'] = $productList;
    $response["message"] = "Order Placed Successfully";
    $response["user_id"] = $insert_id;
    $response["name"] = $name;
    $response["mobile"] = $mobile;
    return json_encode($response);
  } else {
    $response["status"] = "failed";
    $response["message"] = "invalid details";
    return json_encode($response);
  }
}



function addEmployee($request)
{
  $response = array();
  $Name = $request->Name;
  $Email = $request->Email;
  $Mobile = $request->Mobile;
  $Address = $request->Address;
  $State = $request->State;
  $Country = $request->Country;
  $Nationality = $request->Nationality;
  $Occupation = $request->Occupation;
  $Username = $request->Username;
  $Password = $request->Password;
  $sql = "insert into crud (Name,Email,Mobile,Address,State,Country,Nationality,Occupation,Username,Password) values('$Name','$Email','$Mobile','$Address','$State','$Country','$Nationality','$Occupation','$Username','$Password')";
  insert($sql);
  $response["status"] = "success";
  $response["message"] = "add Employee Successfully";
  return json_encode($response);
}


function getEmployee()
{
  $response = array();
  $emp = select("SELECT * FROM crud");
  if (count($emp) > 0) {
    return json_encode($emp);
  } else {
    return json_encode($response);
  }
}


function getSingleEmployee()
{
  $id = isset($_GET['id']) ? $_GET["id"] : "2";
  $response = array();
  $emp = select("SELECT * FROM crud Where Id=$id");
  if (count($emp) > 0) {
    return json_encode($emp);
  } else {
    return json_encode($response);
  }
}

function updateEmployee($request)
{
  $response = array();
  $id = $request->id;
  $Name = $request->Name;
  $Email = $request->Email;
  $Mobile = $request->Mobile;
  $Address = $request->Address;
  $State = $request->State;
  $Country = $request->Country;
  $Nationality = $request->Nationality;
  $Occupation = $request->Occupation;
  $Username = $request->Username;
  $Password = $request->Password;
  $sql = "update  crud set Name = '$Name', Email = '$Email', Mobile = '$Mobile', Address = '$Address', State = '$State', Country = '$Country', Nationality = '$Nationality', Occupation = '$Occupation', Username = '$Username', Password = '$Password' where Id = $id";
  update($sql);
  $response["status"] = "success";
  $response["message"] = "update Employee Successfully";
  return json_encode($response);

  //   $sql = "UPDATE crud SET mobile='$mobile',Name='$Name' WHERE Id = '$id'";
  //   update($sql);
}
function deleteEmployee()
{
  $response = array();
  $id = $_GET['id'];
  delete("delete from crud where Id=$id");
  return json_encode($response);
}
