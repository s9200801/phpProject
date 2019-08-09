<?php
session_start();
include("sql_connection1.php");
$email=$_POST['inputEmail'];
$password=MD5($_POST['inputPassword']);
$sql="SELECT * FROM account where email = '$email' and password = '$password'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
$rs=mysqli_fetch_assoc($result);
session_set_cookie_params(0);
$_SESSION['name']=$rs['name'];
if($num>=1){
	if(isset($_SESSION['name'])){
		echo "<script> alert('登入成功'); location.href='homepage2.php';</script>";
	}
}
else{
	echo "<script> alert('帳號或密碼錯誤'); location.href='log.html';</script>";
}
?>