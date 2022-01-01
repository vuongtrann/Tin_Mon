<?php 
include './dbconect/pdo.php';
$m = isset($_POST['maloai'])?$_POST['maloai']:'';
$t = isset($_POST['tenloai'])?$_POST['tenloai']:'';

if ($m==''){ header('location:loaiSP.php'); exit;}

$sql="insert into loaisanpham(MaLoai, TenLoai) 
                    values('$m','$t')";

$a=[$m, $t];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute();//ket qua truy van
header('location:loaiSP.php');

 