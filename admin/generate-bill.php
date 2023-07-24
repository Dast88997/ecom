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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
    td {
        padding: 0px;
    }

    tr {
        padding: 0px;
        margin: 0px;
    }
    </style>
</head>

<body>
    <table class="table table-borderless" style="width:60%;margin:auto;position:relative;top:100px;">

        <tr style="padding-bottom:0px;">
            <td style="border-bottom:1px solid #000;text-align:left;font-weight:bold;">Emmanuel International Private
                Limited
            </td>
            <td style="border-bottom:1px solid #000;"></td>
            <td style="border-bottom:1px solid #000;text-align:right;font-size:15px;">info@emmanuelinternationalpvt.com
            </td>

        </tr>

        <tr>
            <td style="text-align:left;font-size:12px;">
                <p><b><?php print_r($address);?></b>


                </p>

            </td>
            <td></td>
            <td style="text-align:right;font-size:13px;">
                <button style="margin-top:50px;"><b>Emmanuel International Pvt Ltd</b></button>
            </td>

        </tr>



        <tr style="padding-bottom:0px;">
            <td style="border-bottom:1px solid #000;text-align:left;font-weight:bold;font-size:13px;">Order #
                <?php print_r($order[0]['TRANSACTION_ID']);?></td>
            <td style="border-bottom:1px solid #000;"></td>
            <td style="border-bottom:1px solid #000;text-align:right;font-size:13px;">Placed on
                <?php print_r($order[0]['DATE']." ".$order[0]['AM_PM']);?></td>

        </tr>

        <tr style="padding-bottom:0px;">
            <td style="border-bottom:1px dashed #000;text-align:left;font-weight:bold;font-size:13px;">Items Name</td>
            <td style="border-bottom:1px dashed #000;text-align:right;font-size:13px;font-weight:bold;">Quantity</td>
            <td style="border-bottom:1px dashed #000;text-align:right;font-size:13px;font-weight:bold;">Amount</td>
        </tr>


        <?php
	for($i=0;$i<count($order_item);$i++){
		?>
        <tr>
            <td style="border-bottom:1px dashed #000;text-align:left;font-size:13px;font-weight:bold;">
                <?php print_r($order_item[$i]['PRODUCT_NAME']);?></td>
            <td style="border-bottom:1px dashed #000;text-align:right;font-size:13px;">
                <?=$order_item[$i]['TOTAL'];?></td>
            <td style="border-bottom:1px dashed #000;text-align:right;font-size:13px;">
                Customer Will Be Notified About The Amount</td>
        </tr>
        <?php	
	}
	?>



        <tr>
            <td style="text-align:left;font-size:13px;">Payment Mode : <?php print_r($order[0]['PAYMENT_MODE']);?></td>
            <td style="text-align:right;font-size:13px;">
                <p>Subtotal</p>
                                <p>
                    <b>Order Total</b>
                </p>

            </td>
            <td style="text-align:right;font-size:13px;">

                <p>
                Customer Will Be Notified About The Amount
	
	
	
                </p>



                <p>
                    <b>Customer Will Be Notified About The Amount</b>
                </p>

            </td>
        </tr>


        <tr>
            <td style="border-bottom:1px solid #000;text-align:left;" colspan="2">
                <h3>Thank You!</h3>
                <span>We appreciate your business<span>
            </td>

            <td style="border-bottom:1px solid #000;text-align:right;"></td>
        </tr>

        <tr>
            <td style="text-align:center;" colspan="3">
                <p style="margin:0;font-size:13px;">if you need assistance with your order,please email us at
                <p>
                    <span style="font-size:13px;"><b>info@emmanuelinternationalpvt.com</b></span>
            </td>
        </tr>
    </table>
    <script>
    window.print();
    </script>
</body>

</html>