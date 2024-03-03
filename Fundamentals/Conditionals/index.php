<?php

// if() {
//     echo 'this is true';
// }
// else {
//     echo 'this is not a lie';
// }

$name = 'Joey';
$on_guest_list = true;
$guest_number = 5;
$age = 33;
$party_message = '';

if($on_guest_list) {
    $party_message = 'Hey '. $name . '! Welcome to the party!';
}
else if($name == 'Joey') {
    $party_message = 'sorry ' .$name . '. You are not allowed';
}
else if($name == 'Sarah') {
    $party_message = 'sorry ' . $name . '. You are not allowed';
}
else if($guest_number > 10) {
    $party_message = 'sorry ' . $name . ', but we have too many partiers here!';
}
else if($age <= 20 ) {
    $party_message = 'sorry ' . $name . ', but you have '.$age_difference . 'more year(s) to go';
}
else {
    $party_message = 'Hey ' . $name . ', we are happy to have you';
}
echo $party_message;

$subject = "English";
var_dump($subject == 'Math');

$first_name = 'Oliver';
$roles = array('guest', 'member', 'admin');
$role = 0; // The key which associates with the $roles array
switch($first_name)
{
    case 'Tom':
        $role = 1;
    break;
    case 'Severus':
        $role = 1;
    break;
    case 'Oliver':
        $role = 2;
    break;    
}
echo "Hello $first_name ! Your role is $roles[$role]";



?>