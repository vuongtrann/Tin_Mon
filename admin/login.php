<?php
if(!isset($_SESSION)) session_start();
$u=isset($_POST['user'])?$_POST['user']:'';
$p=isset($_POST['pass'])?$_POST['pass']:'';

if($u=='admin' && $p=='123456')
{
	$_SESSION['quantri']=$u;
    header('location:index.php');
    exit;
}
else
 {
    header('location:login.html');
    exit;
 }
?>