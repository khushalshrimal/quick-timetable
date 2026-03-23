<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | Quick Timetable</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <nav>
    <h2>Quick Timetable</h2>
    <div class="nav-links">
      <a href="index.php">Home</a>
      <a href="register.php">Register</a>
      <a href="login.php">Login</a>
    </div>
  </nav>

  <div class="container">
    <div class="text-content">
      <h1>Welcome to Quick Timetable</h1>
      <p>Create and manage quick college timetables easily!</p>
    </div>

    <div class="form-card">
      <h2>Register</h2>
      <p>Enter your registration details here.</p>
      <form action="register_backend.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter Username" required>

        <label>Password:</label>
        <input type="text" name="password" placeholder="Enter Password" required>

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
  <?php include("include/footer.php"); ?>
</body>
</html>
