		<?php
		    $url = "https://node-accessable.herokuapp.com/users";
		    $json = file_get_contents($url);
		    $obj = json_decode($json);


		?>	

		<!DOCTYPE html>
		<html>
		<head>
			<title>ADMIN</title>

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="admin.css">
		</head>
		<body>
			<div class="main">
		<div id ="menu">
			<ul>
				<li><a href="https://admin-php.herokuapp.com/admin.php#">Người dùng </a>
				</li>
				<li><a href="https://admin-php.herokuapp.com/tags.php?>">Môn học</a>
				</li>
				<li><a href="#">icon1</a></li>
				<li><a href="#">icon1</a></li>
				<li><a href="#">icon1</a></li>
				<li><a href="#">icon1</a></li>
				<li><a href="#">icon1</a></li>
				<li><a href="#">icon1</a></li>
			</ul>
		</div>
		<div id="table">
			<h1 align="center">Danh sách người sử dụng</h1>
			<table class="table table-dark">
				<thead>
					<th>Họ và tên </th>
					<th>Số Điện Thoại </th>
					<th>Địa chỉ </th>
					<th>Môn học đăng kí</th>
					<th>Địa chỉ </th>
					<th>Môn học đăng kí</th>	
				</thead>		
				<?php
				for ($i=0; $i <count($obj->users)  ; $i++) { 
					echo "<tr>";
					echo "<td>";
					echo $obj->users[$i]->fullname;
					echo "</td>";
					echo "<td>";
					echo $obj->users[$i]->phone;
					echo "</td>";
					echo "<td>";

					echo "</td>";
					echo "<td>";
					echo "</td>";
					echo "<td>";
					echo "</td>";
					echo "<td>";
					echo "</td>";
					echo "</tr>";



							}
				?>
				<table>
				<tr>
					<td><button>Thêm</button></td>
					<td><button>xóa</button></td>
					<td><button>Sửa</button></td>
				<td><button>làm mới</button></td>
				</tr>
				</table>
		</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
		</html>
