<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../../config/db.php");
include("../../config/flags.php");
?>

<link rel="stylesheet" href="../../assets/css/main.css">

<div class="container">
<h2>Student Login</h2>

<form method="POST">
<input name="user" placeholder="Username"><br><br>
<input name="pass" placeholder="Password" type="password"><br><br>
<button class="btn">Login</button>
</form>

<?php
if(isset($_POST['user'])){
  $u = $_POST['user'];
  $p = $_POST['pass'];

  $q = "SELECT * FROM users WHERE username='$u' AND password='$p'";
  $res = mysqli_query($conn,$q);

  if(mysqli_num_rows($res) > 0){
    echo "<pre>".$flags['auth1']."</pre>";
  } else {
    echo "Invalid login";
  }
}
?>
</div>
