
<?php
$a = 10;
$b = 25;
$c = 15;

if ($a > $b) {
    if ($a > $c) {
        echo "$a is the largest number";
    } else {
        echo "$c is the largest number";
    }
} else {
    if ($b > $c) {
        echo "$b is the largest number";
    } else {
        echo "$c is the largest number";
    }
}
?>
