
<!DOCTYPE html>
<html>
<head>
    <title>Input Sanitization</title>
</head>
<body>

<form method="post">
    Enter Name: <input type="text" name="name"><br><br>
    Enter Email: <input type="text" name="email"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {

    // Sanitize user input
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    // Validate email
    if ($email !== false && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Name: " . $name . "<br>";
        echo "Email: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    } else {
        echo "Invalid email address!";
    }
}
?>

</body>
</html>