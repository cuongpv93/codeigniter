<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://cuongpham.freevnn.com/cuongpv/school_manager/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/register.css" type="text/css" />
    <script src="public/template/frontend/layout/css/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/template/frontend/layout/css/sweetalert.css">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>	
    <title>Tạo tài khoản</title>
</head>
<body>
<img id =icon src="http://www.clker.com/cliparts/8/o/a/S/U/6/sign-up-button-md.png">
<h1>ACCOUNT REGISTER</h1>
<div class="container">
	<form id="form"  name="registerForm" method="POST">
		<div class="register_form">
			<label><b>EMAIL: </b></label> <br/>
			<input type="text" placeholder="abc@xyz" name="username" id="user"></input><br/>
			<p id="user_status"></p>
			<label><b>PASSWORD: </b></label> <br/>
			<input type="password" placeholder="******" name="password" id="pass"></input>
			<p id="password_status"></p>
			<input id="click" class="button" type="button" name="register" value="REGISTER" ></input>
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
                            $("#user_status").html(result);
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
                            $("#password_status").html(result);
                        }
                    });                  
            });

            $('#click').click(function(){
                 $.ajax({
                        url: "http://cuongpham.freevnn.com/cuongpv/school_manager/home/checkemail",
                        type: "post",
                        dataType: "text",
                        data: {
                            email : $("#user").val()
                        },               
                        success: function(result){
                            if(result == "You can use this email!") {
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
            })
			</script>
		</div>
	</form>
</div>
</body>
</html>