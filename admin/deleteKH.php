<?php
include_once './dbconect/config.php';
include './dbconect/pdo.php';
$m=isset($_GET['makh'])?$_GET['makh']:'';
if($m !='')
{
    $sql="delete from khachhang where MaKH=?";
    $a=[$m];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);

}
header('location:index.php'); 