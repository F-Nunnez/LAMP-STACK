<?php

$users = array();

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

function keys_and_values($users) {
    print_r('There are '.count($users).' keys in this array:<br>');

    foreach($users as $values) {
        array_keys($users);
        //print_r('The value in the key '.array_keys($users). ' is '.$values.'<br>')

    }
}
keys_and_values($users);

?>