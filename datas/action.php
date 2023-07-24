<?php
    session_start();
    include_once('db_config.php');
    if (count($_POST["selected_id"]) > 0 ) {
      $all = implode(",", $_POST["selected_id"]);
      $query="DELETE FROM reacts WHERE Cou_ID AND Cou_ID IN($all)";
      if(mysqli_query($conn,$query)){
          $_SESSION['success'] = 'Products have been deleted successfully.';
      }
    }else{
        $_SESSION['error'] = 'Select checkbox to delete product.';
    }
    header("Location:index.php");
?>