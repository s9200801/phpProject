<?php
session_start();
include("sql_connection.php");
$title=$_POST['title'];
$message=$_POST['message'];
$name=$_SESSION['name'];
$sql="INSERT INTO context(title,content,name) values('$title','$message','$name')";
$result=mysqli_query($conn,$sql);
$refer='homepage2.php';
header('Location:'.$refer);
?>