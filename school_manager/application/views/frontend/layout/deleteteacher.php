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
	<h1> THÔNG TIN GIÁO VIÊN</h1>
</header>
<div class="container">
<h2>Xác nhận xóa giáo viên :</h2>
<form method="post" action="">
	<div class="form-group">
	<label id="nhan" for="name">Họ tên :</label>
	<label id="giatri"><?php echo isset($giaovien['teacher'])?$giaovien['teacher']:'';?></label>
	</div>
	<div class="form-group">
	<label id="nhan"  for="lop">Lớp phụ trách :</label>
	<label id="giatri"><?php echo isset($giaovien['lop'])?$giaovien['lop']:'';?></label>
	</div>
	<div class="form-group">
	<input type="submit" name="delete" class="btn btn-info" value="Delete"/>
	<input type="submit" name="back" class="btn btn-info" value="Back"/>
	</div>
</form>
</div>
</body>
</html>