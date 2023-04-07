<?php

session_start();
unset($_SESSION["email"]);
unset($_SESSION["pass"]);

// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Location:login.php");


?>