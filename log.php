<!DOCTYPE html>
<html lang="en"><head>
	<meta http-equiv="Content-Type" charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>登入</title>
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

      <form class="form-signin" method="POST" action="login.php">
       
		<div align="center">
			<h2 class="form-signin-heading"><font size=7 face="標楷體" color="#0080FF">留言板登入系統</font></h2>
			<h4 class="form-signin-heading" ><font size=5 face="標楷體" color="#0080FF">請輸入您的帳號及密碼</font></h4>
		</div>
	
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
        </div>
		<div>
			<div style="float:left">
				<button class="btn btn-lg btn-primary btn-block" type="submit"><font face="標楷體">登入</font></button>
			</div>
			<div style="float:right">
				<button class="btn btn-lg btn-primary btn-block" onclick="location.href='regist.html'" ><font face="標楷體">註冊</font></button>
			</div>
		</div>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>
