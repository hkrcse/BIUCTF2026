<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../../config/db.php");
include("../../config/flags.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>

<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
body {
  background: radial-gradient(circle at top, #0f2027, #000);
  color: #e5e7eb;
  font-family: 'Patua One', cursive;
}

.container {
  max-width: 900px;
  margin: auto;
  padding: 40px;
  text-align: center;
}

/* Title */
.title {
  font-size: 42px;
  color: #22d3ee;
  text-shadow: 0 0 20px rgba(34,211,238,.6);
  margin-bottom: 25px;
}

/* Login Card */
.card {
  width: 420px;
  margin: auto;
  padding: 25px;
  border-radius: 16px;
  background: linear-gradient(180deg, #020617, #000);
  border: 1px solid #1e293b;
  box-shadow: 0 0 35px rgba(34,211,238,.15);
}

/* Inputs */
input {
  width: 90%;
  padding: 12px;
  margin-top: 8px;
  background: #020617;
  border: 1px solid #1e293b;
  border-radius: 10px;
  color: #e5e7eb;
  outline: none;
}

input:focus {
  border-color: #22d3ee;
  box-shadow: 0 0 12px rgba(34,211,238,.5);
}

/* Button */
.btn {
  margin-top: 18px;
  padding: 10px 26px;
  border-radius: 999px;
  border: none;
  background: linear-gradient(90deg, #22d3ee, #38bdf8);
  color: #000;
  font-weight: bold;
  cursor: pointer;
  transition: .25s;
}

.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 20px rgba(34,211,238,.6);
}

/* Badge */
.badge {
  display: inline-block;
  margin-bottom: 12px;
  padding: 4px 12px;
  background: #22d3ee;
  color: #000;
  border-radius: 999px;
  font-size: 12px;
  font-weight: bold;
}

/* Messages */
pre {
  margin-top: 20px;
  color: #22c55e;
  font-size: 18px;
  text-shadow: 0 0 12px rgba(34,197,94,.5);
}

.error {
  margin-top: 15px;
  color: #f43f5e;
  text-shadow: 0 0 10px rgba(244,63,94,.6);
}
</style>
</head>

<body>

<div class="container">

  <div class="badge">AUTH • SQL INJECTION</div>

  <h2 class="title">
    <i class="fa-solid fa-graduation-cap"></i> Student Login
  </h2>

  <div class="card">
    <form method="POST">
      <input name="user" placeholder="Username"><br><br>
      <input name="pass" placeholder="Password" type="password"><br>
      <button class="btn">Login</button>
    </form>
  </div>

<?php
if(isset($_POST['user'])){
  $u = $_POST['user'];
  $p = $_POST['pass'];

  $q = "SELECT * FROM users WHERE username='$u' AND password='$p'";
  $res = mysqli_query($conn,$q);

  if(mysqli_num_rows($res) > 0){
    echo "<pre>".$flags['auth1']."</pre>";
  } else {
    echo "<div class='error'>Invalid login</div>";
  }
}
?>

</div>

</body>
</html>
