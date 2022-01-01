<?php
if(!isset($_SESSION))session_start();
unset($_SESSION['quantri']);
header('location:../index.php');