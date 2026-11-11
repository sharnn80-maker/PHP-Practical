<?php
// Main PHP Program
// Demonstration of include and require

echo "<html>";
echo "<head>";
echo "<title>Include and Require Example</title>";
echo "</head>";

echo "<body>";

// Using include statement
include 'page.php';

echo "<h2>Using INCLUDE Statement</h2>";

include 'student.php';

// Using require statement
require 'config.php';

echo "<h2>Using REQUIRE Statement</h2>";

echo "College Name: " . $college_name . "<br>";
echo "College Address: " . $college_address . "<br>";
echo "College Email: " . $college_email . "<br>";

// Including footer file
include 'visit.php';

echo "</body>";
echo "</html>";

?>
