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
$eid  =  $_GET['eid'];
    $editq = mysqli_query($connection,"select * from tbl_user where user_id ='{$eid}' ") or die(mysqli_error($connection));
    $editdata = mysqli_fetch_array($editq);
  //  print_r($editdata);
    
    if($_POST){
        $txt1 = $_POST['txt1'];
        $txt2 = $_POST['txt2'];
        $txt3 = $_POST['txt3'];
        $uq = mysqli_query($connection,"update tbl_user set user_name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}' where user_id='{$eid}'") or die(mysqli_error($connection));
        if($uq){
            echo "<script>alert('Record edited');window.location='dtable.php';</script>";
        }

    }
?>
 <form method="post">
    Name : <input type="text" value="<?php echo $editdata['user_name'];  ?>" name="txt1"/>
    </br>
     Gender : Male<input type="radio" <?php if($editdata['user_gender']=='Male'){echo "checked";}?> value="Male" name="txt2"/>
              Female<input type="radio"  value="Female"<?php if($editdata['user_gender']=='Female'){echo "checked";}?> name="txt2"/>
              </br>
     Mobile No : <input type="number"   value="<?php echo $editdata['user_mobile'];  ?>" name="txt3"/>
     </br>
        <input type="submit"/>
 
 </form>   
</body>
</html>
