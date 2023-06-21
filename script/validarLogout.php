<?php
session_start();
session_destroy();
header('location: /Biblioteca/login.php');
?>