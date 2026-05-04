<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        // Show an alert with JavaScript after successful deletion
        echo "<script>
                alert('Student deleted successfully!');
                window.location.href = 'index.php'; // Redirect to the dashboard
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>