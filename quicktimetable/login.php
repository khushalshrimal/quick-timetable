<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | Quick Timetable</title>
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
      <h1>Welcome Back!</h1>
      <p>Login to manage your college timetable.</p>
    </div>

    <div class="form-card">
      <h2>Login</h2>
      <form action="login_backend.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter Username" required>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter Password" required>

        <button type="submit">Login</button>
      </form>
    </div>
  </div>
  <?php include("include/footer.php"); ?>
</body>
</html>
