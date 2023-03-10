<?php
	include_once '../include/passwords.php';
	function check_if_db_exists($exercise_type,$category)
	{
		global $conn;
		switch($exercise_type)	
		{
			case "draw_aerobic";
				$sql="Create table if not exists ".$category."(".
				"id int not null auto_increment,	".
				"date_of_workout date, ".
				"duration int, ".
				"distance double, ".
				"cals_burned double, ".
				"notes text, ".
				"primary key (id))";
				$conn->query($sql);
			break;
			case "draw_muscle";
				$sql="Create table if not exists ".$category."(".
				"id int not null auto_increment,	".
				"date_of_workout date, ".
				"weight int, ".
				"reps int, ".
				"notes text, ".
				"primary key (id))";	
				 $conn->query($sql);		
			break;
			case "draw_weight";
				$sql="Create table if not exists ".$category."(".
				"id int not null auto_increment,	".
				"date_of_workout date, ".
				"weight double, ".
				"primary key (id))";	
				 $conn->query($sql);		
			break;
	}
}
?>
