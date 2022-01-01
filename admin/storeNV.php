<?php 

include './dbconect/pdo.php';
$m = isset($_POST['manv'])?$_POST['manv']:'';
$mq = isset($_POST['maquyen'])?$_POST['maquyen']:'';
$t = isset($_POST['ten'])?$_POST['ten']:'';
$g = isset($_POST['gioitinh'])?$_POST['gioitinh']:'';
$n = isset($_POST['ngaysinh'])?$_POST['ngaysinh']:'';
$cm = isset($_POST['cmnd'])?$_POST['cmnd']:'';
$s = isset($_POST['sdt'])?$_POST['sdt']:'';

if ($m==''){ header('location:NhanVien.php'); exit;}

$sql="insert into nhanvien(MaNV , MaQuyen, TenNV, GioiTinh, NgaySinh, CMND, SDTNV) 
                    values(?, ?, ?, ?, ?, ?, ?)";
$a=[$m, $mq, $t, $g, $n, $cm, $s];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy p

header('location:NhanVien.php');
 
