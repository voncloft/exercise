<?php
	include_once 'draw_aerobic.php';
	include_once 'draw_muscle.php';
	function get_user_interface($exercise_type,$category)
	{
		switch($exercise_type)
		{
			case "draw_aerobic";
				draw_aerobic($category);			
				break;
			default:
				draw_muscle($category);
			break;		
		}	
	}
?>