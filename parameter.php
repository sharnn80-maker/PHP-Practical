
<?php
function rectangleArea($length, $width) {
    $area = $length * $width;
    return $area;
}
// calling the function 
$l=10;
$w=5;
$result = rectangleArea($l,$w);

echo"length = $l\n";
echo"width = $w\n";
echo "Area of Rectangle = $result";
?>
