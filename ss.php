<?php
$url="https://node-accessable.herokuapp.com/users"
$json=file_get_contents($url);
$obj=json_decode($json);
echo "<pre>";
print_r($obj)
echo "</pre";
?>		