<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../../config/db.php");
include("../../config/flags.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Panel</title>

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
  font-size: 40px;
  color: #38bdf8;
  text-shadow: 0 0 18px rgba(56,189,248,.6);
  margin-bottom: 10px;
}

/* Subtitle */
.sub {
  color: #9ca3af;
  margin-bottom: 25px;
}

/* Login Card */
.card {
  width: 420px;
  margin: auto;
  padding: 25px;
  border-radius: 18px;
  background: linear-gradient(180deg, #020617, #000);
  border: 1px solid #1e293b;
  box-shadow: 0 0 35px rgba(56,189,248,.15);
}

/* Inputs */
input {
  width: 90%;
  padding: 12px;
  margin-top: 10px;
  background: #020617;
  border: 1px solid #1e293b;
  border-radius: 10px;
  color: #e5e7eb;
}

input:focus {
  outline: none;
  border-color: #38bdf8;
  box-shadow: 0 0 12px rgba(56,189,248,.5);
}

/* Button */
.btn {
  margin-top: 18px;
  padding: 10px 28px;
  border-radius: 999px;
  border: none;
  background: linear-gradient(90deg, #38bdf8, #0ea5e9);
  color: #000;
  font-weight: bold;
  cursor: pointer;
  transition: .25s;
}

.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 20px rgba(56,189,248,.6);
}

/* Badge */
.badge {
  display: inline-block;
  padding: 4px 14px;
  background: #38bdf8;
  color: #000;
  border-radius: 999px;
  font-size: 12px;
  font-weight: bold;
  margin-bottom: 14px;
}

/* Messages */
pre {
  margin-top: 20px;
  color: #22c55e;
  font-size: 18px;
  text-shadow: 0 0 12px rgba(34,197,94,.6);
}

.error {
  margin-top: 15px;
  color: #f43f5e;
  text-shadow: 0 0 10px rgba(244,63,94,.6);
}

.success {
  margin-top: 15px;
  color: #38bdf8;
  text-shadow: 0 0 12px rgba(56,189,248,.6);
}
</style>
</head>

<body>

<div class="container">

  <div class="badge">AUTH • BRUTE FORCE</div>

  <h2 class="title">
    <i class="fa-solid fa-lock"></i> Login Panel
  </h2>

  <p class="sub">Multiple failed attempts allowed</p>

  <div class="card">
    <form method="POST">
      <input name="user" placeholder="Username">
      <input name="pass" placeholder="Password" type="password">
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
        if($u == "cyber" && $p == "security"){
            echo "<pre>".$flags['bf']."</pre>";
        } else {
            echo "<div class='success'>Welcome user</div>";
        }
    } else {
        echo "<div class='error'>Invalid credentials</div>";
    }
}
?>

</div>

</body>
</html>
