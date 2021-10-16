<?php

	$user_array = array("Mehedi", "Rahat", "Lutfar", "Nandita");

	//echo sizeof($user_array); for knowing the array size

	for($i = 0; $i < sizeof($user_array); $i++)
	{
		echo $user_array[$i]."<br>";
	}

	// Associative array
	$some_student = array
	(
		"Name" => "Some Student",
		"SID" => 181472010,
		"CGPA" => 2.75,
		"Address" => "Mirpur",
		"University" => "City University",

	);

	// If we use foreach then there is no need to use index. We get each element by using this!

	// For value only
	foreach($some_student as $value)
	{
		echo $value."<br>";
	}

	// For key => value pair
	foreach($some_student as $key => $value)
	{
		echo $key.": ".$value."<br>";
	}

	// while loop
	$x = 0;
	while($x < sizeof($user_array))
	{
		echo $user_array[$x]."<br>";
		$x++;
	}
?>