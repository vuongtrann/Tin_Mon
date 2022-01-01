<?php
include_once './dbconect/config.php';
include './dbconect/pdo.php';
$m=isset($_GET['masp'])?$_GET['masp']:'';
if($m !='')
{
    $sql="delete from sanpham where MaSP=?";
    $a=[$m];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);

}
header('location:index.php'); 