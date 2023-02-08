<?php
	include_once '../include/passwords.php';
	$date = date("Y-m-d H:i:s"); 
	$sql="insert into ".$_POST['category']."(date_of_workout,weight)Values('".
	"$date"."','".$_POST['weight']."')";
	$conn->query($sql);
	header("Location: ../index.php");
?>
