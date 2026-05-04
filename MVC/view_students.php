<?php
include "config.php"; // Include database connection file

$sql = "SELECT * FROM students"; // Fetch all records from the students table
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
</head>
<body>
    <h2>Student Records</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Registration Number</th>
            <th>Department</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['registration_no']}</td>
                        <td>{$row['department']}</td>
                        <td><a href='edit_student.php?id={$row['id']}'>Edit</a></td>
                        <td><a href='delete_student.php?id={$row['id']}'>Delete</a></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>