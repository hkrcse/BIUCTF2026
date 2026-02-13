<?php
include("../../config/flags.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* ===== GLOBAL ===== */
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

/* ===== TITLE ===== */
.title {
  font-size: 48px;
  color: #f43f5e;
  text-shadow: 0 0 20px rgba(244,63,94,.6);
  margin-bottom: 30px;
}

/* ===== PANEL ===== */
.panel {
  width: 420px;
  margin: auto;
  padding: 25px;
  border-radius: 16px;
  background: linear-gradient(180deg, #020617, #000);
  border: 1px solid #1e293b;
  box-shadow: 0 0 35px rgba(56,189,248,.15);
}

/* ===== INPUT ===== */
label {
  color: #38bdf8;
  font-size: 18px;
}

input {
  width: 90%;
  padding: 12px;
  margin-top: 6px;
  background: #020617;
  border: 1px solid #1e293b;
  border-radius: 10px;
  color: #e5e7eb;
  outline: none;
}

input:focus {
  border-color: #38bdf8;
  box-shadow: 0 0 12px rgba(56,189,248,.5);
}

/* ===== BUTTON ===== */
.btn {
  margin-top: 18px;
  padding: 10px 24px;
  border-radius: 999px;
  border: none;
  background: linear-gradient(90deg, #38bdf8, #22d3ee);
  color: #000;
  font-weight: bold;
  cursor: pointer;
  transition: .25s;
}

.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 20px rgba(56,189,248,.6);
}

/* ===== HINT ===== */
#hint {
  margin-top: 18px;
  color: #facc15;
  text-shadow: 0 0 10px rgba(250,204,21,.6);
}

/* ===== BADGE ===== */
.badge {
  display: inline-block;
  margin-bottom: 15px;
  padding: 4px 12px;
  background: #38bdf8;
  color: #000;
  border-radius: 999px;
  font-size: 12px;
  font-weight: bold;
}
</style>
</head>

<body>

<div class="container">

  <div class="badge">AUTH • CLIENT‑SIDE</div>

  <h1 class="title">
    <i class="fa-solid fa-user-shield"></i> Admin Panel
  </h1>

  <form onsubmit="check(); return false;">
    <div class="panel">

      <label>Username</label><br>
      <input type="text" name="user" id="user" autocomplete="off"><br><br>

      <label>Password</label><br>
      <input type="password" name="pass" id="pass" autocomplete="off"><br>

      <button class="btn">Login</button>

    </div>
  </form>

  <br>

  <button class="btn" onclick="Hint()">Hint</button>
  <p id="hint"></p>

</div>

<script>
function Hint() {
    document.getElementById("hint").innerHTML = 'Easier than Ableton';
}
</script>

<script>
var _0xae5b=[
"\x76\x61\x6C\x75\x65",
"\x75\x73\x65\x72",
"\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64",
"\x70\x61\x73\x73",
"\x62\x69\x75\x63\x74\x66",
"\x77\x72\x6F\x6E\x67\x20\x50\x61\x73\x77\x6F\x72\x64",
"\x62\x69\x75\x63\x74\x66\x32\x30\x32\x36"
];

function check(){
  var u=document[_0xae5b[2]](_0xae5b[1])[_0xae5b[0]];
  var p=document[_0xae5b[2]](_0xae5b[3])[_0xae5b[0]];

  if(u==_0xae5b[4] && p==_0xae5b[6]){
    fetch("flag.php")
      .then(r => r.text())
      .then(d => alert(d));
  } else {
    alert(_0xae5b[5]);
  }
}
</script>


</body>
</html>
