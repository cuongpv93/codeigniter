<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/cuongpv/school/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/form.css" type="text/css" />
	<title>Thêm thông tin</title>
</head>

<body>
<header>
	<h1> THÔNG TIN SINH VIÊN</h1>
	<h2>Thêm sinh viên :</h2>
</header>

<form method="post" action="">
	<label for="name">Họ tên :</label>
	<input type="text" name="name" value=""/>
	<label for="mssv">Mã số sinh viên :</label>
	<input type="text" name="mssv" value=""/>
	<label for="lop">Lớp :</label>
	<input type="text" name="lop" value=""/>
	<label for="diem">Điếm : </label>
	<input type="text" name="diem" value=""/>
	<input type="submit" name="add" id="button" value="Add"/>
	<input type="submit" name="back" id="button" value="Back"/>
</form>
</body>
</html>
