<?php include 'connection.php';?>
<?php
$transaction_id="ORD".date("Ymdhis");
$total_amount = $_POST["total_amount"];
$email = $_POST["email"];

// if(isset($_POST['online']))
// {
// 	$c_name=isset($_POST['name'])?$_POST['name']:'';
// 	$p_mode="online";
// 	$c_id=isset($_POST['customer_id'])?$_POST['customer_id']:'';
// 	$total_am=isset($_POST['total_amount'])?$_POST['total_amount']:'';
// 	$city=isset($_POST['city'])?$_POST['city']:'';
// 	$code=isset($_POST['code'])?$_POST['code']:'';
// 	$state=isset($_POST['state'])?$_POST['state']:'';
// 	$mobile=isset($_POST['mobile'])?$_POST['mobile']:'';
// 	$street=isset($_POST['street'])?$_POST['street']:'';
// 	$district=isset($_POST['district'])?$_POST['district']:'';
//     $email=isset($_POST['email'])?$_POST['email']:'';
//     $country=isset($_POST['country'])?$_POST['country']:'';
// 	$order_confirm=1;
// 	$date=date('Y-m-d h:m:s');
// 	$note="URG";
// 	$am_pm=date('a');
// 	$address=$c_name.",".$street.",".$city.",".$district.",".$code.",".$state.",".$country.",".$mobile.",".$email;
// 	$transaction_id=isset($_POST['transaction_id'])?$_POST['transaction_id']:'';
	
// 	$SQL="INSERT INTO order_user(TRANSACTION_ID,CUSTOMER_ID,PAYMENT_MODE,DELIVERY_ADD,TOTAL_AMOUNT,DATE,ORDER_CONFIRM,AM_PM,NOTE,EMAIL)
// 	VALUES('$transaction_id' ,$c_id, '$p_mode', '$address', '$total_am', '$date', $order_confirm, '$am_pm', '$note','$email')";
//     if($conn->query($SQL))
// 	{
// 		$id=$conn->insert_id;
		
// 		$SQL="SELECT * FROM cart";
// 		$row=$conn->query($SQL);
// 		if($row->num_rows>0)
// 		{
// 			while($data=$row->fetch_assoc())
// 			{
// 				$product_id=$data['PRODUCT_ID'];
// 				$amount=$data['AMOUNT'];
// 				$quantity=$data['QUANTITY'];
				
// 			$SQL="INSERT INTO order_details(ORDER_ID,PRODUCT_ID,QUANTITY,AMOUNT)
// 			 VALUES($id,$product_id,$quantity,$amount)";
// if($conn->query($SQL)){}			 
// 			}
// 			header('Location:complete.php?order_id='.$transaction_id.'&address='.$address);
// 		}
// 	}

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<form id="online" action="success.php" method="post">
    <?php
    foreach($_POST as $key=>$value){
      ?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>">
	
      <?php
    }
    ?>
		<input type="hidden" name="transaction_id" value="<?=$transaction_id?>">
	 <input type="submit" id="btnsuccess" class="btn btn-lg btn-warning"  name="online" value="Please Click to Confirm  Order" style="display:none;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
  </form>


  <form id="paymentForm">
  <div class="form-submit">
    <!-- <button type="submit" onclick="payWithPaystack(event)"> Pay </button> -->
  </div>
</form>


    <script>
        var paymentForm = document.getElementById('paymentForm');
		   // var successform = document.querySelector("#online");
        paymentForm.addEventListener('submit', payWithPaystack, false);
        function payWithPaystack(event) {
           // event.preventDefault();
            var handler = PaystackPop.setup({
                key: 'pk_test_bdd555812cf795da13130403452435ff7e3af705', // Replace with your public key
                email: "<?=$email?>",
                amount: <?=$total_amount?> * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
                ref: '<?=$transaction_id?>', // Replace with a reference you generated
                callback: function(response) {
                    //this happens after the payment is completed successfully
					         // var reference = response.reference;	
                   //console.log("Payment successfully");
                  //setTimeout(function(){
                  // document.querySelector("#online").submit();
                  // },5000) 
                   document.getElementById('btnsuccess').style.display="block";
                 
                 //  document.getElementById('online').submit();
               //    document.myfrm.submit()
                   // document.querySelector("#online").submit();
                   // alert('Payment complete! Reference: ' + reference);
                  //  window.location = "http://localhost/emmanuaels/success.php?reference=" + response.reference;
                },
                onClose: function() {
                   // alert('Transaction was not completed, window closed.');
                   location.href="failure.php";
                },
            });
            handler.openIframe();
           
        }
		
    </script>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
	<script>
		payWithPaystack(event);
  
	</script>
</body>
</html>