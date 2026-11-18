
<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $feedback = trim($_POST["feedback"]);

    if ($name != "" && $email != "" && $feedback != "") {

        $data = "Name: $name\n";
        $data .= "Email: $email\n";
        $data .= "Feedback: $feedback\n";
        $data .= "--------------------------\n";

        file_put_contents(
            "feedback.txt",
            $data,
            FILE_APPEND | LOCK_EX
        );

        $message = "Thank you! Your feedback has been saved.";

    } else {
        $message = "Please fill all the fields.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: blue;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
        }

        .message {
            text-align: center;
            color: green;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Feedback Form</h2>

    <form method="POST" action="">

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Feedback:</label>
        <textarea name="feedback" rows="5" required></textarea>

        <button type="submit">Submit Feedback</button>

    </form>

    <p class="message">
        <?php echo htmlspecialchars($message); ?>
    </p>

</div>

</body>
</html>
