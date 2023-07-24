<?php include './model.php';
require('./etc/tcpdf/tcpdf.php');
ob_end_clean();
?>
<?php
$id=isset($_GET['id'])?$_GET['id']:'';
if($id!=''){
$order=$model->getOrderByOrderId($id);
$cinfo=$model->getAddress($order[0]['CUSTOMER_ID']);
$order_item=$model->getOrderItemByOrderId($id);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Manage Order</title>
        <meta charset='UTF-8'>
        <title></title>
        <link rel='stylesheet' href='css/bootstrap.min.css'>   
        <link rel='stylesheet' href='css/bootstrap.css'>   
        <link rel='stylesheet' href='font/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
        
<style>
td{padding:0px;}
tr{padding:0px;margin:0px;}

</style>		
    </head>
    <body>
	<?php
	
	
	$content="<table class='table table-borderless' style='width:60%;margin:auto;position:relative;top:100px;'>
	
	<tr style='padding-bottom:0px;'>
	<td style='border-bottom:1px solid #000;text-align:left;font-weight:bold;'>Daily Fresh Palava Vegitables</td>
	<td style='border-bottom:1px solid #000;'></td>
	<td style='border-bottom:1px solid #000;text-align:right;font-size:15px;'>dailyfreshpalava.co.in</td>
	
	</tr>
	";
	$content.="<tr>
	<td style='text-align:left;font-size:12px;'>";
	$content.="<p><b>".$cinfo[0]['NAME']."</b></p>";
	$content.="<span>".$cinfo[0]['ADDRESS']." ".$cinfo[0]['LANDMARK']."<br>".$cinfo[0]['CITY']."<br>".$cinfo[0]['PIN_CODE']."<br></span>
	</td>
	<td></td>
	<td style='text-align:right;font-size:13px;'>
	<button style='margin-top:50px;'><b>Daily Fresh Palava Vegitables</b></button>
	</td>
	</tr>";
	

	
	$content.="<tr style='padding-bottom:0px;'>";
	$content.="<td style='border-bottom:1px solid #000;text-align:left;font-weight:bold;font-size:13px;'>Order # ".$order[0]['TRANSACTION_ID']."</td>";
	$content.="<td style='border-bottom:1px solid #000;'></td>";
	$content.="<td style='border-bottom:1px solid #000;text-align:right;font-size:13px;'>Placed on ".$order[0]['DATE'].' '.$order[0]['AM_PM']."
	
	</tr>
	";
	$content.="<tr style='padding-bottom:0px;'>";
	$content.="<td style='border-bottom:1px dashed #000;text-align:left;font-weight:bold;font-size:13px;'>Items Name</td>
	<td style='border-bottom:1px dashed #000;text-align:right;font-size:13px;font-weight:bold;'>Quantity</td>
		<td style='border-bottom:1px dashed #000;text-align:right;font-size:13px;font-weight:bold;'>Amount</td>
	</tr>";
	?>
	
	<?php
	for($i=0;$i<count($order_item);$i++){
		
	$content.="<tr>
	<td style='border-bottom:1px dashed #000;text-align:left;font-size:13px;font-weight:bold;'>".$order_item[$i]['PRODUCT_NAME']."</td>
	<td style='border-bottom:1px dashed #000;text-align:right;font-size:13px;'>".$order_item[$i]['TOTAL']." x ".$order_item[$i]['AMOUNT']/$order_item[$i]['TOTAL']."</td>
    <td style='border-bottom:1px dashed #000;text-align:right;font-size:13px;'>Rs.".$order_item[$i]['AMOUNT']."</td>
	</tr>";
		
	}
	?>
	
	
	
	<?php
	
	$content.="<tr>
	<td style='text-align:left;font-size:13px;'>Payment Mode : ".$order[0]['PAYMENT_MODE']."</td>
	<td style='text-align:right;font-size:13px;'>
	<p>Subtotal</p>
<p style='font-size:12px;'>
Shipping (Free Shipping Over 200/-)
</p>
<p>
	<b>Order Total</b>
	</p>	
	
	</td>
    <td style='text-align:right;font-size:13px;'>
	
	<p>
	Rs".$order[0]['TOTAL_AMOUNT']."</p>";
	
	$content.="<p>";
	?>
	
     <?php
	 $amount=$order[0]['TOTAL_AMOUNT']<200?20:0.00;
	 $content.="Rs.".$amount."<p>";
	

	$content.="</p><p><b>Rs. ".($order[0]['TOTAL_AMOUNT']+$amount)."</b></p>
	
	</td>
	</tr>
	
	
	<tr>
	<td style='border-bottom:1px solid #000;text-align:left;' colspan='2'>
	";
	$content.="<h3>Thank You!</h3>
	<span>We appreciate your business<span>
	</td>
	
    <td style='border-bottom:1px solid #000;text-align:right;'></td>
	</tr>
	
	<tr>
	<td style='text-align:center;' colspan='3'>
	<p style='margin:0;font-size:13px;'>if you need assistance with your order,please email us at<p>
	<span style='font-size:13px;'><b>anuragupta2004@gmail.com</b></span>
	</td>
	</tr>
	</table>";
	?>

	
	</body>
	</html>
	
		<?php
		print_r($content);
/*$tcpdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$tcpdf->SetCreator(PDF_CREATOR);
$tcpdf->SetTitle('Bill Collection Letter');
$tcpdf->SetHeaderData('','','PDF_HAEDER_TITLE','PDF_HEADER_STRING');
$tcpdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
$tcpdf->SetFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
$tcpdf->SetDefaultMonospacedFont('helvetica');
$tcpdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$tcpdf->SetMargins(PDF_MARGIN_LEFT,'5',PDF_MARGIN_RIGHT);
$tcpdf->SetPrintHeader(false);
$tcpdf->SetPrintFooter(false);
$tcpdf->SetAutoPageBreak(TRUE,10);
$tcpdf->SetFont('helvetica','',12);
$tcpdf->AddPage();
$tcpdf->writeHTML($content, true, false, false, false, '');
$tcpdf->Output('DEMO.pdf','I');
*/

?>
	
	
	