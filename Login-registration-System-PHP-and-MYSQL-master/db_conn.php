<?php

$sname= "localhost";
$unmae= "id19906123_ilaina1";
$password = "#Todisoa280697";

$db_name = "id19906123_base";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}