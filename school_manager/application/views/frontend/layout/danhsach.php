<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://cuongpham.freevnn.com/cuongpv/school_manager/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/home.css" type="text/css" />
	<title>Danh sách qua môn</title>
</head>
<body>

<header>
	<h1> THÔNG TIN SINH SINH VIÊN</h1>
</header>
<section>
	<h2> DANH SÁCH SINH VIÊN QUA MÔN</h2><br/>
<table>
	<tr>
		<th>Họ tên</th>
		<th>MSSV</th>
		<th>Lớp</th>
		<th>Điểm</th>
	</tr>
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
<a id="back" href="http://localhost/cuongpv/school/sinhvien/showlist">Back</a>
</section>
</body>
</html>
