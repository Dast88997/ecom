<?php include './model.php';?>
<?php
$id=isset($_GET['id'])?$_GET['id']:'';
if($id!=''){
$order=$model->getOrderByOrderId($id);
//$cinfo=$model->getAddress($order[0]['CUSTOMER_ID']);
$address=$_GET['address'];
$order_item=$model->getOrderItemByOrderId($id);
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

    <div style="height:23px"></div>

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
                    <marquee>
                        <p
                            style="color:white;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;padding-top:15px;">
                            Customers Are To Ensure That Their Delivery Address Is
                            Correct For A Smooth And Easy Delivery Without Stress. Your Service Is Our Concern. Any
                            Wrong Delivery Address !!</p>
                    </marquee>
                </div>
            </div>
        </div>
    </div>


    <div style="width:100%;height:30px;"></div>

    <div class="flips">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                </div>

                <div class="col-md-1">
                </div>
                <div class="col-md-5">
                    <h1 style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;margin-top:55px;"> <b>Payment
                            Mode:</b> </h1>
                    <div
                        style="width:300px;height:65px;border:1px solid #f5f5f0;background-color:#f5f5f0;border-radius:10px;margin-top:15px;">
                        &nbsp <input type="radio" id="gender" name="gender" value="female"
                            style="margin-top:15px;font-size:20px;" /><span
                            style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">&nbsp <i
                                class='fas fa-money-check' style="color:#ccccb3"></i> <b>Netbanking</b></span><br>
                        &nbsp <span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:15px;">We Accept Bank
                            To Bank Transfer</span>
                    </div>

                    <div
                        style="width:300px;height:65px;border:1px solid #f5f5f0;background-color:#f5f5f0;border-radius:10px;margin-top:5px;">
                        &nbsp <input type="radio" id="gender" name="gender" value="female"
                            style="margin-top:15px;font-size:20px;" /><span
                            style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">&nbsp <i
                                class='fas fa-money-check' style="color:#ccccb3"></i> <b>Credit/Debit
                                Cards</b></span><br>
                        &nbsp <span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:15px;">We also accept
                            payments through Debit and Credits Cards</span>
                    </div>
                    <div
                        style="width:300px;height:65px;border:1px solid #f5f5f0;background-color:#f5f5f0;border-radius:10px;margin-top:5px;">
                        &nbsp <input type="radio" id="gender" name="gender" value="female"
                            style="margin-top:15px;font-size:20px;" /><span
                            style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">&nbsp <i
                                class='fas fa-truck' style="color:#ccccb3"></i> <b>Pay On Delivery</b></span><br>
                        &nbsp <span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:15px;">We accept cash
                            on
                            delivery.</span>
                    </div>
                    <div class="submit" style="margin-top:9px;"><input name="submit" value="Procceed"
                            onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$SUBMIT", "", true, "chk", "", false, false))'
                            id="ctl00_ContentPlaceHolder1=SUBMIT" class="btn btn-block bg-default btn-flat "
                            style="width:220px; color:#fff; font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px; margin-bottom:30px; background:#D4090C; "
                            type="submit"></div>

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
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>