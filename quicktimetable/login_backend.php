<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM timetable WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result && $result->num_rows === 1) {
        header("Location: generator.php");
        exit();
    } else {
        echo "Invalid login. <a href='login.php'>Try again</a>";
    }
}
?>
