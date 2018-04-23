<?php
		    $url = "https://node-accessable.herokuapp.com/users";
		    $json = file_get_contents($url);
		    $obj = json_decode($json);
$id= get['$obj->users[$i]->_id'];
$sql = "DELETE FROM todo WHERE $obj->users[$i]->_id=$id";
	?>	