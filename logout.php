<?php
session_start();
session_unset();
unset($_SESSION['username']);
unset($_SESSION['name']);
Header("Location: index.php");
?>