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
	<title>Thêm thông tin</title>
</head>

<body>
<header>
	<h1> THÔNG TIN SINH VIÊN</h1>
</header>
<div class="container">
<div class="form-group">
<h2>Thêm sinh viên:</h2>
<form method="post" action="">
	<label for="name">Họ tên :</label>
	<input class="form-control" type="text" name="name" value=""/>
</div>
<div class="form-group">	
	<label for="mssv">Mã số sinh viên :</label>
	<input class="form-control" type="text" name="mssv" value=""/>
</div>
<div class="form-group">
	<label for="lop">Lớp :</label>
	<input class="form-control" type="text" name="lop" value=""/>
</div>
<div class="form-group">
	<label for="diem">Điếm : </label>
	<input class="form-control" type="text" name="diem" value=""/>
</div>
	<input class="btn btn-info btn-md" type="submit" name="add" id="button" value="Add"/>
	<input class="btn btn-info btn-md" type="submit" name="back" id="button" value="Back"/>
</form>
</div>
</body>
</html>
