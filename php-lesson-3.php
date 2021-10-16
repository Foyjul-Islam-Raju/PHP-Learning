<?php

	// Array Declaration in PHP
	$an_array = array("itme 1", "item 2", "item 3", 5 , 10, 11.2);

	// Print indvidual element in array
	echo $an_array[5];

	// print for printing and r for reo, whatever in array print everything with index.
	print_r($an_array);

	// replace array element
	$an_array[1] = "new value";

	// remove specific array element using unset
	unset($an_array[3]);

	// push something in array element. it push element at the last index of the array.
	array_push($an_array, "something");

	print_r($an_array);

	// Concatenate array elements
	echo "<p>".$an_array[0]. $an_array[1]."</p>";

	// Associative array
	$raju = array(

		"Name" => "Foyjul Islam Raju",
		"ID" => 181472094,
		"CGPA" => 3.87,
		"Address" => "Sylhet",
		"University" => "City University",
	);

	$tamal = array(

		"Name" => "Tamal Majumdar",
		"ID" => 181472039,
		"CGPA" => 3.71,
		"Address" => "Jhalokathi",
		"University" => "City University",
	);

	$some_student = array(

		"Name" => "Some Student",
		"ID" => 181472010,
		"CGPA" => 2.75,
		"Address" => "Mirpur",
		"University" => "City University",
	);


echo "<br>";
?>

<!------------------------------------------------------------------------------------------------------------------>
<?php 

	$id = 181472010;
	$cgpa = $some_student["CGPA"];
	$quality = "";
	
	if($cgpa >= 3.5)
	{
		$quality = "good";
	}
	else
	{
		$quality = "moderate";
	}
	
	if($id == $raju["ID"])
	{
?>

	<p>
		The name of the student is <?php echo $raju["Name"]; ?>. His ID is <?php echo $raju["ID"]; ?>. 
		His cgpa is <?php echo $raju["CGPA"]; ?>. That means he is a <?php echo $quality; ?> student. 
		He is from <?php echo $raju["Address"]; ?> and he studies in <?php echo $raju["University"]; ?>.
	</p>

<?php }//this php block use only for closing "}" bracket ?>
<!------------------------------------------------------------------------------------------------------------------>

<!------------------------------------------------------------------------------------------------------------------>
<?php 

	if($id == $tamal["ID"]){
?>
	<p>
		The name of the student is <?php echo $tamal["Name"]; ?>. His ID is <?php echo $tamal["ID"]; ?>. 
		His cgpa is <?php echo $tamal["CGPA"]; ?>. That means he is a <?php echo $quality; ?> student. 
		He is from <?php echo $tamal["Address"]; ?> and he studies in <?php echo $tamal["University"]; ?>.
	</p>

<?php }//this php block use only for closing "}" bracket ?>
<!------------------------------------------------------------------------------------------------------------------>

<!------------------------------------------------------------------------------------------------------------------>
<?php 

	if($id == $some_student["ID"])
	{
?>

	<p>
		The name of the student is <?php echo $some_student["Name"]; ?>. His ID is <?php echo $some_student["ID"]; ?>. 
		His cgpa is <?php echo $some_student["CGPA"]; ?>. That means he is a <?php echo $quality; ?>  student. 
		He is from <?php echo $some_student["Address"]; ?> and he studies in <?php echo $some_student["University"]; ?>.
	</p>

<?php }//this php block use only for closing "}" bracket ?> 
<!------------------------------------------------------------------------------------------------------------------>