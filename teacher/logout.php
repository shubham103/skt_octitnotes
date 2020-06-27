<?php
session_start();
unset($_SESSION['tid']);
header("location:../index.php");
?>