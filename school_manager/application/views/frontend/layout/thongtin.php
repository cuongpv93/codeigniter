<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://cuongpham.freevnn.com/cuongpv/school_manager/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/home.css" type="text/css" />
	<title>Thông tin chi tiết</title>
</head>
<body>

<header>
	<h1> THÔNG TIN SINH SINH VIÊN</h1>
</header>
<section>
<table>
	<tr>
		<th>Họ tên</th>
		<th>MSSV</th>
		<th>Lớp</th>
		<th>Điểm</th>
		<th>Giáo viên phụ trách</th>
	</tr>
	
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
<?php echo '<a href="http://cuongpham.freevnn.com/cuongpv/school_manager/student/showlist">Back</a>' ?>
</section>
</body>
</html>
