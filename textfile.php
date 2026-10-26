<?php

$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";

$name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

echo "Sanitized Name: " . $name . "<br>";
echo "Sanitized Email: " . $email;

?>

<form method="post">
    Name:
    <input type="text" name="name">
    <br><br>

    Email:
    <input type="text" name="email">
    <br><br>

    <input type="submit" value="Submit">
</form>