<?php include './model.php';?>

<?php
$model->logout();
header('Location:index.php');
?>