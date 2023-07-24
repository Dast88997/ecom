<!DOCTYPE html>
<html lang="en-US">
<head>
     <title>Delete multiple records from MySQL in PHP with checkbox - ExpertPHP</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">
        </head>


    <script type="text/javascript">
function deleteConfirm(){
    var result = confirm("Do You Want To Delete These Records?");
    if(result){
        return true;
    }else{
        return false;
    }
}
$(document).ready(function(){
    $('#check_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#check_all').prop('checked',true);
        }else{
            $('#check_all').prop('checked',false);
        }
    });
});
</script>
	

<body>
<?php
    session_start();
    include_once('db_config.php');
    $query = mysqli_query($conn,"SELECT * FROM reacts");
?>
    
<form name="actionForm" action="action.php" method="post" onsubmit="return deleteConfirm();"/>
    <table border="1">
        <thead>
        <tr>
            <th><input type="checkbox" name="check_all" id="check_all" value=""/></th>        
            <th>
			
Courier Number
</th>
<th>
Name
</th>
<th>
Sender
</th>
<th>
Sender_Address
</th>
<th>
Sender_Email
</th>
<th>
Sender_Number
</th>

<th>
Date
</th>
<th>
Receiver
</th>
<th>
Receiver_Address
</th>
<th>
Receiver_Email
</th>
<th>
Receiver_Number 
</th>

<th>
Name_Item 
</th>

<th>
Number_Item 
</th>

<th>
Color_Item 
</th>
<th>
Weight_Item 
</th>

<th>
Sent Date
</th>
<th>
Delivery Date
</th>
<th>
Amount
</th>
<th>
Bill
</th>

        </tr>
        </thead>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    extract($row);
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="selected_id[]" class="checkbox" value="<?php echo $Cou_ID; ?>"/></td>        
            <td><?php echo $COUR_NO;?></td>
		<td><?php echo $Name;?></td>
		<td><?php echo $Sender;?></td>
		<td><?php echo $Sender_Address;?></td>
		<td><?php echo $Sender_Email;?></td>
		<td><?php echo $Sender_Number;?></td>
		<td><?php echo $Date;?></td>
        <td><?php echo $Receiver;?></td>
		<td><?php echo $Receiver_Address;?></td>
		<td><?php echo $Receiver_Email;?></td>
		<td><?php echo $Receiver_Number;?></td>
		<td><?php echo $Name_Item;?></td>
		<td><?php echo $Number_Item;?></td>
		<td><?php echo $Color_Item;?></td>
		<td><?php echo $Weight_Item;?></td>
		<td><?php echo $Sent;?></td>
		<td><?php echo $Delivery;?></td>
		<td><?php echo $Amount;?></td>
		<td><?php echo $Bill;?></td>
		
           
        </tr> 
		
		
		
        <?php } }else{ ?>
		<div style="height:50px"></div>
		<div id="Sign In" align="center">
            <button>No records found.</button>
</div>			
        <?php } ?>
    </table>
    <div id="Sign In" align="center">
        <div style="height:30px"></div>
    <input type="submit" class="btn btn-primary" name="btn_delete" style="width:200px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;" value="Delete Now"/>
    </div>
    
    
</form>

<div id="Sign In" align="center">
        <div style="height:30px"></div>
        <button onclick="myFunction()" class="btn btn-primary" style="width:200px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Log Out</button>

<p id="demo"></p>
		</div>

<script>
/*function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
   txt = window.location.assign("localhost/swarns.php");
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}*/
</script>



</body>
</html>