<?php
include("sql_connection1.php");
$name=$_POST['inputName'];
$email=$_POST['inputEmail'];
$password=MD5($_POST['inputPassword']);
$birth=$_POST['inputBirth'];
$sex=$_POST['inputSex'];
$sqlcheck="SELECT * FROM account where email = '$email'";
$accountcheck=mysqli_query($conn,$sqlcheck);
$num=mysqli_num_rows($accountcheck);


$sql="UPDATE account SET password = '$password', birth='$birth', sex='$sex' where email='$email'";
$result=mysqli_query($conn,$sql);

echo "<script type='text/javascript'> alert('修改成功'); location.href='homepage2.php';</script>";

?>