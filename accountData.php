<?php 
	@session_start();
	include("sql_connection1.php");
	if(!isset($_SESSION['name'])){
		header('location:homepage.php');
	}
	$sql="SELECT * FROM account where name = '".$_SESSION['name']."'";
	$result=mysqli_query($conn,$sql);
	$rs=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="Content-Type" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>會員資料</title>
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
	<br><br><br><br><br><br><br><br><br>
    <div class="container" style="width:20%">

      <form class="form-signin" method="post" action="account_modify.php" name="regcheck">
       
		<div align="center">
			<h2 class="form-signin-heading"><font size=7 face="標楷體" color="#0080FF">會員資料</font></h2>
			
		</div>
			
			
			暱稱: <?php echo $rs['name']; ?><br>
			信箱: <?php echo $rs['email']; ?><br>
			生日: <?php echo $rs['birth'];?><br>
			性別: <?php if($rs['sex']=="NULL") echo '暫不公開'; else echo $rs['sex']; ?><br>

		
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
  

</body></html>