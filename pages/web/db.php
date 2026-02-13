<?php
$conn = mysqli_connect("localhost", "eduvuln", "eduvuln123", "university");
if (!$conn) {
    die("DB Connection Failed: " . mysqli_connect_error());
}
?>
