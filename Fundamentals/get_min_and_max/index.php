<?php

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02 ); 

//$output should be equal to array('max' => 332, 'min' => 1.02);

function get_max_and_min($sample) {
    
    $max = $sample[0];
    $min = $sample[0];

    for ($i = 0; $i < count($sample); $i++) {
        if ($max < $sample[$i]) {
            $max = $sample[$i];
        }
    }

    for ($j = 0; $j < count($sample); $j++) {
        if ($min > $sample[$j]) {
            $min = $sample[$j];
        }
    }

    $sample = array('max' => $max, 'min' => $min);

    return $sample;
}

$output = get_max_and_min($sample); 
var_dump($output); 

?>