<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://cuongpham.freevnn.com/cuongpv/school_manager/";?>"></base>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/login.css" type="text/css" />
	<script src="public/template/frontend/layout/css/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/template/frontend/layout/css/sweetalert.css">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
	<title>Login</title>
</head>
<body>
<div class="container">
<h1>LOGIN</h1>
	<form id="form" name="login_form" method="POST">
		<div class="form-group">
			<label>Email: </label>
			<input class="form-control" id ="user" type ="text" placeholder ="abc@xyz" name ="username"></input>
		</div>
		<div class="form-group">
			<label>Password: </label>
			<input class="form-control" id ="pass" type ="password" placeholder="******" name ="password"></input>
		</div>
			<input id ="log_in" class ="btn btn-info" type ="button" name ="login" value ="LOGIN"></input>
			<input id ="register" class ="btn btn-info" type ="button" name ="register" value ="SIGN UP"></input>
			<script type="text/javascript">

				$("#register").click(function(){
					window.location.href='http://cuongpham.freevnn.com/cuongpv/school_manager/home/register';
				});

				$("#log_in").click(function(){
					$.ajax({
                        url: "http://cuongpham.freevnn.com/cuongpv/school_manager/home/checklogin",
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