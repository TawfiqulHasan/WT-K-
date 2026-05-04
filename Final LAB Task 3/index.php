<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Student Registration Form</h2>
    <form action="process.php" method="POST">
      <table>
        <tr>
          <td><label for="full_name">Full Name:</label></td>
          <td><input type="text" name="full_name" id="full_name" required></td>
        </tr>

        <tr>
          <td><label for="email">Email Address:</label></td>
          <td><input type="email" name="email" id="email" required></td>
        </tr>

        <tr>
          <td><label for="username">Username:</label></td>
          <td><input type="text" name="username" id="username" required></td>
        </tr>

        <tr>
          <td><label for="password">Password:</label></td>
          <td><input type="password" name="password" id="password" required></td>
        </tr>

        <tr>
          <td><label for="confirm_password">Confirm Password:</label></td>
          <td><input type="password" name="confirm_password" id="confirm_password" required></td>
        </tr>

        <tr>
          <td><label for="age">Age:</label></td>
          <td><input type="number" name="age" id="age" required></td>
        </tr>

        <!-- Gender Section -->
        <tr>
          <td><label>Gender:</label></td>
          <td>
            <table>
              <tr>
                <td><input type="radio" name="gender" value="male" id="male" required> Male</td>
                <td><input type="radio" name="gender" value="female" id="female" required> Female</td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- Course Selection Section -->
        <tr>
          <td><label for="course">Course:</label></td>
          <td>
            <select name="course" id="course" required>
              <option value="">Select a course</option>
              <option value="cse">CSE</option>
              <option value="eee">EEE</option>
              <option value="bba">BBA</option>
            </select>
          </td>
        </tr>

        <!-- Terms and Conditions Section -->
        <tr>
          <td><label>Terms & Conditions:</label></td>
          <td><input type="checkbox" name="terms" id="terms" required> I accept the terms and conditions</td>
        </tr>

        <tr>
          <td colspan="2"><button type="submit">Register</button></td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>