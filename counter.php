
<?php

$file = "counter.txt";

// Check whether the file exists
if (!file_exists($file)) {
    file_put_contents($file, "0");
}

// Read current visitor count
$count = (int) file_get_contents($file);

// Increase visitor count
$count++;

// Save updated count
file_put_contents($file, $count);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        h2 {
            color: blue;
        }

        .count {
            color: green;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Website Visitor Counter</h2>

    <p>Welcome to our website!</p>

    <p>Total Visitors:</p>

    <div class="count">
        <?php echo $count; ?>
    </div>

</div>

</body>
</html>
