<?php
// Get array values
function print_lists($A) {

    foreach($A as $values) {
        echo '<ul>
                <li>'.$values.'</li>
            </ul>';
    }
}
$A = array(2, 3, 'hello');
print_lists($A);
?>