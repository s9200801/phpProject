<?php
$servername="localhost";
$username="root";
$password="";
$dbname="404411067";
$conn=mysqli_connect($servername,$username,$password);
$sql="SELECT * FROM account";
$conn->query("SET NAMES utf8");
mysqli_select_db($conn,$dbname);

?>