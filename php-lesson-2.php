<?php

    //This is php comment

    /*
    This is a multiline comment in PHP
    */

    // Print somthing using variable.
    $variable_name = '<p>This is a paragraph</p>';
    echo $variable_name;

    // Assign two sentence in two variable (.) for concatenation.
    $string1 = "<p>We are learning PHP.";
    $string2 = "PHP is fun to learn.</p>";

    echo $string1." ".$string2; //Print two string, here we concatenate two sentences using (.) symbol.

    // Assign number in variable.
    $x = 10;
    $y = 10;

    // Bold and Italic showing two sentence one after another.
    $s1 = "This is a text";
    $s2 = "This is another text";

    echo "<i>".$s1. "</i><br><b>" .$s2."</b>";

    // Result showing as h1 heading.
    $a_number = 45;
    $b_number = 10;

    $z = "<h1>".$a_number*$b_number."</h1>";
    echo $z;

    // In PHP true means (1), and false means (nothing)
    $boolean_true = true;
    $boolean_false = false;

    echo "This is a boolean true ". $boolean_true. "<br>";
    echo "This is a boolean false". $boolean_false. "<br>";

?>