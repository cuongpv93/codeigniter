<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/school_manager/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/form.css" type="text/css" />
	<title>Xóa thông tin</title>
</head>

<body>
<header>
	<h1> THÔNG TIN GIÁO VIÊN</h1>
	<h2>Xác nhận xóa giáo viên :</h2>
</header>

<form method="post" action="">
	<label id="nhan" for="name">Họ tên :</label>
	<label id="giatri"><?php echo isset($giaovien['teacher'])?$giaovien['teacher']:'';?></label>
	<br/>

	<label id="nhan"  for="lop">Lớp phụ trách :</label>
	<label id="giatri"><?php echo isset($giaovien['lop'])?$giaovien['lop']:'';?></label>
	<br/>

	<input type="submit" name="delete" id="button" value="Delete"/>
	<input type="submit" name="back" id="button" value="Back"/>
</form>
</body>
</html>