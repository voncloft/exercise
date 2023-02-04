<?php
	function draw_aerobic($category)
	{
		echo "<form action='../scripts/aerobic.php' method='post'>";	
		echo "<input type='hidden' name='category' id='category' value='".$category."'>";	
		echo "<table>";
		echo "<tr><td><tr><td>Duration</td>";
		echo "<td><input type='text' name='duration' id='duration'></td></tr>";	
		echo "<tr><td><tr><td>Cals burned</td>";
		echo "<td><input type='text' name='cals_burned' id='calories burned'></td></tr>";
		echo "<tr><td><tr><td>Distance</td>";
		echo "<td><input type='text' name='distance' id='distance'></td></tr>";
		echo "<tr><td><tr><td>Notes</td>";
		echo "<td><input type='text' name='notes' id='notes'></td></tr>";
		echo "</td></tr></table>";
		echo "<input type='submit'>";
		echo "</form>";
		echo "<a href=../index.php>Home</a>";
	}
?>

