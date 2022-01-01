<?php 
include './dbconect/pdo.php';
$m = isset($_POST['makh'])?$_POST['makh']:'';
$t = isset($_POST['ten'])?$_POST['ten']:'';
$mk = isset($_POST['mk'])?$_POST['mk']:'';
if ($m==''){ header('location:KhachHang.php'); exit;}

$sql="insert into khachhang(MaKH, TenKH, Matkhau) 
                    values('$m','$t','$mk')";

$a=[$m, $t, $mk];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute();//ket qua truy van
header('location:KhachHang.php');