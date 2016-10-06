<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=shift-jis" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://cuongpham.freevnn.com/cuongpv/school_manager/";?>"></base>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/form.css" type="text/css" />
	<title>Edit</title>
</head>
<body>
<div class="container">
<header>
	<h2> Add something</h2>
</header>
<div class="form-group">
<form method="post" action="">
	<label for="name">名前:</label>
	<input class="form-control" type="text" name="name" value="<?php echo isset($shiftjis['名前'])?$shiftjis['名前']:'';?>"/>
</div>
<div class="form-group" >
	<input type="submit" class="btn btn-info" value="Edit" name="edit">
	<input type="submit" class="btn btn-primary" value="Back" name="back">
</div>
</form>
</div>
</body>
</html>