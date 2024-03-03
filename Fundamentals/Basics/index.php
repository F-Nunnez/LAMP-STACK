<?php
echo "Helolo Dojo!";
print "Yay, Coding";
echo "Welcome!";
?>

<?php
// Commenting a line
// We can even comment out a code: echo "Hello World!";
?>

<?php
/*
    commenting stuff
    we can also comment code blocks
    someFunction(veryIntimidating){
        return $sumething;
    }
*/
?>

<?php
$first_name = 'Randal';
$last_name = 'Frisk';
$name = 'Shiryu';
$ocupation = 'Developer';

// echo $first_name;
// echo $last_name;
// echo $name;
// echo $ocupation;

echo "My name is $first_name $last_name and my ocupation is $ocupation";
?>

<h1 class="<?php echo $class_name; ?>">Hello World!</h1>

<h1>Hello, <?php echo $name; ?></h1>

<?php 
// PHP can dynamically change content and can be embeded in between HTML tags.
?>

<table>
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $name; ?></td>
        </tr>
    </tbody>
</table>

