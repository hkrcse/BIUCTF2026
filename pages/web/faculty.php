<?php
include("../../config/db.php");
include("../../config/flags.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Faculty Directory</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ===== GLOBAL ===== */
body {
  background: radial-gradient(circle at top, #0f2027, #000);
  color: #e5e7eb;
  font-family: 'Segoe UI', Tahoma, sans-serif;
}

.container {
  max-width: 1100px;
  margin: auto;
  padding: 30px;
}

/* ===== TITLES ===== */
.section-title {
  font-size: 28px;
  margin-bottom: 25px;
  display: flex;
  align-items: center;
  gap: 12px;
  color: #38bdf8;
}

/* ===== SEARCH CARD ===== */
.search-card {
  padding: 20px;
  margin-bottom: 30px;
  background: #020617;
  border-radius: 14px;
  border: 1px solid #1e293b;
}

.search-form {
  display: flex;
  gap: 15px;
}

.search-form input {
  flex: 1;
  padding: 12px 14px;
  background: #020617;
  border: 1px solid #334155;
  border-radius: 8px;
  color: #e5e7eb;
}

.search-form input:focus {
  outline: none;
  border-color: #38bdf8;
}

/* ===== BUTTON ===== */
.btn {
  background: linear-gradient(135deg, #38bdf8, #0ea5e9);
  border: none;
  color: #000;
  padding: 12px 22px;
  border-radius: 10px;
  font-weight: 600;
  cursor: pointer;
  transition: all .25s ease;
}

.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 15px #38bdf8;
}

/* ===== GRID ===== */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 25px;
}

/* ===== CARD ===== */
.card {
  background: linear-gradient(180deg, #020617, #000);
  padding: 22px;
  border-radius: 16px;
  border: 1px solid #1e293b;
  transition: all .25s ease;
  position: relative;
  overflow: hidden;
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

/* ===== TEXT ===== */
.card h3 {
  margin-top: 10px;
  font-size: 20px;
}

.card p {
  margin: 6px 0;
  color: #94a3b8;
}

/* ===== FLAG CARD ===== */
.flag-card {
  border: 1px dashed #22c55e;
  animation: glow 1.5s infinite alternate;
}

.flag-card h3 {
  color: #22c55e;
}

@keyframes glow {
  from { box-shadow: 0 0 5px #22c55e; }
  to   { box-shadow: 0 0 20px #22c55e; }
}
</style>
</head>

<body>

<div class="container">

  <h2 class="section-title">
    <i class="fa-solid fa-users"></i>
    Faculty Directory
  </h2>

  <div class="card search-card">
    <form method="GET" class="search-form">
      <input name="id" placeholder="Enter Faculty ID" autocomplete="off">
      <button class="btn">
        <i class="fa-solid fa-magnifying-glass"></i> Search
      </button>
    </form>
  </div>

  <div class="grid">
  <?php
  if(isset($_GET['id'])){
    $id = $_GET['id']; // ❌ vulnerable
    $q = "SELECT * FROM faculty WHERE id=$id";
    $r = mysqli_query($conn,$q);

    while($row=mysqli_fetch_assoc($r)){
      echo "<div class='card'>";
      echo "<span class='badge'>Faculty</span>";
      echo "<h3>{$row['name']}</h3>";
      echo "<p><i class='fa-solid fa-building'></i> {$row['department']}</p>";
      echo "<p><i class='fa-solid fa-envelope'></i> {$row['email']}</p>";
      echo "</div>";
    }

    if(stripos($id,"or") !== false || stripos($id,"OR") !== false){
      echo "
      <div class='card flag-card'>
        <span class='badge'>FLAG</span>
        <h3>🎉 SQL Injection Successful</h3>
        <p>{$flags['sqli1']}</p>
      </div>";
    }
  }
  ?>
  </div>

</div>

</body>
</html>
