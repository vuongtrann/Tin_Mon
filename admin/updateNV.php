<?php 
include './dbconect/pdo.php';
$m = isset($_POST['manv'])?$_POST['manv']:'';
$mq = isset($_POST['maquyen'])?$_POST['maquyen']:'';
$t = isset($_POST['ten'])?$_POST['ten']:'';
$g = isset($_POST['gioitinh'])?$_POST['gioitinh']:'';
$n = isset($_POST['ngaysinh'])?$_POST['ngaysinh']:'';
$cm = isset($_POST['cmnd'])?$_POST['cmnd']:'';
$s = isset($_POST['sdt'])?$_POST['sdt']:'';


$sql="update nhanvien set MaQuyen=? , TenNV=?, GioiTinh=?, NgaySinh=?, CMND=?, SDTNV=? where MaNV=?  ";
$a =[$mq, $t, $g, $n, $cm, $s, $m];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van

// echo "<pre>Da them $n dong";
// echo $sql ;
// print_r($a);
header('location:NhanVien.php');
