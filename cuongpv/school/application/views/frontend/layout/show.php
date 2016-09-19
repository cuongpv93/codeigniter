<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/cuongpv/school/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/home.css" type="text/css" />
	<title>Danh sách sinh viên</title>
</head>
<body>

<header>
	<h1> TRANG QUẢN LÝ SINH VIÊN</h1>
</header>
<section>
<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="http://localhost/cuongpv/school/sinhvien/addstudent">Thêm sinh viên</a>
    <a href="http://localhost/cuongpv/school/sinhvien/thongtin">Thông tin chi tiết</a>
    <a href="http://localhost/cuongpv/school/sinhvien/danhsach">Danh sách qua môn</a>
  </div>
</div>
<table>
	<tr>
		<th>Họ tên</th>
		<th>MSSV</th>
		<th>Lớp</th>
		<th>Điểm</th>
		<th>Thao tác</th>
	</tr>
	
	<h2> DANH SÁCH SINH VIÊN </h2><br/>
 	<?php if(isset($sinhvien)&&count($sinhvien)){ ?>
		<?php foreach ($sinhvien as $key => $value){ ?>
			 
			<tr>
				<td><?php echo $value['student'] ?></td>
				<td><?php echo $value['mssv'] ?></td>
				<td><?php echo $value['lop'] ?></td>
				<td><?php echo $value['diem'] ?></td>
 				<th><?php echo '<a href="http://localhost/cuongpv/school/sinhvien/deletestudent/'.$value['sid'].'">Delete</a>' ?> -   <?php echo '<a href="http://localhost/cuongpv/school/sinhvien/editstudent/'.$value['sid'].'">Edit</a>' ?>     </th>
			</tr>
			<?php
		}
	}
	?>
</table>

</section>
<footer>
	<h1> <a href="http://localhost/cuongpv/school/giaovien/show">TRANG QUẢN LÝ GIÁO VIÊN</a></h1>
</footer>
</body>
</html>
