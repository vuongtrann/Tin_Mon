<?php 
include './dbconect/pdo.php';
$m = isset($_POST['MaKH'])?$_POST['MaKH']:'';
$t = isset($_POST['TenKH'])?$_POST['TenKH']:'';
$mk = isset($_POST['MKhau'])?$_POST['MKhau']:'';

if($m!=''){
    $de=false;
    $sql='select * from khachhang';
    $objStatament = $objPDO->prepare($sql);
    $objStatament->execute();
    $data = $objStatament->fetchALL(PDO::FETCH_OBJ);
    foreach($data as $v){
        if($v->MaKH==$m){
            $de=true;
            break;
        }
    }
    if($de==false){
        $sql="insert into khachhang (MaKH, TenKH, Matkhau) values('$m', '$t','$mk')";
        $a =[ $m, $t, $mk];
        $tam = $objPDO->prepare($sql);
        $tam->execute($a);
        //header('location:login.php');
        echo '<script language="javascript">';
        echo 'alert("Đăng kí tài khoản thành công !")';
        echo '</script>';
        header("refresh:0.05;url=login.php"); 
    }else{
        echo '<script language="javascript">';
        echo 'alert("Mã khách hàng đã tồn tại")';
        echo '</script>';
        header("refresh:0.5;url=register.php");
    }
}

