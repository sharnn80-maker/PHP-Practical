<?php
$students = array(
    "Rahul" => 85,
    "Priya" => 92,
    "Amit"  => 78,
    "Sneha" => 88
);

// Display the associative array
echo "student marks list:<br>";
foreach ($students as $name => $marks) {
    echo "$name : $marks <br>";
}
echo "/n using print_r: <br>";
print_r($students);
?>