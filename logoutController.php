<?php
session_start();
unset($_SESSION["TravelloLogin"]);
header("Location: index.php");
?>
