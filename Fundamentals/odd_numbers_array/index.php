<?php
//Odd numbers arrays

$odd = 0;
for($i = 0; $i < 20000; $i++) {

    if($i % 2 != 0) {
        $odd = array($i);
    }
    var_dump($odd);
}

?>        