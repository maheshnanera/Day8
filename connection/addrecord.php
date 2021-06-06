<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name : <input type="text" name="txt1"/>
        Gender : <select name="txt2">
            <option>Male</option>
            <option>Female</option>
        </select>
        Mobile No : <input type="number" name="txt3"/>
        <input type="submit"/>
    </form>
    <?php
    $connection = mysqli_connect("localhost","root","","db_user");

    if($_POST){
       
        $Name = $_POST['txt1'];
        $Gender = $_POST['txt2'];
        $Mobile = $_POST['txt3'];
    
        $q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) value('{$Name}','{$Gender}','{$Mobile}')") or die("Eroor".mysqli_error($connection));
    if($q){
        echo"<script>alert('Record Added in Database')</script>";
    }
    }
    ?>
     <a href="dtable.php">Display raecord</a>
</body>
</html>
