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
	<link rel="stylesheet" href="public/template/frontend/layout/css/home.css" type="text/css" />
	<title>Danh sách qua môn</title>
</head>
<body>
<header>
	<h1> THÔNG TIN SINH SINH VIÊN</h1>
</header>
<div class="container">
<section>
	<h2> DANH SÁCH SINH VIÊN QUA MÔN</h2><br/>
<table class="table table-bordered table-striped">
<thead class="thead">
	<tr>
		<th>Họ tên</th>
		<th>MSSV</th>
		<th>Lớp</th>
		<th>Điểm</th>
	</tr>
</thead>
 	<?php if(isset($danhsach)&&count($danhsach)){ ?>
		<?php foreach ($danhsach as $key => $value){ ?>
			 
			<tr>
				<td><?php echo $value['student'] ?></td>
				<td><?php echo $value['mssv'] ?></td>
				<td><?php echo $value['lop'] ?></td>
				<td><?php echo $value['diem'] ?></td>
			</tr>
			<?php
		}
	}
	?>
</table>
<a href="http://cuongpham.freevnn.com/cuongpv/school_manager/sinhvien/showlist" class="btn btn-info" role="button">Back</a>
</section>
</div>
</body>
</html>
