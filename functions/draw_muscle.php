<?php
	function draw_muscle($category)
	{
		echo "<center><form action='../scripts/muscle.php' method='post'>";		
		echo "<input type='hidden' name='category' id='category' value='".$category."'>";
		echo "<table><caption>".str_replace("_"," ",$category)."</caption>";
		echo "<tr><td><tr><td>Weight</td>";
		echo "<td><input type='text' name='weight' id='weight'></td></tr>";	
		echo "<tr><td><tr><td>Reps</td>";
		echo "<td><input type='text' name='reps' id='reps'></td></tr>";
		echo "<tr><td><tr><td>Notes</td>";
		echo "<td><input type='text' name='notes' id='notes'></td></tr>";
		echo "</td></tr></table>";
		echo "<input type='submit'>";
		echo "<br><a href=../index.php>Home</a>";		
		echo "</form>";
	}
?>