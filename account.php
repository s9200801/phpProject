<?php
include("sql_connection1.php");
$name=$_POST['inputName'];
$email=$_POST['inputEmail'];
$password=MD5($_POST['inputPassword']);
$sqlcheck="SELECT * FROM account where email = '$email'";
$accountcheck=mysqli_query($conn,$sqlcheck);
$num=mysqli_num_rows($accountcheck);
if($num>=1){
	echo "<script type='text/javascript'> alert('此信箱已被註冊'); location.href='regist.html';</script>";
}
else{
	$sql="INSERT INTO account(name,email,password) values('$name','$email','$password')";
	$result=mysqli_query($conn,$sql);
	echo "<script type='text/javascript'> alert('註冊成功'); location.href='log.html';</script>";
}
?>