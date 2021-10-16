<?php
	echo "Hello World!";

	// Dynamic List echo "<div>" echo"</div>" ------> showing as an element in the browser <div></div>
	
	echo "<div><ul>";
	for($i=1; $i<=7; $i++)
	{
		echo "<li>Item $i</li>";
	}
	echo "</ul></div>";
?>

	<!-- Static List, beacuse all the values are fixed! -->
<div>
	<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
		<li>Item 5</li>
		<li>Item 6</li>
		<li>Item 7</li>
	</ul>	
</div>