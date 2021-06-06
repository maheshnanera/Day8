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
     $q = mysqli_query($connection,"select * from tbl_user where us_delete = 0")
     or die(mysqli_error($connection));
     echo "<table border = '1'>";
     echo "<th>ID</th>";
     echo "<th>Name</th>";
     echo "<th>Gender</th>";
     echo "<th>Mobile No.</th>";
     echo "<th>Edit</th>";
     echo "<th>Action</th>";
     while($row  = mysqli_fetch_array($q)){
         echo "<tr>";
         echo "<td>{$row['user_id']}</td>";
         echo "<td>{$row['user_name']}</td>";
         echo "<td>{$row['user_gender']}</td>";
         echo "<td>{$row['user_mobile']}</td>";
         echo "<td><a href ='edit.php?eid={$row['user_id']}' >Edit</a></td>";
         echo "<td><a href ='delete.php?id={$row['user_id']}' >Delete</a></td>";
        echo "</tr>";
     }
     echo "</table>";
    ?>
    <a href="addrecord.php">Add record</a>
</body>
</html>