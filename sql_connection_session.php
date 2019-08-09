<?php
$servername="localhost";
$username="root";
$password="";
$dbname="404411067";
$conn=mysqli_connect($servername,$username,$password);
$sql="SELECT * FROM session_db";
$conn->query("SET NAMES utf8");
mysqli_select_db($conn,$dbname);

?>
