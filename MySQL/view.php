<?php
include('config.php');

$std = "SELECT * FROM students";
$result = $conn->query($std);

echo '<table border = 1>';
    echo '<tr><th>Name</th><th>Gender</th><th>City</th></tr>';
foreach($result as $student) {
    echo '<tr>';
    echo '<td>'. $student['name']. '</td>';
    echo '<td>'. $student['gender']. '</td>';
    echo '<td>'. $student['city']. '</td>';
    echo '<br>';
    echo '</tr>';
};
echo '</table>';



?>
