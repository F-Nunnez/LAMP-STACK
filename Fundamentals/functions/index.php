<?php
// Functions

function print_array($array) {
    echo "There are ". count($array)." values in the array.<br />";
    foreach($array as $value) {
        echo $value ."<br />";
    }
}
$samples = array("abc", "def", "ghi");
print_array($samples);
// echo "There are ".count($sanples)." values in the array.<br />";
// foreach($samples as $value) {
//     echo $value ."<br />"
// }

$samples = array("John", "Noah", "Mark");
// echo "Ther are " .count($samples). " values in the array.<br />";
// foreach($samples as $value) {
//     echo $value ."<br />";
// }

$samples = array(13, 52, 22);
// echo "There are " . count($samples). " values in the array.<br />";
// foreach($samples as $value) {
//     echo $value ."<br />";
// }

?>