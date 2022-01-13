<?php

// Retreive the text content
$txt = file_get_contents('text.txt');

// Retreive all string that starts with [ and ends with ]
preg_match_all("|\[.*\]|U","$txt",$out, PREG_PATTERN_ORDER);

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
 *
 * )
 */

?>