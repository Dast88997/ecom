<?php include 'model-api.php';
session_start();
?>
<?php
if(isset($_POST['submit']))
{
	$c_name=isset($_POST['name'])?$_POST['name']:'';
	$p_mode=isset($_POST['p_mode'])?$_POST['p_mode']:'';
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
	$transaction_id="ORD".date("Ymdhis");
	
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

<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Encode+Sans+Condensed:wght@300&family=Georama:wght@200&family=Oranienbaum&family=Smooch+Sans:wght@300&family=Yanone+Kaffeesatz:wght@300&display=swap"
        rel="stylesheet">
</head>

<style>
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

#navbar {
    background-color: #333;
    position: fixed;
    top: -4px;
    width: 100%;
    display: block;
    transition: top 0.3s;
}

#navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 13px;
    text-decoration: none;
    font-size: 17px;
}

#navbar a:hover {
    background-color: #ddd;
    color: black;
}
</style>

<style>
.popup {
    width: 33.33%;
    height: auto;
    padding: 20px;
    position: absolute;
    background-color: #ddd;
    z-index: 2222;

    border-radius: 5px;
    box-shadow: 0px 1px 1px #ddd;
    border-radius: 5px;
    padding-bottom: 40px;
    top: 10%;
    left: 30%;
    display: none;
    animation-name: m;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;

}

.popup input {
    width: 100%;
    margin-top: 30px;
    padding: 10px;
}

@keyframes m {
    from {
        top: 10%;
    }

    to {
        top: 10%;
    }
}

td {
    padding: 10px;
}


ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #fff;
}

ul.breadcrumb li {
    display: inline;
    font-size: 18px;
}

ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}

ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
}

ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
}

.inr-sign::before {
    content: "\20B9";
}
</style>



<body>


    <?php include 'header.php';?>

    <div id="navbar" class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Emmanuel
                        International
                        Pvt. Ltd</span></a>
                </div>
                <div class="col-md-9">
                    <div id="Sign In" align="right">
                        <a href="Tel:+91 78380 18996"><i class="fa fa-phone"
                                style="font-size:20px;color:white"></i>&nbsp <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709
                            </span></a>
                        <a href=""><i class="fa fa-whatsapp" style="font-size:20px;color:white"></i> <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709
                            </span></a>
                        <a href="mailto:info@emmanuelinternationalpvt.com"><i class="fa fa-envelope"
                                style="font-size:20px;color:white"></i>&nbsp <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Email
                                Us:&nbsp info@emmanuelinternationalpvt.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


    <div class="sect" style="background-color:#1f2e2e">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav justify-content-left">
                        <?php
$SQL="SELECT * FROM category WHERE CAT_STATUS=1";
$ROW=$conn->query($SQL);

if($ROW->num_rows>0)
{
	while($data=$ROW->fetch_assoc())
	{
		?>
                        <li class="nav-item dropdown">
                            <a class="nav-link active menu dropdown-toggle" data-toggle="dropdown" href="#"><span
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:white;"><?php echo $data['CAT_NAME'];?></span></a>

                            </a>
                            <?php
  $id=$data['ID'];
  $SQL="SELECT * FROM subcategory WHERE CAT_ID=$id AND SUB_CAT_STATUS=1";
$SROW=$conn->query($SQL);

if($SROW->num_rows>0)
{
	print_r(" <div class='dropdown-menu'>");
	while($sdata=$SROW->fetch_assoc())
	{
		?>
                            <a class="dropdown-item"
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:#000000;"
                                href="product_view.php?s_id=<?=$sdata['ID']?>"><?php echo $sdata['SUB_CAT_NAME'];?></a>

                            <?php
    }
 print_r("</div>");
}
  ?>


                        </li>
                        <?php
	}
}
?>

                </div>

                <div class="col-md-4">
                <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item">

                            <?php
                            if(isset($_SESSION["user_id"])){
                                ?>
                            <p
                                style="color:white;font-size:20px;text-align:right;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                <?= $_SESSION["name"]?>

                                <a href="index.php?type=logout"
                                    style="text-decoration:none;color:#fff;margin-left:30px;"><span>Logout</span></a>

                            </p>
                            <?php
                            }
                            else{
                                ?>
                            <a href="#" onclick="show()" style="text-decoration:none">
                                <p
                                    style="color:white;font-size:20px;text-align:right;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Customer
                                    Login
                                </p>
                                <?php

                            }
                            ?>



                            </a>
                        </li> &nbsp &nbsp &nbsp
                        <li class="nav-item">

                        <?php
$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
$SQL="SELECT * FROM cart WHERE CUSTOMER_ID=$user_id";
$row_cart=$conn->query($SQL);
@$cart_items = 0;
if($row_cart->num_rows>0){
  while($data = $row_cart->fetch_assoc()){
    $cart_items+=$data["QUANTITY"];
  }
}
?>
                            <a href="cart.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    <i class="fas fa-shopping-cart"> </i>
                                    <?=@$cart_items?>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div style="width:100%;height:30px;"></div>

    <div class="flips">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <?php
$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
$SQL="SELECT * FROM cart WHERE CUSTOMER_ID=$user_id";
$row_cart=$conn->query($SQL);
$total_amount=0;
$qty = 0;
if($row_cart->num_rows>0)
{
	while($cart_data=$row_cart->fetch_assoc()){
		$total_amount+=$cart_data['AMOUNT']*$cart_data["QUANTITY"];
	}
}
?>


                    <div id="Sign In" align="center">
                        <h1 style="font-family: 'Yanone Kaffeesatz', sans-serif;"> Payment Mode: <span id="mode">Cash On
                                Delivery</span></h1>
                        <div style="border: 1px dashed green; background-color:#ffffff;margin:auto;padding:5px;">
                            <h1 style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;text-align:center;">
                                Customer Delivery Address: </h1>
                            <form action="" id="frm" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputSurname"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">Fullnames</label>
                                        <input type="text" name="name" class="form-control" id="inputSurname"
                                            placeholder="Fullnames"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:left;">
                                    </div>

                                    <input type="hidden" name="total_amount" value="<?=$total_amount;?>">
                                    <input type="hidden" name="customer_id" value="1">
                                    <input type="hidden" id="vmode" name="p_mode" value="cod">

                                    <div class="form-group col-md-8">
                                        <label for="inputStreet"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">Flat
                                            No. / Street:</label>
                                        <input type="text" name="street" class="form-control" id="inputStreet"
                                            placeholder="Street"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputCity"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">City</label>
                                        <input type="text" name="city" class="form-control" id="inputCity"
                                            placeholder="City"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputDistrict"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">District</label>
                                        <input type="text" name="district" class="form-control" id="inputDistrict"
                                            placeholder="District"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputZipcode"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">Zip
                                            Code</label>
                                        <input type="text" name="code" class="form-control" id="inputZipcode"
                                            placeholder="Zip Code"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputState"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">State</label>
                                        <input type="text" name="state" class="form-control" id="inputState"
                                            placeholder="State"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">Country</label>
                                        <input type="text" name="country" class="form-control" id="inputState"
                                            placeholder="Country"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">Email
                                            Address</label>
                                        <input type="text" name="email" class="form-control" id="inputState"
                                            placeholder="Email Address"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputMobile"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;text-align:center;">Mobile
                                            Number</label>
                                        <input type="text" name="mobile" class="form-control" id="inputOccupation"
                                            placeholder="Mobile Number"
                                            style="font-family: 'Encode Sans Condensed', sans-serif;font-size:20px;">
                                    </div>


                                </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <h1 style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;margin-top:55px;"> <b>Payment
                            Mode:</b> </h1>
                    <div
                        style="width:300px;height:65px;border:1px solid #f5f5f0;background-color:#f5f5f0;border-radius:10px;margin-top:15px;">
                        &nbsp <input type="radio" class="gender" name="gender" value="Net Banking"
                            style="margin-top:15px;font-size:20px;" /><span
                            style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">&nbsp <i
                                class='fas fa-money-check' style="color:#ccccb3"></i> <b>Netbanking/Credit/Debit
                                Cards</b></span><br>
                        &nbsp <span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:15px;">We Accept Bank
                            To Bank Transfer</span>
                    </div>

                    <div
                        style="width:300px;height:65px;border:1px solid #f5f5f0;background-color:#f5f5f0;border-radius:10px;margin-top:5px;">
                        &nbsp <input type="radio" class="gender" name="gender" checked value="Cash On Delivery"
                            style="margin-top:15px;font-size:20px;" /><span
                            style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">&nbsp <i
                                class='fas fa-truck' style="color:#ccccb3"></i> <b>Pay On Delivery</b></span><br>
                        &nbsp <span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:15px;">We accept cash
                            on delivery.</span>
                    </div>
                    <div class="submit" style="margin-top:9px;">
                        <input name="submit" value="Procceed To Pay (₦ <?=$total_amount;?>)" 
                            onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$SUBMIT", "", true, "chk", "", false, false))'
                            id="ctl00_ContentPlaceHolder1=SUBMIT" class="btn btn-block bg-default btn-flat "
                            style="width:250px; color:#fff; font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px; margin-bottom:30px; background:#D4090C; "
                            type="submit">
                    </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div><br><br>
    <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
    }


    document.querySelectorAll(".gender").forEach((v) => {
        v.addEventListener("click", () => {
            document.querySelector("#mode").innerHTML = v.value;
            document.querySelector("#vmode").innerHTML = v.value;
            let frm = document.querySelector("#frm");
            if (v.value == "Net Banking") {
                frm.action = "payment.php";
            } else {
                frm.action = "";
            }
        })
    })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>