<?php
$con = mysqli_connect("localhost","root","12qwaszx","pollution") or die(mysqli_error($con));
session_start();
session_unset();
session_destroy();
header("Location: http://127.0.0.1/Hackathon/frontend/index.php");
?>
