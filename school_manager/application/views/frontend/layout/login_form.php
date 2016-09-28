<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/school_manager/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/login.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<title>Login</title>
</head>
<body>
<img id =icon src="http://www.aaumachine.com.vn/Content/Images/login.png">
<h1>LOGIN</h1>
<div class="container">
	<form method="POST">
		<div class="login_form">
			<label><b>EMAIL: </b></label><br/>
			<input type="text" placeholder="abc@xyz" name="username"></input>
			<div class="hide"><p></p></div>
			<label><b>PASSWORD: </b></label><br/>
			<input type="password" placeholder="******" name="password"></input>
			<div class="hide"><p></p></div>
			<input id="log_in" class="button" type="submit" name="login" value="LOGIN"></input>
			<a class="button" href="http://localhost/cuongpv/school/home/register" >SIGN UP</a>
		</div>		
	</form>
</div>
</body>
</html>