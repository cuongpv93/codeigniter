<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/cuongpv/school/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/login.css" type="text/css" />
	<script src="public/template/frontend/layout/css/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/template/frontend/layout/css/sweetalert.css">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
	<title>Login</title>
</head>
<body>
<img id =icon src="http://www.aaumachine.com.vn/Content/Images/login.png">
<h1>LOGIN</h1>
<div class="container">
	<form id="form" name="login_form" method="POST">
		<div class="login_form">
			<label><b>EMAIL: </b></label><br/>
			<input id ="user" type ="text" placeholder ="abc@xyz" name ="username"></input>
			<div class ="hide"><p></p></div>
			<label><b>PASSWORD: </b></label><br/>
			<input id ="pass" type ="password" placeholder="******" name ="password"></input>
			<div class="hide"><p></p></div>
			<input id ="log_in" class ="button" type ="button" name ="login" value ="LOGIN"></input>
			<input id ="register" class ="button" type ="button" name ="login" value ="SIGN UP"></input>
			<script type="text/javascript">

				$("#register").click(function(){
					window.location.href='http://localhost/cuongpv/school/home/register';
				});

				$("#log_in").click(function(){
					$.ajax({
                        url: "http://localhost/cuongpv/school/home/checklogin",
                        type: "post",
                        dataType: "text",
                        data: {
                            email : $("#user").val(),
                            password : $("#pass").val()
                        },               
                        success: function(result){
                            if (result == 1) {
                            	swal("Success!", "Login success!", "success");
                            	setTimeout(function(){
                            		$("#form").submit();
                            	},2000);	
                            } else {
                            	swal("Error!", "Wrong username or password!", "error");
                            }
                        }
                    });
				})
			</script>
		</div>		
	</form>
</div>
</body>
</html>