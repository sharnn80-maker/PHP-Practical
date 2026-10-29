<?php
$fruits = array("Apple", "Banana", "Mango");

// Display the array elements
echo $fruits[0] . "<br>";
echo $fruits[1] . "<br>";
echo $fruits[2]  . "<br>";
?>


<?php
$fruits = ["Apple", "Banana", "Mango"];

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}
?>