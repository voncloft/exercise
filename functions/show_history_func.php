<?php
include_once '../include/passwords.php';
function show_workouts()
{
	global $conn;
	echo "<center>";
	$showtables= mysqli_query($conn, "SHOW TABLES FROM exercise");	
	while($table = mysqli_fetch_array($showtables))
	{
		$sql = 'SELECT * FROM '.$table[0];
		$result = mysqli_query($conn, $sql);
		echo '<table border=2><caption>'.$table[0];
		echo "<tr>";
		while ($col = $result->fetch_field()) {
    		echo "<th>" . $col->name . "</th>";
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
	echo '</table><br>';
	}
echo "<a href=../index.php>Home</a>";
}
?>