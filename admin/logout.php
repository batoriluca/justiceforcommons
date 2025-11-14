<?php 
session_start();

session_destroy();
unset($_SESSION['username']);
echo "session_unset";
header('Location: login');
?>