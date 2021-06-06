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
  $q = mysqli_query($connection,"select * from tbl_user")
  or die(mysqli_error($connection));
  $row = mysqli_fetch_row($q);
  print_r($row);
  echo $row[0].$row[1].$row[2].$row[3];
  $row = mysqli_fetch_array($q);
echo "<pre>";
  print_r($row);
  echo $row[0].$row[1].$row[2].$row[3];
  echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];

 ?>   
</body>
</html>