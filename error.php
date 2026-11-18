
<!DOCTYPE html>
<html>
<head>
    <title>PHP Error Handling</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
        }

        h2 {
            color: blue;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>PHP Basic Error Handling</h2>

    <?php

    try {

        $a = 10;
        $b = 0;

        if ($b == 0) {
            throw new Exception("Division by zero is not allowed!");
        }

        $result = $a / $b;

        echo "<p class='success'>Result: $result</p>";

    }

    catch (Exception $e) {

        echo "<p class='error'>";
        echo "Error: " . $e->getMessage();
        echo "</p>";

    }

    finally {

        echo "<p>Program execution completed.</p>";

    }

    ?>

</div>

</body>
</html>
