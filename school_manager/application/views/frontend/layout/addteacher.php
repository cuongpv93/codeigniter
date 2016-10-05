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
	<h1> THÔNG TIN GIÁO VIÊN</h1>
	
</header>
<div class="container">
<h2>Thêm giáo viên :</h2>
<form method="post" action="">
	<div class="form-group">
	<label for="name">Họ tên :</label>
	<input class="form-control" type="text" name="name" value=""/>
	</div>
	<div class="form-group">
	<label for="lop">Lớp phụ trách:</label>
	<input class="form-control" type="text" name="lop" value=""/>
	</div>
	<div class="form-group">
	<input type="submit" name="add" class="btn btn-info" value="Add"/>
	<input type="submit" name="back" class="btn btn-info" value="Back"/>
	</div>
</form>
</div>
</body>
</html>