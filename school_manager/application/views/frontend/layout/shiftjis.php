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
	<link rel="stylesheet" href="public/template/frontend/layout/css/home.css" type="text/css" />
	<title>Shift-JIS</title>
</head>
<body>
	<div class="container">
	<h1> Test Shift JIS</h1>
		<table class="table table-bordered table-striped">
			<thead class="thead">
				<tr>
					<th>#</th>
					<th>名前</th>
				</tr>
			</thead>
			<?php foreach ($name as $key => $value) { ?>
			<tr>
				<td><?php echo $value['id'] ?></td>
				<td><?php echo $value['名前'] ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>