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
	<link rel="stylesheet" href="public/template/frontend/layout/css/register.css" type="text/css" />
    <script src="public/template/frontend/layout/css/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/template/frontend/layout/css/sweetalert.css">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>	
    <title>Tạo tài khoản</title>
</head>
<body>
<div class="container">
<h1><b>SIGN UP</b></h1>
	<form id="form"  name="registerForm" method="POST">
		<div class="form-group">
			<label>Email: </label>
			<input class="form-control" type="text" placeholder="abc@xyz" name="username" id="user"></input>
            <p id="user_status"></p>
        </div>    
			
        <div class="form-group">
			<label>Password: </label> 
			<input class="form-control" type="password" placeholder="******" name="password" id="pass"></input>
            <p id="password_status"></p>
        </div>    
            
        <div class="form-group">
            <label>Confirm password:</label>
            <input class="form-control" type="password" placeholder="******" name="confirm" id="confirm"></input>
            <p id="confirm_status"></p>
        </div>
			<input id="click" class="btn btn-info" type="button" name="register" value="REGISTER" ></input>
            <input id ="clear" class="btn btn-info" type="button" name="clear" value="CLEAR"></input>
            <input id ="back" class="btn btn-info" type="button" name="back" value="BACK"></input>
			<script type="text/javascript">
            $('#user').keyup(function(){
                    $.ajax({
                        url: "http://cuongpham.freevnn.com/cuongpv/school_manager/home/checkemail",
                        type: "post",
                        dataType: "text",
                        data: {
                            email : $("#user").val()
                        },               
                        success: function(result){
                            if(result == 1){
                                $("#user_status").html("");
                            } 
                             else {
                                $("#user_status").html("Cannot use this email");
                            }
                        }
                    });                  
            });

            $('#pass').keyup(function(){
                    $.ajax({
                        url: "http://cuongpham.freevnn.com/cuongpv/school_manager/home/checkpassword",
                        type: "post",
                        dataType: "text",
                        data: {
                            password : $("#pass").val()
                        },               
                        success: function(result){
                            if(result == 1){
                                $("#user_status").html("");
                            } else {
                                $("#user_status").html("Password not valid");
                            }
                        }
                    });                  
            });

            $('#click').click(function(){
                 $.ajax({
                        url: "http://cuongpham.freevnn.com/cuongpv/school_manager/home/checkregister",
                        type: "post",
                        dataType: "text",
                        data: {
                            email : $("#user").val()
                        },               
                        success: function(result){
                            if(result == 1) {
                                swal("Success!", "Register success!", "success");
                                setTimeout(function(){
                                    $("#form").submit();
                                },2000);
                            }
                            else {
                                swal("Error!", "Email is not valid or already exist!", "error");
                            }
                        }
                    });               
            });
			
			$('#confirm').change(function(){
                var confirm = $("#confirm").val();
                var password = $("#pass").val();
                if (confirm != password) {
                    $("#confirm_status").html("Password is not match");
                } else {
                    $("#confirm_status").html("");
                }
            });

            $("#clear").click(function(){
                $("#user_status").html("");
                $("#password_status").html("");
                $("#confirm_status").html("");
                $("#user").val("");
                $("#pass").val("");
                $("#confirm").val("");
            });

            $("#back").click(function(){
                window.location.href='http://localhost/cuongpv/school/home/login';
            });
			</script>
		</div>
	</form>
</div>
</body>
</html>