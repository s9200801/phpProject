<?php 
	session_start();
	include("sql_connection.php");
	$sql="SELECT * FROM context";
	$result=mysqli_query($conn,$sql);
	$titlename = $_GET['getTitle'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titlename; ?></title>
</head>
<body background="1.png">
	<p align="center"><textarea  name="title" rows="50" cols="52" color="white" readonly>
	<?php 
	$sql="SELECT * FROM context where title = '$titlename'";
	$result=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_assoc($result);
	echo $rs['content'];
	?>
		
	</textarea></p>
	<p align="center"><textarea  name="title" rows="3" cols="52" color="white" readonly>
	<?php 
	echo "發文者:".$rs['name'];
	?>
	</textarea></p>
</body>
</html>