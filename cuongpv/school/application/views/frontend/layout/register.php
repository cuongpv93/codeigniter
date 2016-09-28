<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/cuongpv/school/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/register.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<title>Tạo tài khoản</title>
</head>
<body>
<img id =icon src="http://www.clker.com/cliparts/8/o/a/S/U/6/sign-up-button-md.png">
<h1>ACCOUNT REGISTER</h1>
<div class="container">
	<form id="form"  name="registerForm" method="POST">
		<div class="register_form">
			<label><b>EMAIL: </b></label> <br/>
			<input type="text" placeholder="abc@xyz" name="username" id="user" onkeyup="checkname()"></input><br/>
			<p id="user_status"></p>
			<label><b>PASSWORD: </b></label> <br/>
			<input type="password" placeholder="******" name="password" id="pass" onkeyup="checkpassword()"></input>
			<p id="password_status"></p>
			<input id="click" class="button" type="submit" name="register" value="REGISTER"></input>
			<input id="check" class="button" type="button" name="check" value="CHECK"></input>
			<script type="text/javascript">
			$('#check').click(function(event)
            {	     
            	event.preventDefault();
                $.ajax({
                    url : 'http://localhost/cuongpv/school/home/printdata',
                    type : 'get',
                    dataType : 'json',
                    success : function (result){
                    	check = 0;
                    	var email = document.getElementById("user").value;
                    	var password = document.getElementById("pass").value;
                    	var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    	var passpattern = /^[A-Za-z]\w{7,14}$/;
                    	if (!email.match(emailpattern) || !password.match(passpattern)) {
                    		if (!email.match(emailpattern)){
                    		$("#user_status").html("Email không đúng định dạng");                    
                    		} 
                    		
                    		if(!password.match(passpattern)) {
                    				$("#password_status").html("Mật khẩu không phù hợp");
                    				};
                    		if (email.match(emailpattern)) {
                    				$("#user_status").html("");
                    				};
                    		if(password.match(passpattern)){
                    		$("#password_status").html("");
                    		} 
                    	} else
                    	{
                    		if (email.match(emailpattern)) {
                    				$("#user_status").html("");
                    				};
                    		if(password.match(passpattern)){
                    		$("#password_status").html("");
                    		} 
	                        $.each (result, function (key, item){
	                            if(email==item['email']) {
	                            	check = 1;        
		                        }                   	
	                        });                                  
	                        if (check) {
	                        	alert("Tai khoan da ton tai"); 
	                        } else{
	                        	alert("Tai khoan phu hop"); 
	                        }
                    	}
                    }
                });
            });            
			</script>
		</div>
	</form>
</div>
</body>
</html>