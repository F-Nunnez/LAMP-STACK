<?php

// $x = array(4, 6, 1, 3, 5, 7, 25);
$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");

function draw_stars($arr) {
    for($i = 0; $i < count($arr); $i++) {
        if (!is_string($arr[$i])) {
            for($j = 0; $j < $arr[$i]; $j++) {
                echo '*';
            }
        } else {
            for($k = 0; $k < strlen($arr[$i]); $k++) {
                echo $arr[$i][0];
            }
        }
        echo '<br>';
    }
}
draw_stars($x);

?>