<?php include 'connection.php';?>
<?php
if(isset($_POST['online']))
{
	$c_name=isset($_POST['name'])?$_POST['name']:'';
	$p_mode="online";
	$c_id=isset($_POST['customer_id'])?$_POST['customer_id']:'';
	$total_am=isset($_POST['total_amount'])?$_POST['total_amount']:'';
	$city=isset($_POST['city'])?$_POST['city']:'';
	$code=isset($_POST['code'])?$_POST['code']:'';
	$state=isset($_POST['state'])?$_POST['state']:'';
	$mobile=isset($_POST['mobile'])?$_POST['mobile']:'';
	$street=isset($_POST['street'])?$_POST['street']:'';
	$district=isset($_POST['district'])?$_POST['district']:'';
    $email=isset($_POST['email'])?$_POST['email']:'';
    $country=isset($_POST['country'])?$_POST['country']:'';
	$order_confirm=1;
	$date=date('Y-m-d h:m:s');
	$note="URG";
	$am_pm=date('a');
	$address=$c_name.",".$street.",".$city.",".$district.",".$code.",".$state.",".$country.",".$mobile.",".$email;
	$transaction_id=isset($_POST['transaction_id'])?$_POST['transaction_id']:'';
	
	$SQL="INSERT INTO order_user(TRANSACTION_ID,CUSTOMER_ID,PAYMENT_MODE,DELIVERY_ADD,TOTAL_AMOUNT,DATE,ORDER_CONFIRM,AM_PM,NOTE,EMAIL)
	VALUES('$transaction_id' ,$c_id, '$p_mode', '$address', '$total_am', '$date', $order_confirm, '$am_pm', '$note','$email')";
    if($conn->query($SQL))
	{
		$id=$conn->insert_id;
		
		$SQL="SELECT * FROM cart";
		$row=$conn->query($SQL);
		if($row->num_rows>0)
		{
			while($data=$row->fetch_assoc())
			{
				$product_id=$data['PRODUCT_ID'];
				$amount=$data['AMOUNT'];
				$quantity=$data['QUANTITY'];
				
			$SQL="INSERT INTO order_details(ORDER_ID,PRODUCT_ID,QUANTITY,AMOUNT)
			 VALUES($id,$product_id,$quantity,$amount)";
if($conn->query($SQL)){}			 
			}
			header('Location:complete.php?order_id='.$transaction_id.'&address='.$address);
		}
	}

}

?>
