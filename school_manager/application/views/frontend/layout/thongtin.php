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
	<title>Thông tin chi tiết</title>
</head>
<body>

<header>
	<h1> THÔNG TIN SINH SINH VIÊN</h1>
</header>
<div class="container">
<section>
<table class="table table-bordered table-striped">
<thead class="thead">
	<tr>
		<th>Họ tên</th>
		<th>MSSV</th>
		<th>Lớp</th>
		<th>Điểm</th>
		<th>Giáo viên phụ trách</th>
	</tr>
</thead>	
	<h2> DANH SÁCH SINH VIÊN </h2><br/>
 	<?php if(isset($thongtin)&&count($thongtin)){ ?>
		<?php foreach ($thongtin as $key => $value){ ?>
			 
			<tr>
				<td><?php echo $value['student'] ?></td>
				<td><?php echo $value['mssv'] ?></td>
				<td><?php echo $value['lop'] ?></td>
				<td><?php echo $value['diem'] ?></td>
				<td><?php echo $value['teacher'] ?></td>
			</tr>
			<?php
		}
	}
	?>
</table>
<a class="btn btn-info" href="http://localhost/cuongpv/school/sinhvien/showlist">Back</a>
</section>
</div>
</body>
</html>
