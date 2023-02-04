<?php
	include_once '../include/passwords.php';
	$date = date("Y-m-d H:i:s"); 
	$sql="insert into ".$_POST['category']."(date_of_workout,duration,distance,notes)Values('".
	"$date"."','".$_POST['duration']."','".$_POST['distance']."','".$_POST['notes']."')";
	$conn->query($sql);
	echo $sql;
?>