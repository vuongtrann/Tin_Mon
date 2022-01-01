<?php 
include './dbconect/pdo.php';
$m = isset($_POST['maloai'])?$_POST['maloai']:'';
$t = isset($_POST['tenloai'])?$_POST['tenloai']:'';

if ($m==''){ header('location:loaiSP.php'); exit;}

$sql="update loaisanpham set TenLoai=? where MaLoai=?  ";
$a =[$t ,$m];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van

// echo "<pre>Da them $n dong";
// echo $sql ;
// print_r($a);
header('location:LoaiSP.php');

