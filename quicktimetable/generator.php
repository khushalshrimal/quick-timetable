<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School Time Table Generator</title>
  <link rel="stylesheet" href="generate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <?php include("include/header.php"); ?>
</head>
<body>
  <header >
    <h1>📅 School Time Table Generator</h1> 
  </header>

  <main>
    <section class="form-section container">
      <h2>Create Your Timetable</h2>
      <form id="timeTableForm">
        <label>No. of Days:</label>
        <input type="number" id="days" min="1" max="7" required><br>

        <label>Classes per day:</label>
        <input type="number" id="periods" min="1" max="10" required><br>

        <label>Subjects (comma-separated):</label>
        <input type="text" id="subjects" placeholder="Math, Science, English, History" required><br>
        
        <label>No. of Classes:</label>
        <input type="number" id="classes" min="1" max="20" required><br>

        <label>No. of Teachers:</label>
        <input type="number" id="teachers" min="1" required><br>

        <button type="submit" class="btn p-10 mt-3">Generate Timetable</button>
        <button type="button" class="btn p-10 mt-3" onclick="resetTable()">Reset</button>
        <a href="index.php"><button type="button" class="btn p-10 mt-3">Back to Home</button></a>
      </form>
    </section>

    <section class="table-section">
      <h2>Generated Timetable</h2>
      <div id="resultTable"></div>
    </section>
  </main>
  <script src="script.js"></script>
  <?php include 'include\footer.php';?>
</body>
</html>
