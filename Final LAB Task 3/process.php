<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Collect form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $terms = isset($_POST['terms']) ? $_POST['terms'] : null;

    // 1. All fields must not be empty
    if (empty($full_name) || empty($email) || empty($username) || empty($password) || empty($confirm_password) || empty($age) || empty($gender) || empty($course) || !$terms) {
        $errors[] = "All fields must be filled.";
    }

    // 2. Full Name must contain only letters and spaces
    if (!preg_match("/^[a-zA-Z ]*$/", $full_name)) {
        $errors[] = "Full Name must contain only letters and spaces.";
    }

    // 3. Email must be a valid email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // 4. Username must be at least 5 characters long
    if (strlen($username) < 5) {
        $errors[] = "Username must be at least 5 characters long.";
    }

    // 5. Password must be at least 6 characters long
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    // 6. Password and Confirm Password must match
    if ($password !== $confirm_password) {
        $errors[] = "Password and Confirm Password must match.";
    }

    // 7. Age must be 18 or above
    if ($age < 18) {
        $errors[] = "You must be 18 years or older.";
    }

    // 8. Gender must be selected
    if (!isset($gender)) {
        $errors[] = "Gender must be selected.";
    }

    // 9. Course must be selected
    if (empty($course)) {
        $errors[] = "Course must be selected.";
    }

    // 10. Terms & Conditions must be checked
    if (!$terms) {
        $errors[] = "You must accept the terms and conditions.";
    }

    // If no errors, show success message
    if (empty($errors)) {
        echo "<h2>Registration Successful!</h2>";
        echo "Full Name: " . htmlspecialchars($full_name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        echo "Course: " . htmlspecialchars($course) . "<br>";
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
} else {
    // Redirect back to registration form if accessed directly
    header("Location: index.php");
    exit();
}
?>