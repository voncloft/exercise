<?php
	include_once '../include/passwords.php';
	include_once 'database_exists.php';
	include_once 'get_user_interface.php';
	function draw_information($exercise_type,$category)
	{
		switch($exercise_type)
		{
			case "draw_aerobic";
			   check_if_db_exists($exercise_type,$category);
				get_user_interface($exercise_type,$category);
			break;
			case "draw_muscle";
				check_if_db_exists($exercise_type,$category);
				get_user_interface($exercise_type,$category);
			break;		
		}	
	}
?>