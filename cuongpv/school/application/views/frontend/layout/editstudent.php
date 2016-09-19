<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/cuongpv/school/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/form.css" type="text/css" />
	<title>Cập nhật thông tin</title>
</head>

<body>
<header>
	<h1> THÔNG TIN SINH VIÊN</h1>
	<h2>Sửa thông tin sinh viên :</h2>
</header>

<form method="post" action="">
	<label for="name">Họ tên :</label>
	<input type="text" name="name" value="<?php echo isset($sinhvien['student'])?$sinhvien['student']:'';?>"/>
	<label for="mssv">Mã số sinh viên :</label>
	<input type="text" name="mssv" value="<?php echo isset($sinhvien['mssv'])?$sinhvien['mssv']:'';?>"/>
	<label for="lop">Lớp :</label>
	<input type="text" name="lop" value="<?php echo isset($sinhvien['lop'])?$sinhvien['lop']:'';?>"/>
	<label for="diem">Điếm : </label>
	<input type="text" name="diem" value="<?php echo isset($sinhvien['diem'])?$sinhvien['diem']:'';?>"/>
	<input type="submit" name="edit" id="button" value="Edit"/>
	<input type="submit" name="back" id="button" value="Back"/>
</form>
</body>
</html>