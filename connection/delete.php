<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","","db_user");
$id  =  $_GET['id'];
    $q = mysqli_query($connection,"update tbl_user set us_delete = 1 where user_id = '{$id}'") or die(mysqli_error($connection));
    if($q){
        echo "<script>alert('Record Deleted');window.location='dtable.php';</script>";
    }
?>    
</body>
</html>