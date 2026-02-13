<?php
include("./db.php");
?>
<link rel="stylesheet" href="../../assets/css/main.css">

<style>
body {
  background: radial-gradient(circle at top, #0d0018, #000);
  font-family: 'Courier New', monospace;
  color: #e6e6ff;
}

.container {
  max-width: 800px;
  margin: 70px auto;
  padding: 30px;
  background: rgba(15, 5, 25, 0.9);
  border: 2px solid #00f0ff;
  border-radius: 14px;
  box-shadow: 0 0 20px #00f0ff, inset 0 0 10px #00f0ff;
}

h2 {
  text-align: center;
  color: #00f0ff;
  text-shadow: 0 0 14px #00f0ff;
  margin-bottom: 12px;
}

p {
  color: #a3f0ff;
  line-height: 1.6;
  text-align: center;
}

.badge {
  display: inline-block;
  margin: 8px 6px 16px;
  padding: 6px 16px;
  border-radius: 20px;
  font-size: 0.85em;
  background: #00f0ff;
  color: #000;
  box-shadow: 0 0 12px #00f0ff;
}

input[type="text"] {
  width: 60%;
  padding: 10px;
  margin: 16px auto;
  display: block;
  border-radius: 8px;
  border: 2px solid #00f0ff;
  background: #0d0018;
  color: #00f0ff;
  font-weight: bold;
  text-align: center;
  box-shadow: 0 0 10px #00f0ff inset;
}

button.btn {
  display: block;
  margin: 20px auto;
  padding: 12px 24px;
  border: 2px solid #00f0ff;
  background: transparent;
  color: #00f0ff;
  font-weight: bold;
  border-radius: 10px;
  box-shadow: 0 0 14px #00f0ff;
  transition: all 0.25s ease;
  cursor: pointer;
}

button.btn:hover {
  background: #00f0ff;
  color: #000;
  box-shadow: 0 0 26px #00f0ff;
}

h3 {
  color: #00f0ff;
  text-shadow: 0 0 10px #00f0ff;
  margin-top: 24px;
}

.result p {
  color: #39ff14;
  font-weight: bold;
  text-shadow: 0 0 8px #39ff14;
}

</style>

<div class="container">
  <h2>Student Records Portal</h2>

  <span class="badge">SQLi</span>
  <span class="badge">WEB</span>
  <span class="badge">Easy</span>

  <p>
    Search student records using their ID.<br>
    Only authorized users should access sensitive data.<br>
    Can you exploit the input to retrieve hidden information?
  </p>

  <form method="GET">
    <input type="text" name="id" placeholder="Student ID">
    <button class="btn">Search</button>
  </form>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ❌ Intentionally vulnerable query for SQLi
    $query = "SELECT name, department FROM students WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<h3>Result</h3><div class='result'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>Name: {$row['name']}</p>";
            echo "<p>Department: {$row['department']}</p>";
        }
        echo "</div>";
    } else {
        echo "<p class='result'>No records found</p>";
    }
}
?>
</div>
