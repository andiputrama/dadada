<?php

session_start();

unset($_SESSION['email']);
$_SESSION['alert'] = "Log out success.";
header("Location:login.php");

?>