<?php

// Retreive the text content
$txt = file_get_contents('text.txt');

// Retreive all string that starts with [ and ends with ]
preg_match_all("|\[(.*)\]|U","$txt",$out, PREG_PATTERN_ORDER);

// Dump the results
echo "<pre>";
print_r($out);
echo "</pre>";

/**
 * Result is: 
 * (
 *   [0] => Array
 *       (
 *           [0] => [I]
 *           [1] => [can]
 *           [2] => [do]
 *           [3] => [this]
 *       )
 *   [1] => Array
 *       (
 *           [0] => I
 *           [1] => can
 *           [2] => do
 *           [3] => this
 *       )
 *
 * )
 */

// Check if we found a string
if(isset($out[1][0])){
    $string = "Result is: ";
    echo "<hr>"; // Line seperation
    // Loop the out array
    foreach($out[1] as $key=>$value){
        // Concatenate the values seperated by spaces
        $string .= $value." ";
    }
    // Echo the string minus 1 character to remove the extra space
    echo "<b>".substr($string, 0, -1)."</b>";
}

?>