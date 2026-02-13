
<?php
include("../../config/flags.php");

$data = [
  1 => "Student: Jhon",
  2 => "Student: Alice",
  3 => "Student: Bob",
  4 => $flags['idor']
];
?>

<!DOCTYPE html>
<html>
<head>
<title>Student API</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ===== GLOBAL ===== */
body {
  background: radial-gradient(circle at top, #0f2027, #000);
  color: #e5e7eb;
  font-family: 'Segoe UI', Tahoma, sans-serif;
}

.container {
  max-width: 900px;
  margin: auto;
  padding: 30px;
}

/* ===== TITLE ===== */
.section-title {
  font-size: 28px;
  margin-bottom: 25px;
  display: flex;
  align-items: center;
  gap: 12px;
  color: #38bdf8;
}

/* ===== CARD ===== */
.card {
  background: linear-gradient(180deg, #020617, #000);
  padding: 22px;
  border-radius: 16px;
  border: 1px solid #1e293b;
  transition: all .25s ease;
  position: relative;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 0 25px rgba(56,189,248,0.25);
}

/* ===== BADGE ===== */
.badge {
  position: absolute;
  top: 14px;
  right: 14px;
  font-size: 12px;
  padding: 4px 10px;
  border-radius: 999px;
  background: #38bdf8;
  color: #000;
  font-weight: 700;
}
</style>
</head>

<body>

<div class="container">

  <h2 class="section-title">
    <i class="fa-solid fa-database"></i>
    Student API
  </h2>

<?php
$id = $_GET['id'] ?? 1;
echo "<div class='card'>";
echo "<span class='badge'>API</span>";
echo $data[$id];
echo "</div>";
?>

</div>

</body>
</html>
