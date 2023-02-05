<?php
	include_once '../include/passwords.php';
	$date = date("Y-m-d H:i:s"); 
	$sql="insert into ".$_POST['category']."(date_of_workout,weight,reps,notes)Values('".
	"$date"."','".$_POST['weight']."','".$_POST['reps']."','".$_POST['notes']."')";
	$conn->query($sql);
	header("Location: ../index.php");
?>
