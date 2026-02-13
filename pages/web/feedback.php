<?php
include("../../config/db.php");
include("../../config/flags.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
<title>Course Feedback</title>
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
  flex-direction: column;
  gap: 15px;
}

textarea {
  min-height: 120px;
  padding: 14px;
  background: #020617;
  border: 1px solid #334155;
  border-radius: 10px;
  color: #e5e7eb;
  resize: vertical;
}

textarea:focus {
  outline: none;
  border-color: #38bdf8;
}

/* ===== BUTTON ===== */
.btn {
  align-self: flex-start;
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
  transition: all .25s ease;
  margin-top: 20px;
}

.card:hover {
  box-shadow: 0 0 25px rgba(56,189,248,0.25);
}

/* ===== PREVIEW IMAGE ===== */
.card img {
  max-width: 100%;
  border-radius: 10px;
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
    <i class="fa-solid fa-comment-dots"></i>
    Course Feedback
  </h2>

  <div class="form-card">
    <form method="POST">
      <textarea name="msg" placeholder="Write feedback"></textarea>
      <button class="btn">
        <i class="fa-solid fa-paper-plane"></i> Submit
      </button>
    </form>
  </div>

<?php
if (isset($_POST['msg'])) {

    echo "<div class='card'>";
    echo "<h3>Preview</h3>";

    // ❌ Attribute-context XSS (INTENTIONAL)
    echo '<img src="'.$_POST['msg'].'" />';

    echo "</div>";

    // 🔥 FLAG TRIGGER
    if (
        strpos($_POST['msg'], '"><script>') !== false ||
        strpos($_POST['msg'], "'><script>") !== false
    ) {
        echo "<div class='flag'>{$flags['xss1']}</div>";
    }
}
?>

</div>

</body>
</html>
