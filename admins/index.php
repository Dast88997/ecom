<?php include 'header.php';
ob_start();
?>

<?php
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$SQL="SELECT * FROM login WHERE EMAIL='$email' AND PASSWORD='$pass'";
	$row=$conn->query($SQL);
	if($row->num_rows>0)
	{
		while($data=$row->fetch_assoc())
		{
		session_start();
		$_SESSION['name']=$data['NAME'];
		$_SESSION['email']=$data['EMAIL'];
		$_SESSION['id']=$data['ID'];
	
		header('Location:home.php');
		}
	}else{}
}

?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">
</head>
<style>
body {

  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<body style='background-image:url(image/logistics-images.jpg);padding-bottom:100px;relative;'>



<div style="height:140px"></div>
<div class="container">
	<div class="row justify-content-center">
	<div class="col-md-12" style="text-align:center;">
	<p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:60px;"> For Admin Purpose Only</p>
	</div>
	
	<div class="col-md-4 card" style="margin-top:40px;">
	<form action="" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">Enter Admin Email</label>
    <input type="text" class="form-control" name="email" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">Enter Admin Password</label>
    <input type="text" class="form-control" name="pass" id="formGroupExampleInput2">
  </div>
  
  <div class="form-group">
  
    <input type="submit" name="login" class="form-control btn btn-primary" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">
  </div>
</form>
	</div>
	</div>
	</div>
</body>
</html>