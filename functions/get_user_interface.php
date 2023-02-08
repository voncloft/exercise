<?php
	include_once 'draw_aerobic.php';
	include_once 'draw_muscle.php';
	include_once 'show_history_func.php';
	include_once 'draw_weight.php';
	function get_user_interface($exercise_type,$category)
	{
		switch($exercise_type)
		{
			case "draw_aerobic";
				draw_aerobic($category);			
				break;
			case "show_history";
				show_workouts();
				break;
			case "draw_weight";
				draw_weight($category);
				break;
			default:
				draw_muscle($category);
			break;		
		}	
	}
?>
