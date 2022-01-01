<?php 
include './dbconect/pdo.php';
$m = isset($_POST['mkh'])?$_POST['makh']:'';
$t = isset($_POST['ten'])?$_POST['ten']:'';
$mk = isset($_POST['mk'])?$_POST['mk']:'';

if ($m==''){ header('location:KhachHang.php'); exit;}

$sql="update khachhang set TenKH=?, Matkhau=? where MaKH=?  ";
$a =[$t , $m, $mk];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van

// echo "<pre>Da them $n dong";
// echo $sql ;
// print_r($a);
header('location:KhachHang.php');

