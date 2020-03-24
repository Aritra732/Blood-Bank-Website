<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="project";
mysqli_connect("$db_host","$db_user","$db_pass") or die ("not connect");
mysqli_select_db("$db_name") or die ("No Database");



?>
