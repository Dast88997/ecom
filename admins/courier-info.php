<?php include 'header.php';

?>

<?php
	if(isset($_GET['new_add']))
	{
		
$id=isset($_GET['c_id'])?$_GET['c_id']:'';

$address=isset($_GET['address'])?$_GET['address']:'';

$date =date('Y-m-d h:i:s');

$cus_id=$_SESSION['id'];

echo $cus_id;


$sql="INSERT INTO track(CID,DATE,ADDRESS,USER_ID) VALUES('$id','$date','$address',$cus_id)";

if($conn->query($sql))
{}
	

	}	




if(isset($_GET['confirm']))	
{
$id=isset($_GET['c_id'])?$_GET['c_id']:'';

$c=isset($_GET['c'])?$_GET['c']:'';
$cus_id=$_SESSION['id'];
$sql="INSERT INTO deliver(COU_ID,DELIVERY_STATUS) VALUES('$id',$c)";

if($conn->query($sql))
{}
	
}
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">

<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(giphy-loading.gif) center no-repeat #fff;
}

tr,td{
	padding:2px;
}
/*
ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 2px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.9em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.0em;
    bottom: -1.2em;
}

*/


.timeline-wrapper {
  margin-left: 1.rem;
  border-left: 4px solid #ddd;
}
.node {
  padding-left: 1.2rem;
  padding-bottom: 1.8rem;
  position: relative;
 
}
.node h3, .node p {
  margin: 0;
}
.node::before {
  content: "";
  width: 1rem;
  height: 1rem;
  background: green;
  border: 1px solid #ccc;
  border-radius: 50%;
  position: absolute;
  top: .3rem;
  left: -.5rem;
}
 </style>

</head>

	<?php
	$id=isset($_GET['c_id'])?$_GET['c_id']:'';
	$status=0;
	$SQL="SELECT DELIVERY_STATUS FROM deliver WHERE COU_ID='$id'";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{
		
		$status=$data['DELIVERY_STATUS'];
	}
}
		
		?>
<body style='background-color:orange;'>
<?php header_top();?>
<div class="container" style="margin-top:150px;">
	<div class="row justify-content-center">
	<div class="col-md-10">
	<form action="">
	<input type="hidden" name="c_id" value="<?=$id;?>">
	<input type="hidden" name="c" value="1">
	<button class="btn btn-primary" type="submit" name="confirm" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;" >Delivery Done Please Click On Button</button>
	</form>
	<table class="table table-dark" style="margin-top:30px;">
  <thead>
    <tr>
     
      <th scope="col" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">COURIER ID</th>
      <th scope="col" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">SENDER ADDRESS</th>
	  <th scope="col" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">DELIVERY  ADDRESS</th>
    </tr>
  </thead>

  <tbody>

<?php

if($id!='')
{
$SQL="SELECT * FROM reacts WHERE COUR_NO='$id'";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{
		$array=array();
		array_push($array,$data['Sender_Address']);
		$SQL="SELECT * FROM track WHERE CID='$id'";
        $row1=$conn->query($SQL);
		if($row1->num_rows>0)
		{
			while($data1=$row1->fetch_assoc())
			{
				array_push($array,$data1['ADDRESS']);
			}
		}
		
		
		array_push($array,$data['Receiver_Address']);
		?>
	 <tr>
		<td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;"><?=$data['COUR_NO'];?></td>
		<td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;"><?=$data['Sender_Address'];?></td>
		<td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;"><?=$data['Receiver_Address'];?></td>
    </tr>
	<?php	
	}
	
}


}

?>   
     
   
  </tbody>
</table>
	</div>
	</div>
	</div>

<!--
<div class="container">
<div class="row">
<div class="col-md-12">
<table style='width:100%;'>
<div style="height:20px">
<ol class="progtrckr" data-progtrckr-steps="<?=count($array);?>">

<?php
for($i=0;$i<count($array)-1;$i++)
{
	?>
	<li class="progtrckr-done"><span style='font-size:10px;font-family:kalinga;align-left;'><?=$array[$i];?></span></li>
	
	
	<?php
}
?>
<?php
if($status==1)
{
?>
<li class="progtrckr-done"><span style='font-size:10px;font-family:kalinga;align-left;'><?=$array[$i];?></span></li>

<?php
}
else{
	?>
	<li class="progtrckr-todo"><span style='font-size:10px;font-family:kalinga;align-left;'><?=$array[$i];?></span></li>

	<?php
}
?>
	
</ol>
</div>
</table>
</div>
</div>
</div>
-->



<div  class="container">
<div class="row justify-content-center">
<div class="timeline-wrapper">
<?php
for($i=0;$i<count($array)-1;$i++)
{
	?>
<div class="node">
   <span style="font-size:20px;font-family: 'Yanone Kaffeesatz', sans-serif;"><?=$array[$i];?></span>
</div>
<?php
}
?>	
 
 
</div>
</div>
</div>


<div class="container" style="margin-top:150px;">
	<div class="row justify-content-center">
	<div class="col-md-7">
	<?php
	
		if($status==1)
		{?>
			<h1 style="font-family: 'Yanone Kaffeesatz', sans-serif;">!**! DELIVERY ALREADY DONE !**!</h1>
		<?php	
		}
		else{
			
			?>
			
			
			
			<form action="" method="get">
			<input type="hidden" name="c_id" value="<?=$_GET['c_id'];?>">
  <div class="form-group">
    <p style="text-align:center;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">Enter Current Address</p>
    <textarea rows="10" cols="10" class="form-control" name="address" id="formGroupExampleInput">
	</textarea>
  </div>
  
  
  <div class="form-group">
  
    <input type="submit" class="form-control btn btn-primary" name="new_add" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">
  </div>
</form>
			
			<?php
			
		}

		
		?>
	

	</div>
	</div>
	</div>
</body>
</html>