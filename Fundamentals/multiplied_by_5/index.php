<?php

$A = array(2, 4, 10, 16);

function multiply($arr, $var) {
    $result = array(); // Initialize an empty array to store the multiplied values

    // foreach ($arr as $value) {
    //     $result[] = $value *5;        
    // }
    // return $result;
    
    foreach ($arr as $value) {
        $result[] = $value *$var;        
    }
    return $result;
}
// $B = multiply($A);
$B = multiply($A, 2);  

var_dump($B); 

?>