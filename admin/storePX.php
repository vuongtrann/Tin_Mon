<?php 
include './dbconect/pdo.php';
$m = isset($_POST['maphieuxuat'])?$_POST['maphieuxuat']:'';
$ma = isset($_POST['masp'])?$_POST['masp']:'';
$mn = isset($_POST['manv'])?$_POST['manv']:'';
$s = isset($_POST['soluong'])?$_POST['soluong']:'';
$g = isset($_POST['dongia'])?$_POST['dongia']:'';
$n = isset($_POST['ngay'])?$_POST['ngay']:'';
$tg= isset($_POST['tonggia'])?$_POST['tonggia']:'';

if ($m==''){ header('location:PhieuXuat.php'); exit;}

$sql="insert into phieuxuatkho(MaPhieuXuat, MaSP, MaNV, SoLuong, DonGia, NgayXuat, TongGia) 
                    values('$m', '$ma', '$mn', '$s', '$g', '$n', '$tg')";

$a=[$m, $ma, $mn, $s, $g, $n, $tg];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute();//ket qua truy van
header('location:PhieuXuat.php');

