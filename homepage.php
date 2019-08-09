<?php 
	  include("sql_connection.php");
	  $sql="SELECT * FROM context";
	  $result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<meta http-equiv="Content-Type" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/bootstrap.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body background="1.png">
<br><br><br><br><br><br><br>

<div class="container" style="width:20%">
	<div width = "40px" align="right">
		<input type="button" class="btn btn-lg btn-primary btn-block" onClick="location.href='log.php'" value="登入">
	</div>
	
<p ><h1 align="center">留言板</h1></p>
	<?php
	for($i=0; $i<mysqli_num_rows($result); $i++){
		$rs=mysqli_fetch_assoc($result);
	?>
	<table align="center" width="300" border="1">
  <tr>
    <th>主題名稱</th>
  </tr>
  <tr>
    <th>
    <form action="contextview.php" method="get">
  
  
  <a href="contextview.php?getTitle=<?php echo $rs['title'];?>"><?php echo $rs['title'];?></a>
  </form>
    </th>
  </tr>
  </table>
  <?php }?>

  <br><br><br><br>

  <div style="float:center">
		
  </div>
  </div>

  

</body>

</html>