<?php

$input = [-1,1,0,-3,3];
$output = [];

$len = count($input);

for($i=0; $i<$len; $i++) {
	$temp_array = $input; // store the initial array in temp variable
	$num = 1;
	unset($temp_array[$i]); // delete the current index value
	$temp_array = array_values($temp_array); // reset the array indexes starts from 0
	for($j=0; $j<count($temp_array); $j++) {
		$num = $num * $temp_array[$j]; // multiply all other elements in array
	}
	$output[] = $num; // store in output array
}

print_r($output);