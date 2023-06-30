<?php
session_start();
$_SESSION['ile']=0;
header("Refresh: 0.5; url=glowna.php");
echo '<script>alert("Wylogowano")</script>';
?>