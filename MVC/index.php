<?php
include 'config.php';

// Fetch student records
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .form-container {
            margin-bottom: 20px;
        }
        .form-container input, .form-container select {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .action-btn {
            background-color: #ff5722;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
        .action-btn:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Student Management Dashboard</h1>
</div>

<div class="container">
    <!-- Add Student Form -->
    <div class="form-container">
        <h2>Add New Student</h2>
        <form action="add_student.php" method="POST">
            <input type="text" name="name" placeholder="Student Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="registration_no" placeholder="Registration Number" required>
            <select name="department" required>
                <option value="">Select Department</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electrical Engineering">Electrical Engineering</option>
            </select>
            <button type="submit" class="btn">Add Student</button>
        </form>
    </div>

    <!-- Display Student Records -->
    <h2>Student Records</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Registration No</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['registration_no']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td>
                    <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn">Edit</a>
                    <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="action-btn">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>