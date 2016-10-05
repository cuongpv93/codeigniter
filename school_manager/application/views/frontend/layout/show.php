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
	<title>Danh sách sinh viên</title>
</head>
<body>

<header>
	<h1> TRANG QUẢN LÝ SINH VIÊN</h1>
</header>
<section>
<div class="container">
<div class="dropdown">
  <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Menu</button>
  <ul class="dropdown-menu">
    <li><a href="http://cuongpham.freevnn.com/cuongpv/school_manager/sinhvien/addstudent">Thêm sinh viên</a></li>
    <li><a href="http://cuongpham.freevnn.com/cuongpv/school_manager/sinhvien/thongtin">Thông tin chi tiết</a></li>
    <li><a href="http://cuongpham.freevnn.com/cuongpv/school_manager/sinhvien/danhsach">Danh sách qua môn</a></li>
  </ul>
</div>
<table class="table table-bordered table-striped">
	<thead class="thead">
	<tr>
		<th>Họ tên</th>
		<th>MSSV</th>
		<th>Lớp</th>
		<th>Điểm</th>
		<th>Thao tác</th>
	</tr>
	</thead>
	<h2> DANH SÁCH SINH VIÊN </h2><br/>
 	<?php if(isset($sinhvien)&&count($sinhvien)){ ?>
		<?php foreach ($sinhvien as $key => $value){ ?>
			 
			<tr>
				<td><?php echo $value['student'] ?></td>
				<td><?php echo $value['mssv'] ?></td>
				<td><?php echo $value['lop'] ?></td>
				<td><?php echo $value['diem'] ?></td>
 				<th><?php echo '<a href="http://cuongpham.freevnn.com/cuongpv/school_manager/student/deletestudent/'.$value['sid'].'">Delete</a>' ?> -   <?php echo '<a href="http://cuongpham.freevnn.com/cuongpv/school_manager/student/editstudent/'.$value['sid'].'">Edit</a>' ?>     </th>
			</tr>
			<?php
		}
	}
	?>
</table>
</div>
</section>
<footer>
	<h1> <a href="http://cuongpham.freevnn.com/cuongpv/school_manager/teacher/show">TRANG QUẢN LÝ GIÁO VIÊN</a></h1>
</footer>
</body>
</html>
