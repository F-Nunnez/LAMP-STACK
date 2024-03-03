<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>User #</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Full Name</th>
    <th>Full Name in upper case</th>
    <th>Length of FN</th>
  </tr>

<?php
    $users = array( 
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel') 
    );

    function keys_and_values($users) {
        $userNumber = 1;
        foreach($users as $user) {
            echo "<tr>";
            echo "<td>".$userNumber."</td>";
            echo "<td>".$user['first_name']."</td>";
            echo "<td>".$user['last_name']."</td>";
            echo "<td>".$user['first_name']." ". $user['last_name']."</td>";
            echo "<td>".strtoupper($user['first_name'])." ". strtoupper($user['last_name'])."</td>";
            echo "<td>".strlen($user['first_name'].trim(" ").$user['last_name'])."</td>";
            echo "</tr>";
            $userNumber++;

        }
    }
    keys_and_values($users);    

?>
</table>

</body>
</html>






