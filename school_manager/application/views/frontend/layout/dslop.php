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
	<title>Danh sách lớp học</title>
</head>
<body>
<header>
	<h1>QUẢN LÝ LỚP HỌC</h1>
</header>
	<div class="container">
		<h2>Danh sách lớp học</h2>
		<table class="table table-bordered table-striped" id="table">
			<thead class="thead">
				<tr>
					<th>Lớp</th>
					<th>Giáo viên phụ trách</th>
				</tr>
			</thead>
			<tbody>
				<?php if(isset($lop)&&count($lop)){ ?>
					<?php foreach ($lop as $key => $value){ ?>
						<tr>
							<td><?php echo $value['lop']; ?></td>
							<td><?php echo $value['teacher']; ?></td>
						</tr>
					<?php
					}
				}  ?>
			</tbody>
			<script type="text/javascript">
				$(document).ready(function(){
					$("#table").each(function(){
						var col_num = 1;
						var pre_td = null;
						var i = 1;
						$("tbody",this).find("tr").each(function(){
							var cur_td = $(this).find("td:nth-child("+col_num+")");

							if (pre_td == null) {
								pre_td = cur_td;
								i=1;
							} else if (cur_td.text() == pre_td.text()) {
								cur_td.remove();
								pre_td.attr("rowspan",i+1);
								pre_td.attr("valign","middle");
								i=i+1;
							} else {
								pre_td = cur_td;
								i=1;
							}
						});
					});
				});
			</script>
		</table>
		<a class="btn btn-primary" href="http://cuongpham.freevnn.com/cuongpv/school_manager/giaovien/show">Back</a>
	</div>
</body>
</html>


