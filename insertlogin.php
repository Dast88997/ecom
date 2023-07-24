<!doctype html>
<html>

<head>
    <link rel="icon" type="png" href="glosal-services.png" style="width:100%">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<div class="se-pre-con no-js">
</div>

<body>

    <div style="background-color:orange">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="Image/emma-logo.png" style="width:80px;height:80px;">&nbsp <span
                        style="font-family: 'Yanone Kaffeesatz', sans-serif;color:#000066;font-size:35px;"><b>Emmanuel
                            International
                            Private
                            Ltd</b></span>
                </div>

                <div class="col-md-4">
				<marquee behavior="scroll" direction="left" onmouseover="this.stop();"
                            onmouseout="this.start();">
                            <p style="font-size:35px;font-family: 'Yanone Kaffeesatz', sans-serif;padding-top:10px;">Customers Details Is Very Important Regarding Delivery Of Goods. All Customers Details Must Be Done Correctly!!</p>
                        </marquee>
                </div>
            </div>
        </div>
    </div><br><br>



    <?php

$conn=new mysqli("localhost","root","","emm");

if(isset($_GET['submit']))
{


$Name=$_GET['Name'];
$add_1=$_GET['Sender'];
$add_2=$_GET['Sender_Address'];
$add_3=$_GET['Sender_Email'];
$add_4=$_GET['Sender_Number'];
$add_9=$_GET['Receiver'];
$add_10=$_GET['Receiver_Address'];
$add_11=$_GET['Receiver_Email'];
$add_12=$_GET['Receiver_Number'];
$add_13=$_GET['Name_Item'];
$add_14=$_GET['Number_Item'];
$add_15=$_GET['Color_Item'];
$add_16=$_GET['Weight_Item'];
$add_18=$_GET['Sent'];
$add_19=$_GET['Delivery'];
$add_20=$_GET['Amount'];
$add_21=$_GET['Bill'];


$rand='EPL'.date('Ymhs').'';

$sql="insert into reacts(COUR_NO,Name,Sender,Sender_Address,Sender_Email,Sender_Number,Receiver,Receiver_Address,Receiver_Email,Receiver_Number,Name_Item,Number_Item,Color_Item,Weight_Item,Sent,Delivery,Amount,Bill) values('$rand','$Name','$add_1','$add_2','$add_3','$add_4','$add_9','$add_10','$add_11','$add_12','$add_13','$add_14','$add_15','$add_16','$add_18','$add_19','$add_20','$add_21')";

if($conn->query($sql))
{
	echo "new row add successfully";
	
	/*$sql="insert into deliver(COU_ID,DELIVERY_STATUS) values('$rand',0)";
if($conn->query($sql))
{
}
	*/
}
}


?>

    <?php

if(isset($_GET['delete']))
{
	$ID=$_GET['delete'];
	$sql="delete from reacts  where Cou_ID=$ID";
if($conn->query($sql))
{
	echo "delete successfully";
	
}

}




	


?>

    <table border="1">
        <tr>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><input type="checkbox" id="checkAl"> Cou_ID</th>

            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Tracking Number
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Name
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Sender
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;">
                Sender_Address
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Sender_Email
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Sender_Number
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Date
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Receiver Name
            </th>
            <th  style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Receiver Address
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Receiver Email
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Receiver Number
            </th>

            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Name Of Goods
            </th>

            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                NumberOf Goods
            </th>

            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Color Of Goods
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Weight Of Goods
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Sent Date
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Delivery Date
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Amount Paid
            </th>
            <th style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                Way Bill Number
            </th>
        </tr>


        <?php
$sql="select * from reacts";
$row=$conn->query($sql);
if($row->num_rows>0)
{
	while($data=$row->fetch_assoc())
	{
		?>
        <tr>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Cou_ID'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['COUR_NO'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Name'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Sender'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Sender_Address'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Sender_Email'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Sender_Number'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Date'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Receiver'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Receiver_Address'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Receiver_Email'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Receiver_Number'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Name_Item'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Number_Item'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Color_Item'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Weight_Item'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Sent'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Delivery'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Amount'];?></td>
            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;"><?php echo $data['Bill'];?></td>
            <td><a href="updater.php?update=<?php echo $data['Cou_ID'];?>"><button>Update</button></a></td>


        </tr>
        <?php
	
	}
	
	
	
}

?>
    </table>

    <div style="height:50px;"></div>
    <div id="Sign-In" align="center">
        <div id="Sign In" align="center">
            <div style="height:30px"></div>
            <button onclick="myFunction()" class="btn btn-primary" style="width:200px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Log Out</button>

            <p id="demo"></p>
        </div>

        <script>
        function myFunction() {
            var txt;
            if (confirm("Do You Really Want To Create Login Menu?")) {
                txt = window.location.assign("createlogin.php");
            } else {
                txt = "You pressed Cancel!";
            }
            document.getElementById("demo").innerHTML = txt;
        }
        </script>

    </div><br><br>


    <div style="height:240px"></div>
   
</body>

</html>