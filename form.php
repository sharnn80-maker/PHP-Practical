
<?php
$name = $email = $mobile = "";
$errors = [];
$success = "";

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Name
    $name = trim($_POST["name"] ?? "");
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors[] = "Name must contain only letters and spaces.";
    }

    // Validate Email
    $email = trim($_POST["email"] ?? "");
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate Mobile Number
    $mobile = trim($_POST["mobile"] ?? "");
    if (empty($mobile)) {
        $errors[] = "Mobile number is required.";
    } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $errors[] = "Mobile number must contain exactly 10 digits.";
    }

    // Display result
    if (empty($errors)) {
        $success = "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>

    <?php
    foreach ($errors as $error) {
        echo "<p style='color:red;'>"
           . htmlspecialchars($error)
           . "</p>";
    }

    if ($success != "") {
        echo "<p style='color:green;'>"
           . htmlspecialchars($success)
           . "</p>";
    }
    ?>

    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name"
            value="<?php echo htmlspecialchars($name); ?>"
            required>
        <br><br>

        <label>Email:</label>
        <input type="text" name="email"
            value="<?php echo htmlspecialchars($email); ?>"
            required>
        <br><br>

        <label>Mobile Number:</label>
        <input type="text" name="mobile"
            value="<?php echo htmlspecialchars($mobile); ?>"
            maxlength="10" required>
        <br><br>

        <label>Gender:</label>
        <input type="radio" name="Gender">Female
        <input type="radio" name="Gender">Mele 
        <br><br>

        <label> City:</label>
         <select name="city">
            <option> Amritser </option>
            <option> Ludhiana </option>
            <option> Talwandi Sabo </option>
            <br><br>
</select>

        <input type="submit" value="Register">
    </form>
</body>
</html>
