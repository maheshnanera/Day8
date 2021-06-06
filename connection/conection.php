<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_user";
    $connection =  mysqli_connect($host,$username,$password,$dbname);
    $q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) value('NMR','Male','123')") or
     die("Error".mysqli_error($connection));
     if($q)
     {
        echo "<script>alert('Record Added in Database')</script>";
     }
?>    
</body>
</html>