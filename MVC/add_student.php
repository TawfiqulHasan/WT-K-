<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $registration_no = $_POST['registration_no'];
    $department = $_POST['department'];

    $query = "INSERT INTO students (name, email, registration_no, department) VALUES ('$name', '$email', '$registration_no', '$department')";
    
    if (mysqli_query($conn, $query)) {
        // Show an alert with JavaScript after a successful insertion
        echo "<script>
                alert('Student added successfully!');
                window.location.href = 'index.php'; // Redirect to the dashboard
              </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>