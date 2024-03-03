<?php 
$students = array();

$students[] = "Randal";
$students[] = "Michael";
$students[] = "Charles";

echo "This is student 0: " . $students[0] . '<br>';
echo "This is student 1: " . $students[1] . '<br>';
echo "This is student 2: " . $students[2] . '<br>';

$likes = array("Oliver" => "Video games", "Dan" => "Football", "Melody" => "Ping pong");
// take note of the syntax. We use => symbol to point the key to the value.

echo $likes['Dan'];
//prints out "Football";

?>


