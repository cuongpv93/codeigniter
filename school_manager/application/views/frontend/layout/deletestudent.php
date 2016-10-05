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
	<link rel="stylesheet" href="public/template/frontend/layout/css/form.css" type="text/css" />
	<title>Xóa thông tin</title>
</head>

<body>
<header>
	<h1> THÔNG TIN SINH VIÊN</h1>	
</header>
<div class="container">
<h2>Xác nhận xóa sinh viên :</h2>
	<div class="form-group">
	<form method="post" action="">
	<label id="nhan" for="name">Họ tên :</label>
	<label id="giatri"><?php echo isset($sinhvien['student'])?$sinhvien['student']:'';?></label>
	</div>
	<div class="form-group">
	<label id="nhan"  for="mssv">Mã số sinh viên :</label>
	<label id="giatri"><?php echo isset($sinhvien['mssv'])?$sinhvien['mssv']:'';?></label>
	</div>
	<div class="form-group">
	<label id="nhan"  for="lop">Lớp :</label>
	<label id="giatri"><?php echo isset($sinhvien['lop'])?$sinhvien['lop']:'';?></label>
	</div>
	<div class="form-group">
	<label id="nhan"  for="diem">Điếm : </label>
	<label id="giatri"><?php echo isset($sinhvien['diem'])?$sinhvien['diem']:'';?></label>
	</div>
	<div class="form-group">
	<input type="submit" name="delete" class="btn btn-info" value="Delete"/>
	<input type="submit" name="back" class="btn btn-info" value="Back"/>
	</div>
</form>
</div>
</body>
</html>