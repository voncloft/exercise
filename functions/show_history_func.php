<?php
include_once '../include/passwords.php';
function show_workouts()
{
	global $conn;
	echo "<center>";
	$counter=0;
	$showtables= mysqli_query($conn, "SHOW TABLES FROM exercise");	
	echo "<table width=100%><caption><h1>Exercise History</h1></caption><tr>";
	while($table = mysqli_fetch_array($showtables))
	{
		if($counter % 2 == 0)
		{
			echo "</td></tr><tr><td valign='top'>";
		}
		else {
			echo "<td valign='top'>";
		}	
		$sql = 'SELECT * FROM '.$table[0];
		$result = mysqli_query($conn, $sql);
		echo '<table border=2 width=95%><caption>'.$table[0];
		echo "<tr>";
		while ($col = $result->fetch_field()) {
    		echo "<th>" . str_replace("_"," ",$col->name) . "</th>";
		}
		echo "</tr>";
		if ($result->num_rows > 0) {
    		while ($row = $result->fetch_assoc()) {
        	echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
	}
	echo '</table><br></td>';
	$counter++;	
	}

}
?>