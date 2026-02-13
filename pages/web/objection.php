<?php
include("../../config/flags.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
<title>Submit Objection</title>
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

/* ===== FORM CARD ===== */
.form-card {
  padding: 20px;
  margin-bottom: 30px;
  background: #020617;
  border-radius: 14px;
  border: 1px solid #1e293b;
}

/* ===== FORM ===== */
form {
  display: flex;
  gap: 15px;
}

form input {
  flex: 1;
  padding: 12px 14px;
  background: #020617;
  border: 1px solid #334155;
  border-radius: 10px;
  color: #e5e7eb;
}

form input:focus {
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

/* ===== CARD ===== */
.card {
  background: linear-gradient(180deg, #020617, #000);
  padding: 22px;
  border-radius: 16px;
  border: 1px solid #1e293b;
  margin-top: 20px;
  transition: all .25s ease;
}

.card:hover {
  box-shadow: 0 0 25px rgba(56,189,248,0.25);
}

/* ===== FLAG ===== */
.flag {
  margin-top: 20px;
  padding: 15px;
  border-radius: 14px;
  border: 1px dashed #22c55e;
  color: #22c55e;
  font-size: 18px;
  animation: glow 1.5s infinite alternate;
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
    <i class="fa-solid fa-triangle-exclamation"></i>
    Submit Objection
  </h2>

  <div class="form-card">
    <form method="GET">
      <input name="msg" placeholder="Enter objection" autocomplete="off">
      <button class="btn">
        <i class="fa-solid fa-paper-plane"></i> Send
      </button>
    </form>
  </div>

<?php
if (isset($_GET['msg'])) {

    // Vulnerable output (reflected XSS)
    echo "<div class='card'>".$_GET['msg']."</div>";

    // 🔥 FLAG TRIGGER → show flag in alert popup
    if (
        strpos($_GET['msg'], "alert(document.cookie") !== false ||
        strpos($_GET['msg'], "alert(document.cookie()") !== false
    ) {
        echo "<script>alert('FLAG: {$flags['xss2']}');</script>";
    }
}
?>


</div>

</body>
</html>
