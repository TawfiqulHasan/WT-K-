<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $student = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    $query = "UPDATE students SET name = '$name', email = '$email', department = '$department' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        // Show an alert with JavaScript after the update
        echo "<script>
                alert('Student updated successfully!');
                window.location.href = 'index.php'; // Redirect to the dashboard
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <input type="text" name="name" value="<?php echo $student['name']; ?>" required>
    <input type="email" name="email" value="<?php echo $student['email']; ?>" required>
    <select name="department" required>
        <option value="Computer Science" <?php echo $student['department'] == 'Computer Science' ? 'selected' : ''; ?>>Computer Science</option>
        <option value="Mechanical Engineering" <?php echo $student['department'] == 'Mechanical Engineering' ? 'selected' : ''; ?>>Mechanical Engineering</option>
        <option value="Electrical Engineering" <?php echo $student['department'] == 'Electrical Engineering' ? 'selected' : ''; ?>>Electrical Engineering</option>
    </select>
    <button type="submit" class="btn">Update Student</button>
</form>
