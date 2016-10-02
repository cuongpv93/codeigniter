<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://cuongpham.freevnn.com/cuongpv/school_manager/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/form.css" type="text/css" />
	<title>Xóa thông tin</title>
</head>

<body>
<header>
	<h1> THÔNG TIN SINH VIÊN</h1>
	<h2>Xác nhận xóa sinh viên :</h2>
</header>

<form method="post" action="">
	<label id="nhan" for="name">Họ tên :</label>
	<label id="giatri"><?php echo isset($sinhvien['student'])?$sinhvien['student']:'';?></label>
	<br/>
	<label id="nhan"  for="mssv">Mã số sinh viên :</label>
	<label id="giatri"><?php echo isset($sinhvien['mssv'])?$sinhvien['mssv']:'';?></label>
	<br/>
	<label id="nhan"  for="lop">Lớp :</label>
	<label id="giatri"><?php echo isset($sinhvien['lop'])?$sinhvien['lop']:'';?></label>
	<br/>
	<label id="nhan"  for="diem">Điếm : </label>
	<label id="giatri"><?php echo isset($sinhvien['diem'])?$sinhvien['diem']:'';?></label>
	<br/>
	<input type="submit" name="delete" id="button" value="Delete"/>
	<input type="submit" name="back" id="button" value="Back"/>
</form>
</body>
</html>