<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta author="Cuong PV" />
	<base href="<?php echo "http://localhost/school_manager/";?>"></base>
	<link rel="stylesheet" href="public/template/frontend/layout/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="public/template/frontend/layout/css/home.css" type="text/css" />
	<title>Danh sách giáo viên</title>
</head>
<body>

<header>
	<h1> TRANG QUẢN LÝ GIÁO VIÊN</h1>
</header>
<section>
<table>
	<tr>
		<th>ID</th>
		<th>Họ tên</th>
		<th>Lớp phụ trách</th>
		<th>Thao tác</th>
	</tr>
	
	<h2> DANH SÁCH GIÁO VIÊN </h2><br/>
 	<?php if(isset($giaovien)&&count($giaovien)){ ?>
		<?php foreach ($giaovien as $key => $value){ ?>
			 
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['teacher'] ?></td>
				<td><?php echo $value['lop'] ?></td>
 				<th><?php echo '<a href="http://localhost/cuongpv/school/giaovien/deleteteacher/'.$value['tid'].'">Delete</a>' ?> -   <?php echo '<a href="http://localhost/cuongpv/school/giaovien/editteacher/'.$value['tid'].'">Edit</a>' ?>     </th>
			</tr>
			<?php
		}
	}
	?>
</table>
<?php echo '<a href="http://localhost/cuongpv/school/giaovien/addteacher">Add</a>' ?>
</section>
<footer>
	<footer>
	<h1> <a href="http://localhost/cuongpv/school/sinhvien/showlist">TRANG QUẢN LÝ SINH VIÊN</a></h1>
</footer>
</footer>
</body>
</html>