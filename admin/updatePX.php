<?php 
include './dbconect/pdo.php';
$m = isset($_POST['maphieuxuat'])?$_POST['maphieuxuat']:'';
$ma = isset($_POST['masp'])?$_POST['masp']:'';
$mn = isset($_POST['manv'])?$_POST['manv']:'';
$s = isset($_POST['soluong'])?$_POST['soluong']:'';
$g = isset($_POST['dongia'])?$_POST['dongia']:'';
$n = isset($_POST['ngay'])?$_POST['ngay']:'';
$tg= isset($_POST['tonggia'])?$_POST['tonggia']:'';


$sql="update phieuxuatkho set MaSP=? , MaNV=?, SoLuong=?, DonGia=?, NgayXuat=?, TongGia=? where MaPhieuXuat=?  ";
$a =[$ma, $mn, $s, $g, $n, $tg, $m];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van

// echo "<pre>Da them $n dong";
// echo $sql ;

header('location:PhieuXuat.php');
