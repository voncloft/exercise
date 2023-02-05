<?php
	include_once '../include/passwords.php';
	date_default_timezone_set('America/Indianapolis');
	$date = date("Y-m-d H:i:s"); 
	echo $date;
	$sql="insert into ".$_POST['category']."(date_of_workout,duration,distance,notes,cals_burned)Values('".
	"$date"."','".$_POST['duration']."','".$_POST['distance']."','".$_POST['notes']."','".$_POST['cals_burned']."')";
	$conn->query($sql);
	echo $sql;
?>