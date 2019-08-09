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

    <title>修改會員資料</title>
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
    <script>
    function check(){
        if(regcheck.inputName.value==""){
            alert("未輸入姓名");
        }
        else if(regcheck.inputEmail.value==""){
            alert("未輸入信箱");
        }
        else if(regcheck.inputPassword.value==""){
            alert("未輸入密碼");
        }
        else if(regcheck.inputRePassword.value!=regcheck.inputPassword.value){
            alert("第二次密碼不正確");
        }
        else regcheck.submit();
    }
    </script>
  </head>

  <body background="1.png">
	<br><br><br><br><br><br><br><br><br>
    <div class="container" style="width:20%">

      <form class="form-signin" method="post" action="account_modify.php" name="regcheck">
       
		<div align="center">
			<h2 class="form-signin-heading"><font size=7 face="標楷體" color="#0080FF">修改會員資料</font></h2>
			<h4 class="form-signin-heading" ><font size=5 face="標楷體" color="#0080FF">請輸入您的基本資料</font></h4>
		</div>
			
			<label for="inputName" class="sr-only">Name</label>
			暱稱<input type="text" name="inputName" class="form-control" required="" autofocus="" value="<?php echo $rs['name']; ?>" readonly>
			<label for="inputEmail" class="sr-only">Email address</label>
			信箱<input type="email" name="inputEmail" class="form-control" required="" value="<?php echo $rs['email']; ?>"readonly>
			<label for="inputPassword" class="sr-only">Password</label>
			修改密碼(如不修改請輸入原密碼)<input type="password" name="inputPassword" class="form-control" placeholder="Password" required="">
			<label for="inputRePassword" class="sr-only">RePassword</label>
			再輸入一次密碼<input type="password" name="inputRePassword" class="form-control" placeholder="twice-Password" required="">
			<label for="inputBirth" class="sr-only">Birth</label>
			生日<input type="date" name="inputBirth" class="form-control" placeholder="Birthday" required="" value="<?php echo $rs['birth'];?>">
			<label for="inputSex" class="sr-only">Sex</label>
			性別
			<select name="inputSex" class="form-control" placeholder="Sex" required="">
				<option value="male">男</option>
				<option value="female">女</option>
				<option value="NULL">暫不公開</option>
			</select>
			
			
        <div class="checkbox">
        </div>
		<div>
			<div style="float:left">
				<button class="btn btn-lg btn-primary btn-block" type="reset"><font face="標楷體">清除資料</font></button>
			</div>
			<div style="float:right">
				<input type="button" class="btn btn-lg btn-primary btn-block" style="font-family:標楷體" onclick="check()" value="確定修改">
			</div>
		</div>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
  

</body></html>