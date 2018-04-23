	<?php
	    $url = "https://node-accessable.herokuapp.com/tags";
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
			<li><a href="https://admin-php.herokuapp.com/tags.php?>">Môn Học</a>
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
		<h1 align="center">Danh sách Môn học</h1>
		<table class="table">
			<thead>
				<th>Tên môn học</th>
				<th>Màu </th>
				<th>Sô lượng người đã đăng kí </th>
				<th></th>
			</thead>
			<?php
			for ($i=0; $i <count($obj->tags)  ; $i++)
			 { 
				echo "<tr style=\" background-color:" . $obj->tags[$i]->color."\">";
				echo "<td>";
				echo $obj->tags[$i]->name;
				echo "</td>";
				echo "<td>";
				echo $obj->tags[$i]->color;	
				echo "</td>";
				echo "<td>";
				echo count($obj->tags[$i]->users);
				echo "</td>";
				echo "<td>";
				echo "</td>";
				echo "<td>";
				echo "</td>";
				echo "<td>";
				echo "<Form action=\"https://node-accessable.herokuapp.com/users/{$obj->tags[$i]->_id}/delete\"method=\"get\">";
				echo "<button>";
				echo "xóa";	
				echo "</button>";	
					echo "</form>";
				echo "</td>";
				echo "</tr>";

						}
			?>
		
			</table>
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>
