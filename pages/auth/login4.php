<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../../config/db.php");
include("../../config/flags.php");
?>

<link rel="stylesheet" href="../../assets/css/main.css">

<div class="container">
<h2>Login Panel</h2>
<p style="color:#9ca3af">Multiple failed attempts allowed</p>

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
        if($u == "cyber" && $p == "security"){
            echo "<pre style='color:#22c55e;font-size:18px;'>".$flags['bf']."</pre>";
        } else {
            echo "Welcome user";
        }
    } else {
        echo "<p style='color:red'>Invalid credentials</p>";
    }
}
?>
</div>
