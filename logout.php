<?php 
session_start();

// Unset a specific session variable
unset($_SESSION['user']);

// Destroy the entire session
session_destroy();

// Redirect to the homepage
header('location: index.php');
exit();
?>